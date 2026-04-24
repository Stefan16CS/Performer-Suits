<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Performer-Suits-Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="/favicon.ico">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!--
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php /* esc_html_e( 'Skip to content', 'performer-suits-theme' ); */?></a>  
-->

<header class="header-main page-width-full">
	<div class="header-container page-width-boxed-1">
		
		<!-- Site Logo -->
		<div class="header-left">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo">
				<img src="/wp-content/themes/performer-suits-theme/assets/images/site-logo.png" alt="Performer Suits Logo">
			</a>
		</div>


		<!--<?php
		/*the_custom_logo();
		if ( is_front_page() && is_home() ) :
			?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
		else :
			?>
			<p class="site-title"><a href="<?php echo esc_ur( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
		endif;
		$performer_suits_theme_description = get_bloginfo( 'description', 'display' );
		if ( $performer_suits_theme_description || is_customize_preview() ) :
			?>
			<p class="site-description"><?php echo $performer_suits_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; */?>
		</div> --> <!-- .site-branding -->



		<!-- Navigation Menu -->
		<div class="header-menu">
			<nav class="header-nav">
				<?php
				wp_nav_menu([
					'theme_location' => 'header-menu',
					'container'      => false,
					'menu_class'     => 'header-menu-list',
					'fallback_cb'    => false,	
				]);
				?>
			</nav>
		</div>
		
		<div class="header-right">
			<!-- Language Switcher -->
			<div class="header-language-switcher">
				<img src="/wp-content/themes/performer-suits-theme/assets/images/language-icon.svg" alt="language icon" class="language-icon">
				<button class="language-button">SR</button>
				<!-- <button class="language-button">EN</button> -->
			</div>
	
			<!-- Contact Button -->
			<div class="header-actions">
				<button class="header-contact-button">Zakaži merenje</button>
			</div>
		</div>

	</div>
</header>
