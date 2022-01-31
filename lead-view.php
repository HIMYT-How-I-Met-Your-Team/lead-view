<?php
/**
* Plugin Name: Lead View
* Plugin URI: myesperto.gbsweb.online/gp2
* Description: A plugin to show data from the database
* Version: 3.0
* Author: gp2
* Author URI: myesperto.gbsweb.online/gp2
* Text Domain: lead-view
**/

include "utils/import.php";
require "utils/queries.php";

add_action('admin_menu', 'lead_view_plugin_setup_menu');
add_action('admin_menu', 'lead_view_plugin_setup_submenu_table');
add_action('admin_menu', 'lead_view_plugin_setup_submenu_help');
 
include "init/main.php";
include "init/help.php";


define( ‘MY_PLUGIN_URL’, plugin_dir_url( __FILE__ ) );


function printMain(){
    $styles = [
        "table",
        "navbar"
    ];
    $scripts = [
        "table"
    ];

    importStyles($styles);
    importScripts($scripts);
    require "pages/table.php";
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

?>