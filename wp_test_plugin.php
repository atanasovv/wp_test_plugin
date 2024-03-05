<?php
/**
 * @package WP_Test_Plugin
 */
/**
    Plugin Name: WP Test Plugin
    Plugin URI: http://127.0.0.1/wordpress/wp-admin/plugins.php
    Description: This is my first attempt on writing a custom plugin for WordPress
    Version: 1.0
    Author: Vladislav Atanasov
    Author URI: http://127.0.0.1/wordpress/wp-admin/plugins.php
    License: GPLv2 or later
    Text Domain: wp-test-plugin
 */


 defined( 'ABSPATH' ) or die( 'Hey, you can\t access this file, you silly human!' );

 // Thi si the only require_once that is needed in the main plugin file
 if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
     require_once dirname( __FILE__ ) . '/vendor/autoload.php';
 }

 define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
 define( 'PLUGIN_URL' , plugin_dir_url(__FILE__));
 define( 'PLUGIN_FORM_TEMPLATE_DIRECTORY', plugin_dir_path( __FILE__ ) . 'templates/form_templates');

 if ( class_exists( 'Inc\\Init' ) ) {
    inc\Init::register_services();
 }
