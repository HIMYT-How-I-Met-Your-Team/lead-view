<?php
/**
* Plugin Name: Lead View
* Plugin URI: myesperto.gbsweb.online/gp2
* Description: A plugin to show data from the database
* Version: 2.2
* Author: gp2
* Author URI: myesperto.gbsweb.online/gp2
* Text Domain: lead-view
**/

include "functions/import.php";
require "functions/queries.php";

add_action('admin_menu', 'lead_view_plugin_setup_menu');
add_action('admin_menu', 'lead_view_plugin_setup_submenu_help');
 
include "init/main.php";
include "init/help.php";
//require "init/settings.php"; TODO: fix and bring back on


define( ‘MY_PLUGIN_URL’, plugin_dir_url( __FILE__ ) );


function printMain(){
    $styles = [
        "table"
    ];

    importStyles($styles);
    require "pages/main.php";
}
function printHelp(){
    $styles = [
        "help"
    ];
    $scripts = [
        "help"
    ];

    importStyles($styles);
    importScripts($scripts);
    require "pages/help.php";
}
// function printSettings(){
//     wp_register_style('tableStyle', plugins_url('/styles/style.css',__FILE__ ));
//     wp_enqueue_style('tableStyle');
//     require "/pages/settings.php";
// }
?>