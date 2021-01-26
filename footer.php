<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dxlm
 */

?>

	</div><!-- #content -->
        <style>
            .popout {
                position: fixed; 
                top: 20%;
                right: -450px; 
                width: 500px; 
                height: auto;
                /*padding-left: 12px;*/
                padding-right: 12px;
                background-color: rgba(0,0,0,0.7);  
               z-index: 9999 !important;
            }
            .top-line {
                display: flex;
                justify-content: space-between;
                height: 10%;
            }
            .mid-line {
                padding-left: 42px;
            }
            .boxy {
                
            }
            .popout p {
                color: white;
            }
	    .foot-rows {
		position: relative;
		display: flex; 
		justify-content: space-around; 
		align-items: center;
	    }
	    #foot-top-row { 
		display: flex;
		align-items: center;
		justify-content: space-around;
		transform: scale(0.7);
	    }
	    #lo-a { width: 80px; }
	    #lo-b { width: 150px; margin: 0 5px; }
	    #lo-c { width: 53px; margin-top: -4px; }
	    #lo-d { width: 107px; margin-top: -4px; }
	    #lo-e { width: 116px; margin-top: -2px; }
	    #lo-f { width: 150px; margin-top: -4px; }
	    .addressy {
		width:40%; 
		margin-right:60%;
	    }
	    .site-info-l {
		width: 13%;
	    }
	    .social-icons {
		    display: flex;
	    }
	    .social-icons a:not(:first-child) {
		    margin-right: 3px;
	    }
	    .footer-button {
		    display: none;
	    }
	@media all and (max-width: 1441px) {
/*	    aside {
		width: 30%;
	    }*/
	    .site-info-l {
		width: 21%;
	    }
	}
	@media all and (max-width: 1024px) {
	    .site-info {
		    display: none;
	    }
	    .foot-rows {
		justify-content: center;
		flex-direction: column;
	    }
	    .site-info-l {
		width: 100%;
		display: flex;
		justify-content: center;
	    }
	    .social-icons {
	        padding: 0 35%;
	    }
	}
	@media all and (max-width: 667px) {
	    .popout {
		display: none;
	    }
	    .foot-rows {
		flex-direction: column;
	    }
	    #foot-top-row { 
		flex-wrap: wrap;
	    }
	    #lo-a { width: 40px; }
	    #lo-b { width: 90px; margin-left: -3px; transform: scale(1); } /* formerly bcsa image */
	    #lo-c { width: 29px; }
	    #lo-d { width: 50px; }
	    #lo-e { width: 59px; }
	    #lo-f { width: 90px; }
	    .site-info {
		margin: 15px 0 10px;
		max-width: 100%;
		font-size: 12px;
	    }
	    .addressy {
		width:100%; 
		margin-right:30%;
	    }
	    .footer-button {
		    display: flex;
		    margin-top: 1em;
	    }
	    .footer-button button {
		    border: solid white 2px;
		    background-color: #777;
	    }
	    .footer-button button a {
		    color: white;
	    }
	    .footer-button button:hover {
		    border: solid white 2px;
		    background-color: lightgray;
		    opacity: 0.5;
	    }
	}
        </style>
	<footer id="colophon" class="site-footer">
            <div class="foot-rows">
                <div id="foot-top-row">
			<a href="https://www.lametalworks.co.uk/wp-content/uploads/2018/09/SCCS-EC-and-Weld-Certificates-Aug-18.pdf" target="_blank"><div id="lo-a"><img src="https://www.lametalworks.co.uk/wp-content/uploads/2018/03/1200px-ConformitÇ_EuropÇenne_logo.svg_-1.png" alt="All our fabricated steel follows the international manufacturing standard EN1090 Execution Class 2 - CE EN1090-EXC2"></div></a>
			
			<a href="https://www.lametalworks.co.uk/wp-content/uploads/2018/09/Consideration-Construction-Company-Membership-Certificate-March-2018.pdf" target="_blank"><div id="lo-d"><img src="https://www.lametalworks.co.uk/wp-content/uploads/2018/03/consider-constructors-logo_bw-1.png"></div></a>
			<a href="https://www.lametalworks.co.uk/wp-content/uploads/2018/09/SCCS-Certificate-of-Registration-Aug-18.pdf" target="_blank"><div id="lo-e"><img src="https://www.lametalworks.co.uk/wp-content/uploads/2018/03/SCCS-UKAS-Colour_bw-1.png"></div></a>
			<a href="https://www.lametalworks.co.uk/wp-content/uploads/2018/12/Constructionline-Gold-Cert-192020-30-11-19.pdf" target="_blank"><div id="lo-b"><img src="https://www.lametalworks.co.uk/wp-content/uploads/2018/05/Constructionline-WhatsApp-Image-2018-05-15-at-10.48.55.jpeg"></div></a>
		    <div id="lo-f"><img src="https://www.lametalworks.co.uk/wp-content/uploads/2018/05/Acclaim-WhatsApp-Image-2018-05-15-at-10.48.54.jpeg"></div>
                </div>
            <div class="site-info">
                <div style="text-align: left; padding-left: 5%;">
                    <p>e: <a id="linky" style="font-weight: 500;" href="mailto:info@lametalworks.co.uk">info@lametalworks.co.uk</a></p>
                    <p>t: <a id="linky1" style="font-weight: 500;" href="tel:+441707-256-290">(01707) 256 290</a></p>
                    <p class="addressy">a: LA Metalworks House , Fiddlebridge Lane, Hatfield , Hertfordshire , AL10 0SP</p>
                </div>
            </div><!-- .site-info -->
            <div class="site-info-l">
		    <div class="social-icons">
			    <a href="https://www.facebook.com/lametalworksltd/"><img src="/wp-content/uploads/2018/01/Facebook-gr.png"></a>
			    <a href="https://plus.google.com/110355800189965052169"><img src="/wp-content/uploads/2018/01/Google-Plus-gr.png"></a>
			    <a href="https://twitter.com/lametalworksltd"><img src="/wp-content/uploads/2018/01/Twitter-gr.png"></a>
			    <a href="https://www.linkedin.com/company/l-a-metalworks-limited/"><img src="/wp-content/uploads/2018/01/LinkedIn-gr.png"></a>
			    <a href="https://www.instagram.com/lametalworksltd/"><img src="/wp-content/uploads/2018/01/Instagram-gr.png"></a>
		    </div>
		    <?php // get_sidebar('low'); ?>
            </div>
	    <div class="footer-button">
		    <button><a href="/find-us/">Get in Touch</a></button>
	    </div>
        </div>
            <p style="font-size: 0.7em;">LA Metalworks Ltd is registered as a limited company in England and Wales under company number: 6718931</p>
            <div>
                <?php if ( is_home() && is_front_page() ) : ?>
                <div style="display: none" class="popout">
                    <div class="top-line"><a id="pop-tab"><p style="margin-top: 0;width: 40px; height: 40px; background-color: white;">[<]</p></a><a id="pop-close"><p>Close[>]</p></a></div>
                    <div class="mid-line">
                <?php 
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-popout', get_post_format() );

			endwhile;

			the_posts_navigation();

		endif; 
                endif;?>
                    </div>
                </div>
            </div>

	</footer><!-- footer ender -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php include_once("js/la-analytics.php") ?>
<script src="https://www.lametalworks.co.uk/wp-content/themes/dxlmtheme/js/popout.js"></script>
</body>
</html>
