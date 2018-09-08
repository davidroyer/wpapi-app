<?php
/**
* Send a request to build the site once a post is published
*/
function deploy_on_publish() {
  wp_remote_post( 'https://api.netlify.com/build_hooks/5b8606dbfdd72a49c927ac85', '' );
}

add_action( 'publish_post', 'deploy_on_publish' );
// add_action( 'save_post', 'deploy_on_publish_and_updated' );
// add_action( 'post_updated', 'deploy_on_publish_and_updated' );
?>
