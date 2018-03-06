<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage DaineMawer
 * @since 0.1.1
 * @version 0.1.1
 */
?>
	<!DOCTYPE html>
	<html <?php language_attributes(); ?> class="no-js no-svg">

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<div class="site">

			<a class="skip-link screen-reader-text" href="#content">
				<?php _e( 'Skip to content', 'twentyseventeen' ); ?>
			</a>

			<header id="masthead" class="site-header" role="banner">

				<div></div>
				<nav></nav>

			</header>


			<main id="content" role="main" class="site-content">

