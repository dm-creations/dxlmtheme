<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dxlm
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dxlmtheme' ); ?></a>

	<header id="masthead" class="site-header nav-mng">

		<div class="fixed-menu responsive-menu">
			<div class="site-branding-1">
				<?php the_custom_logo() ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle hamburger-1" style=" margin: 2px auto 2px; height: 20px; padding-top: 0.3em;" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'dxlmtheme' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
			</nav>
		</div><!-- #site-navigation -->
<!--                <div class="extra-menu">
                    <div id="upper-menu">Contact</div>
                    <div id="lower-menu">News</div>
                </div> #site-navigation 2 -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
