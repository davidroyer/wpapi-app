<?php
/**
 * TLH functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tlh-starter-theme
 */

 function is_post_type($type){
     global $wp_query;
     if($type == get_post_type($wp_query->post->ID)) return true;
     return false;
 }

// LOAD SETUP
require_once( 'inc/setup.php' );

// LOAD SETUP
require_once( 'inc/cleanup.php' );

// LOAD THEME SUPPORT
require_once( 'inc/theme-support.php' );

require_once( 'inc/enqueue-scripts.php' );

require_once( 'wpapi-settings-page.php' );

/**
 * Adds all custom functionality
 */
require get_parent_theme_file_path( '/wpapi-inc/wpapi-inc.php' );
