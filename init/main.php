<?php


function lead_view_plugin_setup_menu(){

    $pluginDomain = 'lead-view';
    $pageTitle = __( 'Lead View', $pluginDomain );
    $menuTitle = __( 'Lead View', $pluginDomain );
    $permissions = 'manage_options';
    $uniqueName = 'lead-view';
    $constructor = '';
    $icon = 'dashicons-book-alt';
    $position = 25;

    add_menu_page( $pageTitle, $menuTitle, 
    $permissions, $uniqueName, 
    $constructor , $icon, $position);

}


function lead_view_plugin_setup_submenu_table(){

    $pluginDomain = 'lead-view';
    $parentName = 'lead-view';
    $pageTitle = __( 'Lead View - Table', $pluginDomain );
    $menuTitle = __( 'Table', $pluginDomain );
    $permissions = 'manage_options';
    $uniqueName = 'lead-view';
    $constructor = 'printMain';

    add_submenu_page( $parentName, $pageTitle, 
    $menuTitle, $permissions, 
    $uniqueName, $constructor );

}

?>
