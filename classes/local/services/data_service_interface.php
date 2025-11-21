<?php
/**
 * Interface for BNX data services.
 *
 * @package   bbbext_bnx
 */
namespace bbbext_bnx\local\services;

interface data_service_interface {
    /**
     * Return course information array.
     *
     * @param int $courseid
     * @return array
     */
    public function get_course_info(int $courseid): array;

    /**
     * Return enrollment information for a course.
     *
     * @param int $courseid
     * @return array
     */
    public function get_enrollment(int $courseid): array;
}
