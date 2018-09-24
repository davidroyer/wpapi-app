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
function limit_blog_creation_per_user($active_signup) {
  $blog_limit = 3;

  if( !is_super_admin() ) :
  $current_user = wp_get_current_user();
  $user_blogs = get_blogs_of_user( $current_user->ID );

  if (count($user_blogs) >= $blog_limit ) {
    $active_signup = 'none'; ?>
    <h2>Sorry but you have already registered the maximum amount of sites.</h2> <?php
  }
  endif;

  return $active_signup;
}
add_action('wpmu_active_signup','limit_blog_creation_per_user');
