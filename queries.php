<?php

function get_data(){
    global $wpdb;
    $results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}formdata");
    return $results;
}