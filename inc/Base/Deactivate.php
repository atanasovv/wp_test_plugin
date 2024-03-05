<?php
/**
 * @package WP_Test_Plugin
 */
namespace Inc\Base;

class Deactivate {
    public static function deactivate() {
        flush_rewrite_rules();
    }
}