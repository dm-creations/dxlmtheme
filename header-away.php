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
	<header id="masthead" class="site-header">
	<?php if ( is_front_page() && is_home() ) :
        putRevSlider("LASlider1") ;
    	endif; ?>
                        
            <div class="fixed-menu <?php if ( is_front_page() && is_home() ) : ?> menu-mods <?php else :  ?> responsive-menu <?php endif; ?>">
			
                        <button class="menu-toggle hamburger" style="padding-top: 0.3em;" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'dxlmtheme' ); ?></button>	
                        <div class="site-branding hideaway">
				<?php the_custom_logo() ?>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation">
			
                        
                        <?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
                        
			</nav>
		</div><!-- #site-navigation -->
            <?php // if ( !is_front_page() && !is_home() ) : ?>  <!--  <div class="extra-menu"><div>Contact</div><div>News</div></div><!-- #site-navigation 2 --> <?php // endif; ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
