<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheedFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
		<style media="screen">
			.v-toolbar a {
				color: inherit !important;
				text-decoration: none;
			}
		  .v-footer {
		    font-size: 1.25rem;
		  }
		  .v-parallax::after {
		    background: -webkit-linear-gradient(bottom, rgba(2, 15, 39, 0.50), rgba(2, 15, 39, 0.75));
		    background: -o-linear-gradient(bottom, rgba(2, 15, 39, 0.50), rgba(2, 15, 39, 0.75));
		    background: linear-gradient(to top, rgba(2, 15, 39, 0.50), rgba(2, 15, 39, 0.75));
		    }
				@media (max-width: 1199px) {
				  .v-parallax {
				    height: 400px !important;
				  }
				}
				@media (max-width: 680px) {
					.v-parallax {
						height: 350px !important;
					}
				}
				@media (max-width: 680px) {
				  #page-register .v-parallax {
				    height: 250px !important;
				  }
				}
		</style>
	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="vue-frontend-app" class="FRONTPAGE">
		  <v-app light>
		    <v-toolbar class="white">
		      <v-toolbar-title>
		        <a href="/" class="header-logo">
		          <!-- <img src="/wp-content/themes/wpapi-app/public/images/header-logo-transparent-400w.png" alt=""> -->
		          <img width="65px" src="/wp-content/themes/wpapi-app/public/images/wpapi-logo.png" alt="">
		        </a>
		      </v-toolbar-title>
		      <v-spacer></v-spacer>
		      <v-btn
		        outline
		        small
		        href="/wp-login.php"
		      >
		      Login
		      </v-btn>
		    </v-toolbar>
