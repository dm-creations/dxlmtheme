<?php /* Template Name: Individual Project */ ?>
<style>    
    .wp-post-image {
    position: absolute;
    top: -50%;
    filter: blur(10px);
    }
    .entry-title {
    z-index: 100;
    }
    .coll-1 h1 {
        font-weight: 300;
        font-size: 5em;
        margin: 0;
    }
    div.main-carousel {
	position: relative;
        padding-left: 0;
        padding-right: 300px;
        width: 100%;
        min-height: 1px;
    }
    div.carousel-cell {
        margin-right: 10px;
        max-height: 540px;
        /*width: 50%;*/
    }
    div.carousel-cell:nth-child(odd) {
        margin-right: 10px;
        max-height: 550px;
        width: 65%;
	overflow: hidden;
    }
        div.carousel-cell:nth-child(odd) img {
        height: 105%;
    }
    div.carousel-cell:nth-child(even) {
        margin-right: 10px;
        max-height: 550px;
        width: 35%;
	overflow: hidden;
    }
        div.carousel-cell:nth-child(even) img {
        height: 105%;
    }
    button.flickity-prev-next-button.previous {
	left: -60px;
	border: solid 1px;
    }
    button.flickity-prev-next-button.next {
	right: 240px;
	border: solid 1px;
    }
    .about-columns {
	display: flex;
	padding-right: 300px;
    }
    .coll-1, .coll-2 {
	width: 40%
    }
    .coll-1 h1 {
	font-size: 2.3em;
    }
    .coll-2 {
	margin-top: 1.8em;
    }
    .coll-3 {
	width: 20%;
	text-align: right;
	margin-top: 0.8em;
    }
    @media all and (max-width: 1441px) {
        div.main-carousel {
	    padding-right: 0;
    	}
    	div.carousel-cell:nth-child(odd) {
            margin-right: 10px;
            height: 80%;
            width: 65%;
    	}
    	div.carousel-cell:nth-child(even) {
            margin-right: 10px;
            height: 80%;
            width: 35%;
        }
            button.flickity-prev-next-button.next {
    	right: 10px;
        }
    }
@media all and (max-width: 667px) {
    div.main-carousel {
	    padding-right: 0;
	    height: 400px;
	}
    button.flickity-prev-next-button.previous {
	left: -10px;
	border: solid 1px;
    }
    .about-columns {
	    flex-direction: column;
	    padding-right: 0;
    }
    .coll-1, .coll-2, .coll-3 {
	    width: 100%;
	    padding: 0;
	    margin: 0;
    }
    .coll-1 h1 {
	    font-size: 3em;
    }
    .entry-shifted-r {
	    margin-left: 0;
    }
}
</style>
<?php get_header('new-inv'); ?>
	<div id="primary" class="content-area  page-banner-3">
		<main id="main" class="site-main">
                    
			<?php
			while ( have_posts() ) : the_post();
//  BEGIN GET TEMPLATE PART

                        if (the_ID() == '435') : echo 'YO'; 
                        
                        endif;
  
  $goToPage = 'template-parts/content';
  $idConverted1 = '435';
  
  get_template_part( $goToPage , $idConverted1 );
  
        
 //END OF GET TEMPLATE PART

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			<div class="entry-shifted-r navigation"><p><a href="/projects"><-- Other Featured Projects</a></p></div>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
get_footer(); ?>
<script src="https://www.lametalworks.co.uk/wp-content/themes/dxlmtheme/js/flick-customs.js" type="text/javascript"></script>