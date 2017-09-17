<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NFC_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nfc-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="site-branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img class="site-logo" src="//cdn.nacionalfc.com.br/img/nacionalfc-escudo.svg" height="128px" width="128px">
						<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
					</a>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="menu" aria-expanded="false">
					<span class="hidden"><?php esc_html_e( 'Menu', 'nfc-theme' ); ?></span>
				</button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</nav><!-- #site-navigation -->
			<div class="clearfix"></div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content container">
