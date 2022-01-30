<?php

function importStyles($styles){
    foreach($styles as $s){
        wp_enqueue_style($s.'Style');
        wp_register_style($s.'Style', plugins_url('lead-view/styles/'.$s.'.css' ));
    }
}

function importScripts($scripts){
    foreach($scripts as $s){
        wp_enqueue_script( $s.'Script' );
        wp_register_script( $s.'Script', plugins_url( 'lead-view/scripts/'.$s.'.js' ) );
    }
}

?>