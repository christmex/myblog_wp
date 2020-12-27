<?php  


/* ----------------------------------------------------------------------------
 * front end css files
 */

add_action('wp_enqueue_scripts', 'load_css'); 
function load_css() {
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', '', time(), 'all' );

	wp_enqueue_style('mob-style', get_template_directory_uri() . '/assets/css/mob-style.css', '', time(), 'all' );

	wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', '', time(), 'all' );

}


/* ----------------------------------------------------------------------------
 * front end javascript files
 */
add_action('wp_enqueue_scripts', 'load_js');
function load_js() {
	wp_enqueue_script('wow-js',get_template_directory_uri().'/assets/js/wow.js','',time(),true);

	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), time(), true);
}
