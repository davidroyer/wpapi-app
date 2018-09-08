<?php
  require_once(get_template_directory() . '/mix-helpers.php');
  // Main Enqueue Scripts function
  function tlh_scripts_and_styles() {
    // global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    if ( !is_admin() ) {

      wp_register_script( 'manifest', mix('/js/manifest.js'), array(), '', true );
      wp_register_script( 'vendor', mix('/js/vendor.js'), array( 'manifest' ), '', true );
      wp_register_script( 'app-js',  mix('/js/scripts.js'), array( 'manifest', 'vendor' ), '', true );

  		// enqueue styles and scripts
      wp_enqueue_script( 'manifest' );
      wp_enqueue_script( 'vendor' );
      wp_enqueue_script( 'app-js' );

      // Localize the script with our data that we want to use
			$data = array(
        'endpoint'  => rest_url(),
        'nonce'     => wp_create_nonce ( 'wp_rest' ),
        'siteInfo' => get_blog_details(),
        'siteDescription' => get_bloginfo('description')
			);

			wp_localize_script( 'app-js', 'wpData', $data );
  	}
  }

  /* Remove WP-EMBED script */
  function my_deregister_scripts(){
    wp_deregister_script( 'wp-embed' );
  }
  add_action( 'wp_footer', 'my_deregister_scripts' );

  // jQuery Conflict Fix
  function remove_jquery() {
    wp_deregister_script( 'jquery' );
  }
  add_action('wp_enqueue_scripts', 'remove_jquery');

?>
