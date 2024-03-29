<?php
/**
 * Allow GET requests from * origin
 * Thanks to https://joshpress.net/access-control-headers-for-the-wordpress-rest-api/
 */
add_action( 'rest_api_init', function() {
	remove_filter( 'rest_pre_serve_request', 'rest_send_cors_headers' );
	add_filter( 'rest_pre_serve_request', function( $value ) {
		header( 'Access-Control-Allow-Origin: *');
		header( 'Access-Control-Allow-Methods: *' );
		// header( 'Access-Control-Allow-Headers: X-Requested-With' );
		header( 'Access-Control-Allow-Credentials: true' );
		return $value;
	});
}, 15 );
