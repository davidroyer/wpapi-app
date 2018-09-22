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

		<?php $blog_id = get_current_blog_id(); ?>

		<?php if ( is_main_site($blog_id) ): ?>
			<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126223694-1"></script>
			<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());
				gtag('config', 'UA-126223694-1');
			</script>
		<?php endif; ?>

		<?php wp_head(); ?>

		<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="vue-frontend-app" class="FRONTPAGE">
		  <v-app light>
		    <v-toolbar class="white" v-cloak>
		      <v-toolbar-title>
		        <a href="/" class="header-logo">
		          <img width="65px" src="/wp-content/themes/wpapi-app/public/images/wpapi-logo.png" alt="">
		        </a>
		      </v-toolbar-title>
		      <v-spacer></v-spacer>
		      <!-- <v-btn
		        outline
		        small
		        href="/wp-login.php"
		      >
		      Login
		      </v-btn> -->
		    </v-toolbar>
