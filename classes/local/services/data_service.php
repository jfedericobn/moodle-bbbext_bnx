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

/**
 * Data service skeleton for bbbext_bnx (services namespace).
 *
 * Provides a minimal implementation that can be extended by other subplugins
 * (for example `bbbext_bnx_insights`) to provide richer course and enrollment
 * information.
 *
 * @package   bbbext_bnx
 * @copyright 2025 onwards, Blindside Networks Inc
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @author    Jesus Federico  (jesus [at] blindsidenetworks [dt] com)
 */

namespace bbbext_bnx\local\services;

use stdClass;

class data_service implements data_service_interface {
    /**
     * Cached service instance for the factory.
     *
     * @var self|null
     */
    protected static $service = null;

    /**
     * Get the shared service instance (factory).
     *
     * @return self
     */
    public static function get_service(): self {
        if (self::$service === null) {
            self::$service = new self();
        }
        return self::$service;
    }

    /**
     * Test hook to override the service instance (useful for unit tests).
     *
     * @param self|null $svc
     * @return void
     */
    public static function set_service(self $svc = null): void {
        self::$service = $svc;
    }

    // Static delegators removed: prefer instance methods via injected
    // `data_service_interface` or `data_service::get_service()`.

    // (see above) static delegators removed.

    /**
     * Instance implementation: Get detailed course information, including groups.
     *
     * @param int $courseid The ID of the course.
     * @return array The course information array.
     */
    public function get_course_info_instance($courseid) {
        global $DB;

        // Fetch course details (id, fullname, shortname).
        $course = $DB->get_record('course', ['id' => $courseid], 'id, fullname, shortname');
        if (!$course) {
            throw new \moodle_exception('invalidcourseid', 'error', '', $courseid);
        }

        // Fetch groups associated with the course.
        $groups = $DB->get_records('groups', ['courseid' => $courseid], '', 'id, name');

        // Format the groups as an array.
        $formattedgroups = [];
        foreach ($groups as $group) {
            $formattedgroups[] = [
                'id' => $group->id,
                'name' => $group->name,
            ];
        }

        // Return the structured course information.
        return [
            'course' => [
                'id' => $course->id,
                'fullname' => $course->fullname,
                'shortname' => $course->shortname,
                'groups' => $formattedgroups,
            ],
        ];
    }

    /**
     * Implementation of the interface method `get_course_info`.
     * Delegates to the instance implementation to preserve the existing
     * internal method naming.
     *
     * @param int $courseid
     * @return array
     */
    public function get_course_info(int $courseid): array {
        return $this->get_course_info_instance($courseid);
    }

    /**
     * Instance implementation to get enrollment information for a course.
     * Returns an array with key 'enrollment' containing user records.
     *
     * @param int $courseid
     * @return array
     */
    public function get_enrollment_instance($courseid) {
        // Use the Moodle API to get enrolled users for the course context.
        $context = \context_course::instance($courseid);
        $users = get_enrolled_users($context);

        $formatted = [];
        foreach ($users as $user) {
            $formatted[] = [
                'id' => $user->id,
                'firstname' => $user->firstname ?? '',
                'lastname' => $user->lastname ?? '',
            ];
        }

        return ['enrollment' => $formatted];
    }

    /**
     * Implementation of the interface method `get_enrollment`.
     *
     * @param int $courseid
     * @return array
     */
    public function get_enrollment(int $courseid): array {
        return $this->get_enrollment_instance($courseid);
    }
}
