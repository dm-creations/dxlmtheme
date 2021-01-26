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
                    top: 1.3em;
                    right: 2em;
                    text-transform: uppercase;
                    font-size: large;
                    font-family: lato;
                    color: black;
                    z-index: 9;
                }
                nav ul {
                    display: flex;
                    flex-direction: row;
                }
/*		#menu-item-560 {
		    flex-direction: column;
		    background-color: white;
		}*/
		ul.sub-menu {
		    display: none;
		    position: relative;
		    top: -20px;
		    left: 20px;
		    margin-top: 40px;
		}
		.shosub {
		    display: flex;
		}
                nav li {
                    margin: 0 2em;
                    list-style: none;
                }
		.mob-menu {
		    position: fixed;
		}
                .custom-logo {
                    /*position: fixed;*/ 
                    width: 18.5em;
                    padding-top: 1em;
                    border: none;
                    margin-left: 1em;
                    margin-right:2em;
                    z-index: 9;
                }
                a:visited, a:-webkit-any-link {
                    color: black;
                    text-decoration: none;
                }
                #linky, #linky1 {
                    color: white;
                }
                .menu li a:hover {
                    color: #ba9868;
                }
		.menu li a:link {
		    /*Firefox fix*/
		    text-decoration: none;
		    color: black;
		}
		.menu li a:visited {
		    color: black;
		}
                .entry-shifted-r {
		    margin-top: 1em;
                    margin-left: 19.5em;
		    margin-bottom: -50px;
                }
                h1.grid-feature-title , h1.page-title {
                    font-weight: 300;
                    font-size: 5em;
                    margin: 0 0 0.5em 0;
                }
                .m-bar {
                    background-color: rgba(255, 255, 255, 1); 
                    position: fixed; 
                    width: 100%; 
                    height: 4em;
                    z-index: 99;
                }
                ul li.current-menu-item a {
                    color: #00749B;
                }
/*		.hideaway {
		    visibility: visible;
		}*/
@media all and (max-width: 1440px) {
		
}
@media all and (max-width: 667px) {
	    .hamburger {
		width: 100px;
		height: 34px;
		background-repeat: no-repeat;
		background-position: center;
	    }
	    ul#primary-menu {
		display: none;
	    }
	    .custom-logo {
		margin: 0;
		position: inherit;
		width: 63%;
		left: 0em;
	    }
	    .m-bar {
		background-color: rgba(255, 255, 255, 1); 
		position: absolute; 
		width: 100%; 
		height: 2em;
		z-index: 99;
	    }
	    .mob-menu {
		position: inherit;
		display: flex;
		background-color: white;
		flex-direction: row-reverse;
		justify-content: space-between;
		padding: 3px 5px 7px;
		align-items: center;
		height: 20vh;
		flex-wrap: nowrap;
	    }
	    .site-branding {
		left: 0;
		top: 130px;
		background-color: black;
		list-style-type: none;
		width: 100vw;
		z-index: 9;
	    }
	    .site-branding ul {
		list-style: none;
	    }
	    .mob-arr {
		position: fixed;
	    }	    
	    .menu-main-menu-container {
		background-color: black;
	    }
	    #secondary-menu {
		margin-left: 0;
	    }
	    #secondary-menu li {
		margin: 8px 0;
	    }
	    #secondary-menu a {
		color: white;
	    }
	    .entry-shifted-r {
                margin-left: 0;
            }
	}
</style>  
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header m-bar">
            <div class="mob-menu <?php if ( is_front_page() && is_home() ) : ?> <?php else :  ?> <?php endif; ?>">
			
                        <button class="menu-toggle hamburger" style="padding-top: 0.3em;" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'dxlmtheme' ); ?></button>	
			<a href="/"><img width="190" height="122" src="https://www.lametalworks.co.uk/wp-content/uploads/2018/01/la-mega-sm.png" class="custom-logo" alt="LA Metalworks" itemprop="logo"></a>
                        <div class="site-branding mob-arr hideaway">
                            <?php
				wp_nav_menu( array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'secondary-menu',
				) );
			?>
                        </div><!-- .site-branding -->
			<nav style="color: black;" id="site-navigation" class="">
			
                        
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
<script>
jQuery(function($){
		$('ul.sub-menu').hide();
	$('#menu-item-560').mouseenter(function() {
		$('ul.sub-menu').fadeIn(300);
		$('ul.sub-menu').css('max-height', '20px');
		console.log('shosub on');
	});
		$('#menu-item-560').mouseleave(function() {
		$('ul.sub-menu').slideUp(500);
		$('ul.sub-menu').css('max-height', '0px');
		console.log('shosub off');
	});
//	,
//	function() {
//		$('ul.sub-menu').toggleClass('shosub');
//		console.log('shosub off');
//	});
});
</script>
	<div id="content" class="site-content">
