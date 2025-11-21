<?php
/**
 * Interface for BNX settings services (named for clarity).
 *
 * @package   bbbext_bnx
 */
namespace bbbext_bnx\local\services;

interface bnx_settings_service_interface {
    /**
     * Get all settings for a BNX record.
     *
     * @param int $bnxid
     * @return array<string,string>
     */
    public function get_settings(int $bnxid): array;

    /**
     * Get a single setting value.
     *
     * @param int $bnxid
     * @param string $name
     * @return string|null
     */
    public function get_setting(int $bnxid, string $name): ?string;

    /**
     * Get a single setting value using the module identifier.
     *
     * @param int $moduleid
     * @param string $name
     * @return string|null
     */
    public function get_setting_for_module(int $moduleid, string $name): ?string;

    /**
     * Upsert multiple settings for a BNX record.
     *
     * @param int $bnxid
     * @param array $values
     * @return void
     */
    public function set_settings(int $bnxid, array $values): void;

    /**
     * Delete all settings for a BNX record.
     *
     * @param int $bnxid
     * @return void
     */
    public function delete_settings(int $bnxid): void;

    /**
     * Delete a single setting for a BNX record.
     *
     * @param int $bnxid
     * @param string $name
     * @return void
     */
    public function delete_setting(int $bnxid, string $name): void;
}
