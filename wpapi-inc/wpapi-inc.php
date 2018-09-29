<?php

/**
 * Add all custom post types to rest-api & menus
 */
// require_once( 'api_support_custom-posts-taxonomies.php' );
require_once( 'api_support_menus.php' );

/**
 * Redirect from front-end to login if not main site (All subdomains/user sites)
 */
require_once( 'headless-redirect.php' );

/**
 * Deploy Build With Netlify
 */
require_once( 'netlify-build/netlify_build.php' );

/**
 * Add CORS for wp-api
 */
// require 'cors.php';
