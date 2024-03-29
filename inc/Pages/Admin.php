<?php

/**
 * @package WP_Test_Plugin
 */

namespace   Inc\Pages ;

class Admin {
    public function register() {
        add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );

    }
    public function add_admin_pages() {
        add_menu_page( 'WP Test Plugin', 'Wp Test', 'manage_options', 
        'wp_test_plugin', array( $this, 'admin_index' ), 'dashicons-store', 110 );
    }

    public function admin_index() {
        require_once PLUGIN_PATH . 'templates/admin.php';
    }
}