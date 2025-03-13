<?php 

/**
 * Swipper Lib
*/
if(!function_exists('medigo_elements_scripts')){
    add_action( 'wp_enqueue_scripts', 'medigo_elements_scripts');
    function medigo_elements_scripts() {  
        $theme = wp_get_theme( get_template() );
    }
}