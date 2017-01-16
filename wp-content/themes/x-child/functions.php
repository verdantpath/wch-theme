<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );



// Additional Functions
// =============================================================================

function my_scripts() {
	wp_enqueue_script('my_scripts', get_stylesheet_directory_uri() . '/js/scripts.js');
}
add_action('wp_enqueue_scripts', 'my_scripts');

function my_matchheight_script() {
	wp_enqueue_script('my_matchheight_script', get_stylesheet_directory_uri() . '/js/jquery.matchHeight-min.js');
}
add_action('wp_enqueue_scripts', 'my_matchheight_script');