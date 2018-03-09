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

			<a class="skip-link screen-reader-text" href="#content">
				<?php _e( 'Skip to content', 'twentyseventeen' ); ?>
			</a>

			<header id="masthead" class="site-header" role="banner">

				<div class="container">

				<div class="logo">

					<svg width="53px" height="42px" viewBox="0 0 53 42" version="1.1" xmlns="http://www.w3.org/2000/svg" role="image" xmlns:xlink="http://www.w3.org/1999/xlink">
						<title id="logo-title"><?php esc_html_e('Daine Mawer Logo'); ?></title>
						<desc><?php esc_html_e('The polygon version of Daine Mawer logo in amaranth'); ?></desc>
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<g transform="translate(-167.000000, -26.000000)" fill="#E6294E">
								<g transform="translate(167.000000, 26.000000)">
									<polygon id="Fill-1" points="36.2826 0.0202 47.6836 20.2072 52.7726 12.1082 52.7726 12.1042 46.6706 0.0202"></polygon>
									<polygon id="Fill-2" points="0.0005 0.0004 23.8325 42.0014 34.6305 42.0014 16.3435 9.7734 27.2625 9.7734 35.0735 22.9574 31.8145 29.2544 36.8225 38.4224 45.8705 22.9574 32.2705 0.0004"></polygon>
								</g>
							</g>
						</g>
					</svg>

					</div>

					<nav class="navigation">
						<ul class="menu">
							<li>
								<a href="">Home</a>
							</li>
							<li>
								<a href="">News</a>
							</li>
							<li>
								<a href="">Projects</a>
								<ul class="submenu">
								<li>
									<a href="">Career Work</a>
								</li>
								<li>
									<a href="">Meetups</a>
								</li>
								<li>
									<a href="">Training</a>
								</li>
								<li>
									<a href="">Side Projects</a>
								</li>
								</ul>
							</li>
							<li>
								<a href="">Work</a>
							</li>
							<li>
								<a href="">Contact</a>
							</li>
						</ul>
					</nav>

				</div>


			</header>


			<main id="content" role="main" class="site-content">

