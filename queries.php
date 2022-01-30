<?php

function getter($sort){
    global $wpdb;
    $results = $wpdb->get_results( 
        $wpdb->prepare( "SELECT nome, cognome, email, telefono, ragSociale, provincia, attivita, messaggio, submitDate FROM {$wpdb->prefix}formdata ORDER BY {$sort} ASC")
    );
    return $results;
}

function inserter($data){
    try{
        if(!empty($data)){
            if(!empty($data['email']) && !empty($data['nome']) && !empty($data['cognome']) && !empty($data['attivita']) && !empty($data['ragSociale']) && !empty($data['provincia'])){
                global $wpdb;
                $table = $wpdb->prefix.'formdata';
                $wpdb->insert($table,$data);
            }
        }
    }catch(Exception $e){
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
}
?>