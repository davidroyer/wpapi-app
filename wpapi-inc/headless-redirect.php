<?php
    if ( ! function_exists( 'redirect_to_admin' ) ) {
        add_filter( 'wp', 'redirect_to_admin', 0 );
        function redirect_to_admin(){
          $blog_id = get_current_blog_id();

          if ( !is_main_site($blog_id) && !is_admin() && is_user_logged_in() ) {
            wp_redirect( admin_url() );
            exit();
            
          } else if ( !is_main_site($blog_id) && !is_user_logged_in() ) {
            header( 'HTTP/1.1 403 Forbidden' );
            header( 'Location: ' . wp_login_url() );
            die();
          }
        }
    }
?>
