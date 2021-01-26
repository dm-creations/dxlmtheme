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
			    header {
				    background-color: black;
			    }
		.desktop-nav {
		    position: relative;
		    z-index: 9;
		}
		.main-menu {
		    top: 0;
		    display: flex;
		    justify-content: space-between;
		    align-items: center;
		    z-index: 9;			
		}
                nav {
                    position: absolute;
                    display: flex;
                    justify-content: flex-end;
                    top: 2em;
                    right: 2em;
                    text-transform: uppercase;
                    font-size: large;
                    font-family: lato;
                    color: white;
                }
		ul {
		    list-style: none;
		}
                nav ul {
                    display: flex;
                    flex-direction: row;
                }
                nav li {
                    margin: 0 1.3em;
                    list-style: none;
                }
                .custom-logo-link {
                    position: absolute;
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
		    display: none;
		}
	@media all and (max-width: 768px) {
		nav {
			font-size: 100%;
		}
		.menu-main-menu-container {
		    width: 80%;
		}
	}
	@media all and (max-width: 768px) {
	    .main-menu {
		display: none;
		}
	    ul#primary-menu {
		display: none;
	    }
	    .custom-logo-link {
		margin: 0;
		position: inherit;
		top: 0;
		width: 48%;
		left: 0em;
	    }
	    .mob-menu {
		position: inherit;
		display: flex;
		background-color: black;
		flex-direction: row;
		justify-content: space-between;
		/*padding: 7px 0 7px;*/
		align-items: center;
		/*height: 20vh;*/
		flex-wrap: wrap;
	    }
	    .site-branding {
		background-color: white;
		list-style-type: none;
		margin-top: -4px;
		padding-top: 5px;
		width: 100%;
		z-index: 9;
	    }
	    .hideaway {
		height: 0;
	    }
	    .menu-toggle {
		display: inherit;
	    }
	    .hamburger {
		height: auto;
		width: 25%;
		padding-top: 0.3em;
		background-image: none;
		background-color: black;
		outline: none;
		border: none;
		opacity: 0.9;
		border-radius: 0;
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
		<div class="desktop-nav"> <!-- desktop nav menu -->
			<div class="main-menu">
			<?php the_custom_logo() ?>
			<nav id="site-navigation" class="">
			
                        
                        <?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
			</nav>
			</div>
			<div class="mob-menu">
				<?php the_custom_logo() ?>
				<button class="menu-toggle hamburger" style="padding-top: 0.3em;" aria-controls="primary-menu" aria-expanded="false">
					<img src="https://www.lametalworks.co.uk/wp-content/uploads/2017/10/Hamburger-threelines-white-b-bg.png">
						<?php esc_html_e( '', 'dxlmtheme' ); ?>
				</button>
	                        <div class="site-branding hideaway"> <!-- hideaway -->
				                        <?php
				wp_nav_menu( array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'secondary-menu',
				) );
				?>
				</div><!-- .site-branding -->
			
			
			</div>
		</div><!-- #site-navigation -->
	<?php 
	if ( is_front_page() && is_home() ) :
        putRevSlider("LASlider1") ;
    	endif; ?>
               
	</header><!-- #masthead -->

	<div id="content" class="site-content">
