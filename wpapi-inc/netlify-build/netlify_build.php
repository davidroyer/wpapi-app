<?php

add_action( 'admin_bar_menu', 'wpapi_netlify_deploy', 999 );

function wpapi_netlify_deploy( $wp_admin_bar ) {
    if( current_user_can( 'level_5' ) ){

        $args = array(
            'id' => 'build',
            'title' => '<span class="ab-icon"></span><span class="ab-label">'.__( 'Build Site', 'some-textdomain' ).'</span>',
            'href' => '#',
            'meta' => array(
								// 'id' => 'netlify-build-btn',
                'target' => '_self',
                'class' => 'build-link',
                'title' => 'Button to build site on Netlfiy'
            )
        );
        $wp_admin_bar->add_node($args);

    }
}

add_action( 'admin_enqueue_scripts', 'custom_wp_toolbar_css_admin' );
add_action( 'wp_enqueue_scripts', 'custom_wp_toolbar_css_admin' );

function custom_wp_toolbar_css_admin() {
    if( current_user_can( 'level_5' ) ){
        wp_register_style( 'netlify_build_css',  get_template_directory_uri() . '/wpapi-inc/netlify-build/netlify-build.css','','', 'screen' );
				wp_register_script( 'netlify_build_js', get_template_directory_uri() . '/wpapi-inc/netlify-build/netlify-build.js', array(), '', true );
        wp_enqueue_style( 'netlify_build_css' );
				wp_enqueue_script( 'netlify_build_js' );

    }
}


// isset($_POST['test_button'])
