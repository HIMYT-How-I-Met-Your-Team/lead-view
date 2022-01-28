<?php
/**
* Plugin Name: Lead View
* Plugin URI: myesperto.gbsweb.online/gp2
* Description: A plugin to show data from the database
* Version: 1.1
* Author: gp2
* Author URI: myesperto.gbsweb.online/gp2
**/

add_action('admin_menu', 'lead_view_plugin_setup_menu');
 
function lead_view_plugin_setup_menu(){
    add_menu_page( 'Lead View Page', 'Lead View', 'manage_options', 'lead-view', 'test_init' );
}

define( ‘MY_PLUGIN_URL’, plugin_dir_url( __FILE__ ) );

require "queries.php";

function test_init(){
    require "pages/view.php";
}
 
?>