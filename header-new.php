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
		ul {
		    list-style: none;
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
                    width: 18.5em;
                    top: 1em;
                    border: none;
                    left: 0em;
                }
                a:visited, a:-webkit-any-link {
                color: white;
                text-decoration: none;
                }
                .menu li a:hover {
                    color: #ba9868;
                }
		.menu li a:link {
		    /*Firefox fix*/
		    text-decoration: none;
		    color: white;
		    font-weight: 500;
		}
		.menu li a:visited {
		    color: white;
		}
		.mob-menu {
		    position: fixed;
		    z-index: 9;
		}
	@media all and (max-width: 667px) {
	    ul#primary-menu {
		display: none;
	    }
	    .custom-logo-link {
		margin: 0;
		position: inherit;
		width: 48%;
		left: 0em;
	    }
	    .mob-menu {
		position: inherit;
		display: flex;
		background-color: black;
		flex-direction: row-reverse;
		justify-content: space-between;
		padding: 7px 0 7px;
		align-items: center;
		height: 20vh;
		flex-wrap: wrap;
	    }
	    .site-branding {
		background-color: white;
		list-style-type: none;
		margin-top: -4px;
		padding-top: 5px;
		width: 100vh;
		z-index: 9;
	    }
	    #secondary-menu {
		margin-left: 0;
	    }
	    #secondary-menu li {
		margin: 8px 0;
	    }
	    #secondary-menu a {
		color: black;
	    }
	}
            </style> 
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="mob-menu <?php if ( is_front_page() && is_home() ) : ?> <?php else :  ?> <?php endif; ?>">
			
                        <button class="menu-toggle hamburger" style="padding-top: 0.3em;" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'dxlmtheme' ); ?></button>	
			<?php the_custom_logo() ?>
                        <div class="site-branding hideaway">
				                        <?php
				wp_nav_menu( array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'secondary-menu',
				) );
			?>
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
	<?php if ( is_front_page() && is_home() ) :
        putRevSlider("LASlider1") ;
    	endif; ?>
               
	</header><!-- #masthead -->

	<div id="content" class="site-content">
