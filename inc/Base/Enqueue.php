<?php
/**
 * @package WP_Test_Plugin
 */
namespace Inc\Base;

use Error;

class Enqueue {
    public function register() {
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
    }

    public function enqueue() {
        // enqueue all scripts
        wp_enqueue_style( 'mypluginstyle', PLUGIN_URL . 'assets/mystyle.css' );
        wp_enqueue_script( 'mypluginscript', PLUGIN_URL .  'assets/myscript.js' );
        // check if admin page is loaded to load the script
        if ( isset( $_GET['page'] ) && $_GET['page'] === 'wp_test_plugin' ) {
            $this->formCreator();
        }        
        wp_enqueue_script( 'form-creator', PLUGIN_URL . 'assets/form-creator.js' );
    }

    public function formCreator() {
        wp_enqueue_script( 'form-creator', PLUGIN_URL . 'assets/form-creator.js' );
    }
}