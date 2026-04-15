<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace bbbext_bnx;

/**
 * Tests for install/upgrade migration from BN Reminders.
 *
 * @covers ::bbbext_bnx_migrate_bnreminders_data
 * @covers ::bbbext_bnx_migrate_bnreminders_instance_settings
 * @covers ::bbbext_bnx_migrate_bnreminders_reminders
 * @covers ::bbbext_bnx_migrate_bnreminders_guest_reminders
 * @covers ::bbbext_bnx_migrate_bnreminders_admin_settings
 * @covers ::bbbext_bnx_migrate_bnreminders_user_preferences
 * @package   bbbext_bnx
 * @copyright 2026 onwards, Blindside Networks Inc
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author    Jesus Federico  (jesus [at] blindsidenetworks [dt] com)
 */
final class install_migration_test extends \advanced_testcase {
    protected function setUp(): void {
        parent::setUp();
        $this->resetAfterTest();
        $this->setAdminUser();

        require_once(__DIR__ . '/../db/migration.php');
    }

    /**
     * BN reminders settings/data should be migrated and plugin disabled.
     */
    public function test_migrate_bnreminders_data_and_disable_plugin(): void {
        global $DB;

        $this->create_legacy_bnreminders_tables();

        $course = $this->getDataGenerator()->create_course();
        $bbb = $this->getDataGenerator()->create_module('bigbluebuttonbn', ['course' => $course->id]);
        $userid = (int) $this->getDataGenerator()->create_user()->id;

        $DB->delete_records(bbbext_bnx_legacy_bnreminders_table(), ['bigbluebuttonbnid' => $bbb->id]);
        $DB->delete_records(bbbext_bnx_legacy_bnreminders_table('_rem'), ['bigbluebuttonbnid' => $bbb->id]);
        $DB->delete_records(bbbext_bnx_legacy_bnreminders_table('_guests'), ['bigbluebuttonbnid' => $bbb->id]);

        $bnxid = $this->ensure_bnx_instance($bbb->id);

        $DB->insert_record(bbbext_bnx_legacy_bnreminders_table(), (object) [
            'bigbluebuttonbnid' => $bbb->id,
            'reminderenabled' => 1,
            'remindertoguestsenabled' => 1,
        ]);

        $DB->insert_record(bbbext_bnx_legacy_bnreminders_table('_rem'), (object) [
            'bigbluebuttonbnid' => $bbb->id,
            'timespan' => 'PT1H',
            'lastsent' => 123,
        ]);

        $DB->insert_record(bbbext_bnx_legacy_bnreminders_table('_guests'), (object) [
            'bigbluebuttonbnid' => $bbb->id,
            'email' => 'legacy@example.com',
            'userfrom' => $userid,
            'issent' => 0,
            'isenabled' => 1,
            'usermodified' => $userid,
            'timecreated' => 111,
            'timemodified' => 222,
        ]);

        set_config('emailsubject', 'Legacy Subject', 'bbbext_bnreminders');
        set_config('emailtemplate', '<p>Legacy Template</p>', 'bbbext_bnreminders');
        set_config('emailfooter', '<p>Legacy Footer</p>', 'bbbext_bnreminders');
        set_config('emailcontent', 'Legacy Content', 'bbbext_bnreminders');
        set_config('version', '2025100700', 'bbbext_bnreminders');

        $DB->insert_record('user_preferences', (object) [
            'userid' => $userid,
            'name' => 'bbbext_bnreminders_' . $bbb->id,
            'value' => '1',
        ]);

        \core_plugin_manager::reset_caches();

        bbbext_bnx_migrate_bnreminders_data();

        $reminderenabled = $DB->get_record('bbbext_bnx_settings', [
            'bnxid' => $bnxid,
            'name' => 'reminderenabled',
        ], '*', MUST_EXIST);
        $this->assertSame('1', (string) $reminderenabled->value);

        $remindertoguestsenabled = $DB->get_record('bbbext_bnx_settings', [
            'bnxid' => $bnxid,
            'name' => 'remindertoguestsenabled',
        ], '*', MUST_EXIST);
        $this->assertSame('1', (string) $remindertoguestsenabled->value);

        $this->assertTrue($DB->record_exists('bbbext_bnx_reminders', [
            'bigbluebuttonbnid' => $bbb->id,
            'timespan' => 'PT1H',
        ]));

        $this->assertTrue($DB->record_exists('bbbext_bnx_reminders_guests', [
            'bigbluebuttonbnid' => $bbb->id,
            'email' => 'legacy@example.com',
            'userfrom' => $userid,
        ]));

        $this->assertSame('Legacy Subject', get_config('bbbext_bnx', 'emailsubject'));
        $this->assertSame('<p>Legacy Template</p>', get_config('bbbext_bnx', 'emailtemplate'));
        $this->assertSame('<p>Legacy Footer</p>', get_config('bbbext_bnx', 'emailfooter'));
        $this->assertSame('Legacy Content', get_config('bbbext_bnx', 'emailcontent'));

        $newpreference = $DB->get_record('user_preferences', [
            'userid' => $userid,
            'name' => 'bbbext_bnx_reminder_' . $bbb->id,
        ], '*', MUST_EXIST);
        $this->assertSame('1', (string) $newpreference->value);

        $this->assertSame('1', get_config('bbbext_bnreminders', 'disabled'));
    }

    /**
     * Running migration multiple times should not duplicate records.
     */
    public function test_migration_is_idempotent(): void {
        global $DB;

        $this->create_legacy_bnreminders_tables();

        $course = $this->getDataGenerator()->create_course();
        $bbb = $this->getDataGenerator()->create_module('bigbluebuttonbn', ['course' => $course->id]);

        $DB->delete_records(bbbext_bnx_legacy_bnreminders_table(), ['bigbluebuttonbnid' => $bbb->id]);
        $DB->delete_records(bbbext_bnx_legacy_bnreminders_table('_rem'), ['bigbluebuttonbnid' => $bbb->id]);

        $bnxid = $this->ensure_bnx_instance($bbb->id);

        $DB->insert_record(bbbext_bnx_legacy_bnreminders_table(), (object) [
            'bigbluebuttonbnid' => $bbb->id,
            'reminderenabled' => 1,
            'remindertoguestsenabled' => 0,
        ]);

        $DB->insert_record(bbbext_bnx_legacy_bnreminders_table('_rem'), (object) [
            'bigbluebuttonbnid' => $bbb->id,
            'timespan' => 'P1D',
            'lastsent' => 0,
        ]);

        set_config('version', '2025100700', 'bbbext_bnreminders');
        \core_plugin_manager::reset_caches();

        bbbext_bnx_migrate_bnreminders_data();
        bbbext_bnx_migrate_bnreminders_data();

        $this->assertSame(1, $DB->count_records('bbbext_bnx_settings', [
            'bnxid' => $bnxid,
            'name' => 'reminderenabled',
        ]));

        $this->assertSame(1, $DB->count_records('bbbext_bnx_settings', [
            'bnxid' => $bnxid,
            'name' => 'remindertoguestsenabled',
        ]));

        $this->assertSame(1, $DB->count_records('bbbext_bnx_reminders', [
            'bigbluebuttonbnid' => $bbb->id,
            'timespan' => 'P1D',
        ]));
    }

    /**
     * Create the legacy BN reminders tables used by migration.
     */
    private function create_legacy_bnreminders_tables(): void {
        global $DB;

        $dbman = $DB->get_manager();

        $table = new \xmldb_table(bbbext_bnx_legacy_bnreminders_table());
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE);
        $table->add_field('bigbluebuttonbnid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL);
        $table->add_field('reminderenabled', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('remindertoguestsenabled', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, '0');
        $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        } else {
            $field = new \xmldb_field('remindertoguestsenabled', XMLDB_TYPE_INTEGER, '1', null, XMLDB_NOTNULL, null, '0');
            if (!$dbman->field_exists($table, $field)) {
                $dbman->add_field($table, $field);
            }
        }

        $table = new \xmldb_table(bbbext_bnx_legacy_bnreminders_table('_rem'));
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE);
        $table->add_field('bigbluebuttonbnid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL);
        $table->add_field('timespan', XMLDB_TYPE_CHAR, '255', null, XMLDB_NOTNULL);
        $table->add_field('lastsent', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        $table = new \xmldb_table(bbbext_bnx_legacy_bnreminders_table('_guests'));
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE);
        $table->add_field('bigbluebuttonbnid', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL);
        $table->add_field('email', XMLDB_TYPE_CHAR, '254');
        $table->add_field('userfrom', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('issent', XMLDB_TYPE_INTEGER, '1', null, null, null, '0');
        $table->add_field('isenabled', XMLDB_TYPE_INTEGER, '1', null, null, null, '1');
        $table->add_field('usermodified', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('timecreated', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_field('timemodified', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, null, '0');
        $table->add_key('primary', XMLDB_KEY_PRIMARY, ['id']);
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }
    }

    /**
     * Ensure there is a BNX row for the given activity id and return its id.
     *
     * @param int $activityid
     * @return int
     */
    private function ensure_bnx_instance(int $activityid): int {
        global $DB;

        $existing = $DB->get_record('bbbext_bnx', ['bigbluebuttonbnid' => $activityid], 'id');
        if ($existing) {
            return (int) $existing->id;
        }

        return (int) $DB->insert_record('bbbext_bnx', (object) [
            'bigbluebuttonbnid' => $activityid,
            'timecreated' => time(),
            'timemodified' => time(),
        ]);
    }
}
