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
			.v-toolbar-title a {
				max-width: 90px;
			}
			.v-toolbar a.header-logo img {
				max-width: 140px;
				width: auto;
				height: 45px;
			}
			#vue-frontend-app img {
				max-width: 140px;
			}
		</style>
	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
