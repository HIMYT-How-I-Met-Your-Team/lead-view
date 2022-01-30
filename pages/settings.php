
<h1> 
    <?php esc_html_e( 'Welcome to my custom admin page.' ); ?> 
</h1>
<form method="POST" action="options.php">
    <?php
        settings_fields( 'lead-view_settings' );
        do_settings_sections( 'lead-view_settings' );
        submit_button();
    ?>
</form>