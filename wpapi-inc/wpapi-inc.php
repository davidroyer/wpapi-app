<?php

/**
 * Add all custom post types to rest-api
 */
require_once( 'cpts-rest-support.php' );

/**
 * Redirect from front-end to login if not main site (All subdomains/user sites)
 */
require_once( 'headless-redirect.php' );

/**
 * Add CORS for wp-api
 */
// require 'cors.php';

/**
 * Deploy Build With Netlify
 */
// require 'netlfiy-webhook.php';
