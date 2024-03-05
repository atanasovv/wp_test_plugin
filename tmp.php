<?php

use Inc\Base\Deactivate;
 use Inc\Base\Activate;


 class WPTestPlugin {

        public $plugin_name;

        function __construct() {
            $this->plugin_name = plugin_basename( __FILE__ );
        }

        function register() {
            add_action( 'init', array( $this, 'custom_post_type' ) );


            add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
            

            add_filter( "plugin_action_links_$this->plugin_name", array( $this, 'settings_link' ) );
        }

        public function settings_link( $links ) {
            $settings_link = '<a href="options-general.php?page=wp_test_plugin">Settings</a>';
            array_push( $links, $settings_link );
            return $links;
        }

        

        function uninstall() {
            // delete CPT
            // delete all the plugin data from the DB
        }

        function custom_post_type() {
            register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
        }

        

        function activate() {
            Activate::activate();

        }

 } 

 if ( class_exists( 'WPTestPlugin' ) ) {
     $wpTestPlugin = new WPTestPlugin();
     $wpTestPlugin->register();
 }

// activation
//require once is move to activate method and from there we are calling the static method!
register_activation_hook( __FILE__, array( $wpTestPlugin, 'activate' ) );

// deactivation
// Static method of the class is called directly
register_deactivation_hook( __FILE__, array( 'Inc\Base\Deactivate', 'deactivate' ) );
// register_deactivation_hook(__FILE__, array($wpTestPlugin, 'deactivate'));

// uninstall
