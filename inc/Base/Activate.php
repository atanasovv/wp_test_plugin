<?php
/**
 * @package WP_Test_Plugin
 */
namespace Inc\Base;

class Activate {
    public static function activate() {
        flush_rewrite_rules();
    }
}