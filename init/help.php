<?php


function lead_view_plugin_setup_submenu_help(){

    $pluginDomain = 'lead-view';
    $parentName = 'lead-view';
    $pageTitle = __( 'Lead View - Help', $pluginDomain );
    $menuTitle = __( 'Help', $pluginDomain );
    $permissions = 'manage_options';
    $uniqueName = 'lead-view_help';
    $constructor = 'printHelp';

    add_submenu_page( $parentName, $pageTitle, 
    $menuTitle, $permissions, 
    $uniqueName, $constructor );

}

?>