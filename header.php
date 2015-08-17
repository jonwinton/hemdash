<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hemdash
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php print get_bloginfo( 'name' ); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<body>
	<div class="wrapper">
		<header role="banner" class="header">
			<div class="header-top">
				<div class="header-top-title">
					<h1 class="hdg hdg_1">
						<a href="<?php print esc_url( home_url( '/' ) ); ?>">
							<?php bloginfo( 'name' ); ?>
						</a>
					</h1>
				</div>
				<div class="header-top-desc">
					Journalist &amp; Spreadsheet Wrangler
				</div>
			</div>
			<div class="header-bottom">
				<nav role="navigation">
					<?php 
						$menu_args = array(
							'theme_location' => 'primary',
							'menu_class' => 'menu',
							'container' => ''
						);
						wp_nav_menu( $menu_args ); 
					?>
				</nav>
			</div>
		</header>
	
		<main class="main" role="main">
