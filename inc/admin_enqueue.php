<?php 
/**
 * _Themename admin Enqueue 
 */

add_action( 'admin_enqueue_scripts', '_themename_admin_enqueues');

function _themename_admin_enqueues() {
  
    if(function_exists('get_current_screen')){
    
        $screen = get_current_screen(); 
        
        if ( $screen->base == 'toplevel_page__themename_options' ) {
            wp_enqueue_style( '_themename-redux-style', _THEMENAME_CSS.'/redux-style.css' );
        }
    }
    
}
