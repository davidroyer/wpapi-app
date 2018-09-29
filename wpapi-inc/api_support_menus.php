<?php

/**
 * Get all registered menus
 * @return array List of menus with slug and description
 */
function wpapi_menus_all () {
   $menus = [];
   $wp_menus = wp_get_nav_menus();

   foreach ($wp_menus as $wp_menu) {
       $menu = (array) $wp_menu;
       $menus[] = $menu;
   }
   return $menus;
}

/**
 * Get menu's data from his id
 * @param  array $data WP REST API data variable
 * @return object Menu's data with his items
 */
function wpapi_menu ( $data ) {
  $menu = new stdClass;
	$menu->items = [];

  $menu = wp_get_nav_menu_object( $data['id']  );
  $menu->items = wp_get_nav_menu_items($data['id']);
  return $menu;
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'wp/v2', '/menus', array(
        'methods' => 'GET',
        'callback' => 'wpapi_menus_all',
    ) );

    register_rest_route( 'wp/v2', '/menus/(?P<id>[a-zA-Z0-9_-]+)', array(
        'methods' => 'GET',
        'callback' => 'wpapi_menu',
    ) );
} );
