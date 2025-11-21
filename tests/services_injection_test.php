<?php
/**
 * Unit tests for services injection via set_service()/get_service().
 *
 * @package   bbbext_bnx
 */

namespace bbbext_bnx;

use advanced_testcase;
use bbbext_bnx\local\services\bnx_settings_service;
use bbbext_bnx\local\services\data_service;
use bbbext_bnx\local\services\bnx_settings_service_interface;
use bbbext_bnx\local\services\data_service_interface;

final class services_injection_test extends advanced_testcase {
    protected function setUp(): void {
        parent::setUp();
        // Ensure default singletons are cleared for test isolation.
        bnx_settings_service::set_service(null);
        data_service::set_service(null);
    }

    public function test_settings_service_set_and_get_service(): void {
        $this->resetAfterTest(true);

        $mock = new class implements bnx_settings_service_interface {
            public function get_settings(int $bnxid): array {
                return ['mocked' => '1'];
            }
            public function get_setting(int $bnxid, string $name): ?string {
                return 'x';
            }
            public function set_settings(int $bnxid, array $values): void {}
            public function delete_settings(int $bnxid): void {}
            public function delete_setting(int $bnxid, string $name): void {}
        };

        bnx_settings_service::set_service($mock);
        $svc = bnx_settings_service::get_service();
        $this->assertInstanceOf(bnx_settings_service_interface::class, $svc);
        $this->assertSame(['mocked' => '1'], $svc->get_settings(123));

        // Clean up.
        bnx_settings_service::set_service(null);
    }

    public function test_data_service_set_and_get_service(): void {
        $this->resetAfterTest(true);

        $mock = new class implements data_service_interface {
            public function get_course_info(int $courseid): array {
                return ['course' => ['id' => $courseid, 'fullname' => 'Mock']];
            }
            public function get_enrollment(int $courseid): array {
                return ['enrollment' => []];
            }
        };

        data_service::set_service($mock);
        $svc = data_service::get_service();
        $this->assertInstanceOf(data_service_interface::class, $svc);
        $this->assertSame( ['course' => ['id' => 5, 'fullname' => 'Mock']], $svc->get_course_info(5));

        // Clean up.
        data_service::set_service(null);
    }
}
