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
        <meta name="description" content="London’s leading structural contractor. With inhouse design and manufacturing facilities, LA Metalworks Ltd can undertake your structural works, From façade retention and temporary schemes, to 5000t steel frame structures, LA can provide the turnkey solution to your construction requirements." />
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dxlmtheme' ); ?></a>
	<header id="masthead" class="site-header">
	<?php putRevSlider("LASlider1") ; ?>
            <style>
                nav {
                    position: fixed;
                    display: flex;
                    justify-content: flex-end;
                    top: 4em;
                    right: 2em;
                    text-transform: uppercase;
                    font-size: large;
                    font-family: lato;
                    color: white
                }
                nav ul {
                    display: flex;
                    flex-direction: row;
                }
                nav li {
                    margin: 0 2em;
                    list-style: none;
                }
                .custom-logo-link {
                    position: fixed;
                    width: 190px;
                    top: 1em;
                    border: none;
                    left: 4em;
                }
                a:visited, a:-webkit-any-link {
                color: white;
                text-decoration: none;
                }
            </style>                
            <div class=" <?php if ( is_front_page() && is_home() ) : ?> <?php else :  ?> <?php endif; ?>">
			
                        <button class="menu-toggle hamburger" style="padding-top: 0.3em;" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'dxlmtheme' ); ?></button>	
                        <div class="site-branding hideaway">
				<?php the_custom_logo() ?>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="">
			
                        
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
