<?php
/**
* Plugin Name: Lead View
* Plugin URI: https://www.yourwebsiteurl.com/
* Description: A plugin to show data from the database
* Version: 1.0
* Author: gp2
* Author URI: myesperto.gbsweb.online/gp2
**/

add_action('admin_menu', 'lead_view_plugin_setup_menu');
 
function lead_view_plugin_setup_menu(){
    add_menu_page( 'Lead View Page', 'Lead View', 'manage_options', 'lead-view', 'test_init' );
}
 
function test_init(){
    require 
}
 
?>