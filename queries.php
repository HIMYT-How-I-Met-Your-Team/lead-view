<?php

function get_data(){
    global $wpdb;
    $results = $wpdb->get_results( "SELECT nome, cognome, email, telefono, ragSociale, provincia, attivita, messaggio FROM {$wpdb->prefix}formdata");
    return $results;
}
?>