<?php
/**
 * Add REST API support to an already registered post type.
 *
 * Uses plural version that is the label to then runs it through the slugify function to use for rest base.
 * This should restult in good result of pluralizing words.
 */

add_action( 'init', 'wpapi_custom_post_type_rest_support', 25 );
function wpapi_custom_post_type_rest_support() {
	global $wp_post_types;

	global $post;
	$args = array(
		'public'   => true,
		'_builtin' => false
	);

	$postTypes = get_post_types($args);

	foreach ($postTypes as $post_type_name) {
		if( isset( $wp_post_types[ $post_type_name ] ) ) {
			$wp_post_types[$post_type_name]->show_in_rest = true;
			// Optionally customize the rest_base or controller class
			$label = $wp_post_types[$post_type_name]->label;
			$post_type_rest_slug =	$post_type_name . 's';
			$wp_post_types[$post_type_name]->rest_base = slugify($label);
			$wp_post_types[$post_type_name]->rest_controller_class = 'WP_REST_Posts_Controller';
		}
	}
}


function slugify($str) {
  // Convert to lowercase and remove whitespace
  $str = strtolower(trim($str));

  // Replace high ascii characters
  $chars = array("ä", "ö", "ü", "ß");
  $replacements = array("ae", "oe", "ue", "ss");
  $str = str_replace($chars, $replacements, $str);
  $pattern = array("/(é|è|ë|ê)/", "/(ó|ò|ö|ô)/", "/(ú|ù|ü|û)/");
  $replacements = array("e", "o", "u");
  $str = preg_replace($pattern, $replacements, $str);

  // Remove puncuation
  $pattern = array(":", "!", "?", ".", "/", "'");
  $str = str_replace($pattern, "", $str);

  // Hyphenate any non alphanumeric characters
  $pattern = array("/[^a-z0-9-]/", "/-+/");
  $str = preg_replace($pattern, "-", $str);

  return $str;
}
?>
