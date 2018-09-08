<?php
    if ( ! function_exists( 'headless_redirect_all_to_login' ) ) {
        add_filter( 'wp', 'headless_redirect_all_to_login', 0 );
        function headless_redirect_all_to_login() {
          if ( !is_main_site($blog_id) && !is_admin() ) {
            header( 'HTTP/1.1 403 Forbidden' );
            header( 'Location: ' . wp_login_url() );
            die();
          }
        }
    }
?>
