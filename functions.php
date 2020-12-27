<?php  


/* ----------------------------------------------------------------------------
 * front end css files
 */

add_action('wp_enqueue_scripts', 'load_css'); 
function load_css() {
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', '', time(), 'all' );
}