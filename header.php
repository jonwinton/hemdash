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

<!-- Favicon & Apple Touch Icons -->
<link rel="shortcut icon" href="<?php print get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="<?php print get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="<?php print get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="<?php print get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="<?php print get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php print get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="<?php print get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="<?php print get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="<?php print get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon-152x152.png" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php print get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon-180x180.png" />

<!-- Twitter META Tags -->
<meta name="twitter:card" content="summary">
<meta name="twitter:url" content="<?php the_permalink(); ?>">
<meta name="twitter:site" content="@hemdash">
<meta name="twitter:creator" content="@hemdash">
<!-- /Twitter META Tags -->

<!-- OG Tags -->
<meta property="og:title" content="<?php bloginfo( 'name' ); ?> | <?php the_title(); ?>"/>
<meta property="og:url" content="<?php the_permalink(); ?>"/>
<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>"/>
<meta property="og:image" content="<?php print get_stylesheet_directory_uri(); ?>/assets/images/hmlogo.png"/>
<meta property="og:type" content="blog"/>
<meta property="og:description" content="Hayley Munguia is a data reporter and social media editor at FiveThirtyEight."/>
<!-- /OG Tags -->


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
					<?php bloginfo( 'description' ); ?>
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
