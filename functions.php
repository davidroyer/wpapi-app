<?php

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


/**
 * Limit user to only creating 3 Sites
 */
 require get_parent_theme_file_path( '/wpapi-inc/limit-blog-creation.php' );

/**
 * For Admin
 */
function load_custom_wp_admin_scripts_styles() {
    wp_register_style( 'admin-css', get_template_directory_uri() . '/admin/admin.css', false, '1.0.0' );
    wp_register_script( 'admin-js', get_template_directory_uri() . '/admin/admin.js', array( 'jquery' ), null, true);

    wp_enqueue_style( 'admin-css' );
    wp_enqueue_script( 'admin-js' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_scripts_styles' );


/**
 * Hides main theme on subdomains.
 * This will allow for seperate theme for headless-theme
 * for users if this route is taken.
 */
// require get_parent_theme_file_path( '/wpapi-inc/hide-main-theme.php' );
