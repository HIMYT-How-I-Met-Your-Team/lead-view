<?php


function lead_view_plugin_setup_menu(){

    $pluginDomain = 'lead-view';
    $pageTitle = __( 'Lead View', $pluginDomain );
    $menuTitle = __( 'Lead View', $pluginDomain );
    $permissions = 'manage_options';
    $uniqueName = 'lead-view';
    $constructor = 'printMain';
    $icon = 'dashicons-book-alt';
    $position = 25;

    add_menu_page( $pageTitle, $menuTitle, 
    $permissions, $uniqueName, 
    $constructor , $icon, $position);

}

?>
