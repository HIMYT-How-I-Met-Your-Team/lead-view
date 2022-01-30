<?php
/**
* Plugin Name: Lead View
* Plugin URI: myesperto.gbsweb.online/gp2
* Description: A plugin to show data from the database
* Version: 2.0
* Author: gp2
* Author URI: myesperto.gbsweb.online/gp2
* Text Domain: lead-view
**/

require "functions/queries.php";

add_action('admin_menu', 'lead_view_plugin_setup_menu');
add_action('admin_menu', 'lead_view_plugin_setup_submenu_help');
 
function lead_view_plugin_setup_menu(){

    $pluginDomain = 'lead-view';
    $pageTitle = __( 'Lead View', $pluginDomain );
    $menuTitle = __( 'Lead View', $pluginDomain );
    $permissions = 'manage_options';
    $uniqueName = 'lead-view';
    $constructor = 'printMain';
    $icon = 'dashicons-book-alt';
    $position = 25;

    add_menu_page( $pageTitle, $menuTitle, $permissions, $uniqueName, $constructor , $icon, $position);
}

require "init/help.php";
//require "init/settings.php"; TODO: fix and bring back on


define( ‘MY_PLUGIN_URL’, plugin_dir_url( __FILE__ ) );


function printMain(){
    wp_register_style('tableStyle', plugins_url('/styles/style.css',__FILE__ ));
    wp_enqueue_style('tableStyle');
    require "pages/main.php";
}
function printHelp(){
    wp_register_style('tableStyle', plugins_url('/styles/style.css',__FILE__ ));
    wp_enqueue_style('tableStyle');
    require "pages/help.php";
}
// function printSettings(){
//     wp_register_style('tableStyle', plugins_url('/styles/style.css',__FILE__ ));
//     wp_enqueue_style('tableStyle');
//     require "/pages/settings.php";
// }
?>