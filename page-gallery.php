<?php /* Template Name: Gallery Page */ ?>
<?php get_header('new-inv'); ?>
<style>
    .grid-title-holder {
        background-color: white;
        width: 100vw;
        position: fixed;
        bottom: 0em;
    }
    .grid-feature-title {
        padding: 0 13em 0 0;
        text-transform: uppercase;
    }
    .post-meta {
        padding: 0;
        list-style-type: none;
    }
    .entry-shifted-r {
	    margin-top: 70px;
    }
    .divi-text li:nth-last-of-type(1) {
        display: none;
    }
    .post-meta li:nth-child(3) {
        display: none;
    }
    .divi-box img {
        position: relative;
        display: none;
        /*top: -55px;*/
    }
    .cool-title {
        grid-column-start: 1;
        grid-column-end: 4;
        grid-row-start: 3;
        grid-row-end: 4;
    }
    .invisi {
        opacity: 0;
        top: -55px;
    }
     .about-columns {
	 display: flex;
	 padding-right: 300px;
     }
     .coll-1, .coll-2 {
	 width: 40%
     }
     .coll-2 {
	 margin-top: 1.8em;
     }
     .coll-3 {
	 width: 20%;
	 text-align: right;
	 margin-top: 0.8em;
     }
@media all and (max-width: 667px) {     
    .divi-grid {
	display: flex;
	flex-direction: column;
    }
    h1.grid-feature-title, h1.page-title {
    font-weight: 300;
    font-size: 3em;
    margin: 42px 0 0.5em 0;
}
@media only screen 
and (min-device-width : 667px) /* ipad mini portrait specific styles */
and (max-device-width : 1024px) 
and (orientation : portrait)
/* and (-webkit-min-device-pixel-ratio: 1) */  { 
    a.divi-text {
	width: 29em;
	min-height: 15.9em;
    }
}
</style>
<div id="primary" class="content-area page-banner-3">
    <main id="main" class="site-main">
        <div class="entry-content entry-shifted-r grid-adjust">       
           <div class="divi-grid">
                <div class="grid-title-holderBRK cool-title">
                    <h1 class="grid-feature-title">Featured Projects<?php // the_title() ?></h1>
                </div>
<?php $child_pages = new WP_Query( array(
      'post_type'      => 'page', // set the post type to page
      'posts_per_page' => 6, // number of posts (pages) to show
      'post_parent'    => '76', // enter the post ID of the parent page
      'no_found_rows'  => true, // no pagination necessary so improve efficiency of loop
      ) );

if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) : $child_pages->the_post(); ?>
    <div class="divi-box">
            <a href="<?php the_permalink(); ?>" class="divi-text">
                <p><strong><?php the_title(); ?></strong>
                <br><?php the_meta(); // the_post_thumbnail_caption() ?></p>
            </a>       
            <?php the_post_thumbnail('large'); ?>      
    </div> 
<?php endwhile; endif;  

wp_reset_postdata(); ?>
           </div>
        </div>
	    <div style="height: 50px;" class="clearfix footstool"></div>
    </main>

<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script>
jQuery(function($){
//    var slidesImages = $('.divi-box img');
//    slidesImages.css('opacity',0);
    var $elms = $('.divi-box').find('img');
//    $elms.hide();

    var elms = $.makeArray($elms);

function fadeNext () {
   var e = elms.shift();
   if (e) {
            $(e).fadeIn(250, fadeNext);
   }
}
fadeNext();
//    slidesImages.each(function(i, slidesImages) {
//    //test
//    $(".divi-box img").each(function() {
//          if(this.complete) $(this).load();
//          setTimeout(800);
//          $(this).animate({ opacity: "1", top: "0" }, 800);
//    console.log("Cached image Loaded");
//        });
//    });
        
//        $(".divi-box img").load(function() {
//            $(this).animate({ opacity: "1", top: "0" }, 800);
//            console.log("image Loaded");
        
    
});


</script>
<script src="https://www.dxlm.co.uk/wp-content/themes/dxlmtheme/js/para-manip.js"></script>

<?php get_footer(); ?>

