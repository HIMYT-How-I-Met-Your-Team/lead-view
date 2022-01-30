<?php

    add_action( 'admin_menu', 'lead_view_plugin_setup_submenu_settings' );
    function lead_view_plugin_setup_submenu_settings(){

        $pluginDomain = 'lead-view';
        $parentName = 'lead-view';
        $pageTitle = __( 'Lead View - Settings', $pluginDomain );
        $menuTitle = __( 'Settings', $pluginDomain );
        $permissions = 'manage_options';
        $uniqueName = 'lead-view_settings';
        $constructor = 'printSettings';

        add_submenu_page( $parentName, $pageTitle, 
        $menuTitle, $permissions, 
        $uniqueName, $constructor );
    }

    /*add_action( 'admin_init', 'settings_init' );
    function settings_init(){
        add_settings_section(
            'sample_page_setting_section',
            "Custom settings",
            'my_setting_section_callback_function',
            'lead-view_settings'
        );
    }*/
    /*function my_setting_section_callback_function(){
        echo '<p>Intro text for our settings section</p>';
    }*/

?>