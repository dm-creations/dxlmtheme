<?php /* Template Name: Team */ ?>
<?php get_header('new-inv'); ?>
<style>
    .mob-head-img {
	display: none;	
    }
    .coll-1 {
        padding-right: 100px;
    }
    .coll-1 h1 {
        font-weight: 300;
        font-size: 5em;
        margin: 0;
    }
    .buttone a:link {
        color: black;
    }
    .button-group a:hover {
        text-decoration: underline;
        cursor: cell;
    }
    .image-mngmt {
	    padding-right: 300px;
    }
        .coll-1 {
        padding-right: 100px;
    }
    .coll-1 h1 {
        font-weight: 300;
        font-size: 5em;
        margin: 0;
    }
    .buttone a:link {
        color: black;
    }
    .button-group a:hover {
        text-decoration: underline;
        cursor: cell;
    }
    .about-columns {
	display: flex;
	padding-right: 300px;
	margin-bottom: 50px;
    }
    ol li {
	    margin-bottom: 12px;
    }
    .coll-1 {
	width: 45%;
	padding-right: 0;
    }
    .coll-2 {
	width: 20%
    }
    .coll-2 {
	margin-top: 1.8em;
    }
    .coll-3 {
	width: 40%;
	text-align: right;
	margin-top: 0.8em;
    }
    .hentry {
	margin-top: 60px;
    }
@media all and (min-width: 1442px) {
    .main-carousel {
	padding-left: 19.5em;
	width: 100%;
	height: 555px;
    }
    .flickity-viewport {
    }
    .carousel-cell {
	margin-right: 10px;
	height: 550px;
	width: 50.4%;
    }
    .carousel-cell + .carousel-cell {    
    }
    .image-mngmt {
	width:60%
    }
    .im-box {
	display: flex;
	padding-top: 3em;
    }    
    .cell-1 img {
	width: 99%;
	height: 98.6%;
    }
}

@media all and (max-width: 1441px) {
    nav {
	top: 1em;
    }
/*    .mob-head-img {
	display: flex;
	margin-top: 40px;
	justify-content: center;
    }    */
    .mob-head-img {
	display: none;
    }
    .site-content {
	    margin-top: 20px;
    }
    .m-bar {
	    top: 0;
    }
    .main-carousel {
	display: none;
/*	padding-left: 19.5em;
	width: 100%;
	height: 555px;*/
    }
    .flickity-viewport {
    }
    .carousel-cell {
/*	margin-right: 10px;
	height: 555px;
	width: 50%;*/
	display: block;
	max-width:754px;
	max-height:540px;
	width: auto;
	height: auto;
    }
    .carousel-cell + .carousel-cell {
	/*display: flex;*/
	display: block;
	max-width:40%;
	max-height:100%;
	width: auto;
	height: auto;
    }
    .image-mngmt {
	width: 100%;
    }
    .im-box {
	display: flex;
	padding-top: 2em;
    }
    .cell-1 img {
	width: 99%;
	height: 98.6%;
    }
    .about-columns {
	    padding-right: 0;
    }
}
@media all and (max-width: 667px) {
    .mob-head-img {
	display: block;	
	margin-top: 130px;
    }
    .main-carousel { 
	display: none; 
    }
    .im-box {
	display: none;
    }
/*    #secondary-menu {
	    margin-top: 155px;
    }*/
    .about-columns {
	    flex-direction: column;
	    padding-right: 0;
    }
    .coll-1, .coll-2, .coll-3 {
	    width: 100%;
	    padding: 0;
	    margin: 0;
    }
    .coll-1 {
	    margin-top: 60px;
    }
    .coll-2 {
	    display: none;
    }
    .entry-shifted-r {
	    margin-left: 0;
    }
    .site-branding {
	    height: 0;
    }
}
</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
                    
			<?php
			while ( have_posts() ) : the_post();
//  BEGIN GET TEMPLATE PART
//				get_template_part( 'template-parts/content', 'page-about-b' ); ?>
        <article style="display:none" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!--            <header class="entry-header page-banner-1">
		<?php the_title( '<h1 class="entry-title page-header-1">', '</h1>' ); ?>
                <?php the_post_thumbnail('full'); ?>  
            </header> .entry-header -->
<!--                <div style="z-index: -1;" class="main-carousel">
			<div class="carousel-cell">
			    <img style="width: 100%;" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
			</div>
			<div class="carousel-cell">
			    <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/SDlf.png" class="">
			</div>
			<div class="carousel-cell">
			    <img style="width: 100%;" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
			</div>
			<div class="carousel-cell">
			    <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/Coming-Soon.png" class="">
			</div>
			<div class="carousel-cell">
			    <img style="width: 100%;" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
			</div>
			<div class="carousel-cell">
			    <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/Coming-Soon.png" class="">
			</div>
			<div class="carousel-cell">
			    <img style="width: 100%;" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
			</div>
			<div class="carousel-cell">
			    <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/PDo.png" class="">
			</div>
			<div class="carousel-cell">
			    <img style="width: 100%;" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
			</div>
			<div class="carousel-cell">
			    <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/PCa.png" class="">
			</div>
			<div class="carousel-cell">
			    <img style="width: 100%;" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
			</div>
			<div class="carousel-cell">
			    <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/DBo.png" class="">
			</div>
			<div class="carousel-cell">
			    <img style="width: 100%;" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
			</div>
			<div class="carousel-cell">
			    <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/Coming-Soon.png" class="">
			</div>
			<div class="carousel-cell">
			    <img style="width: 100%;" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
			</div>
			<div class="carousel-cell">
			    <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/Coming-Soon.png" class="">
			</div>
			<div class="carousel-cell">
			    <img style="width: 100%;" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
			</div>
			<div class="carousel-cell">
			    <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/Coming-Soon.png" class="">
			</div>
			<div class="carousel-cell">
			    <img style="width: 100%;" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
			</div>
			<div class="carousel-cell">
			    <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/Coming-Soon.png" class="">
			</div>
			<div class="carousel-cell">
			    <img style="width: 100%;" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
			</div>
			<div class="carousel-cell">
			    <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/BUd.png" class="">
			</div>
			<div class="carousel-cell">
			    <img style="width: 100%;" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
			</div>
			<div class="carousel-cell">
			    <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/Coming-Soon.png" class="">
			</div>
			<div class="carousel-cell">
			    <img style="width: 100%;" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
			</div>
			<div class="carousel-cell">
			    <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/Coming-Soon.png" class="">
			</div>
                </div>-->
</article><!-- #post-<?php the_ID(); ?> -->

		<div class="mob-head-img"><img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"></div>
		<div style="z-index: -1;" class="entry-shifted-r im-box">
                    <div class="mySlides cell-1">
                        <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
                    </div>
		    <div class="mySlides cell-2">
			<img style="" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/Team-Load-New.jpeg" class="">
		    </div>
		    <div class="mySlides cell-1">
                        <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
                    </div>
		    <div class="mySlides cell-2">
			<img style="" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/SDlf.png" class="">
		    </div>
                    <div class="mySlides cell-1">
                        <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
                    </div>
		    <div class="mySlides cell-2">
			<img style="" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/Coming-Soon.png" class="">
		    </div>
		    <div class="mySlides cell-1">
                        <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
                    </div>
		    <div class="mySlides cell-2">
			<img style="" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/Coming-Soon.png" class="">
		    </div>
                    <div class="mySlides cell-1">
                        <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
                    </div>
		    <div class="mySlides cell-2">
			<img style="" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/PDo.png" class="">
		    </div>
		    <div class="mySlides cell-1">
                        <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
                    </div>
		    <div class="mySlides cell-2">
			<img style="" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/PCa.png" class="">
		    </div>
                    <div class="mySlides cell-1">
                        <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
                    </div>
		    <div class="mySlides cell-2">
			<img style="" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/DBo.png" class="">
		    </div>
		    <div class="mySlides cell-1">
                        <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
                    </div>
		    <div class="mySlides cell-2">
			<img style="" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/Coming-Soon.png" class="">
		    </div>
                    <div class="mySlides cell-1">
                        <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
                    </div>
		    <div class="mySlides cell-2">
			<img style="" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/Coming-Soon.png" class="">
		    </div>
		    <div class="mySlides cell-1">
                        <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
                    </div>
		    <div class="mySlides cell-2">
			<img style="" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/Coming-Soon.png" class="">
		    </div>
                    <div class="mySlides cell-1">
                        <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
                    </div>
		    <div class="mySlides cell-2">
			<img style="" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/Coming-Soon.png" class="">
		    </div>
		    <div class="mySlides cell-1">
                        <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
                    </div>
		    <div class="mySlides cell-2">
			<img style="" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/BUd.png" class="">
		    </div>
                    <div class="mySlides cell-1">
                        <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
                    </div>
		    <div class="mySlides cell-2">
			<img style="" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/Coming-Soon.png" class="">
		    </div>
		    <div class="mySlides cell-1">
                        <img src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/team-page-placeholder-photo.png"class="">
                    </div>
		    <div class="mySlides cell-2">
			<img style="" src="http://www.lametalworks.co.uk/wp-content/uploads/2018/03/Coming-Soon.png" class="">
		    </div>
                </div>
		  <!-- Image text -->
		  <!--  <div class="caption-container">
				<p id="caption"></p>
			</div>-->
            <div class="entry-contentBRK entry-shifted-r">
                <div class="about-columns">
                    <?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dxlmtheme' ),
				'after'  => '</div>',
			) );
		?>
                </div>
            </div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'dxlmtheme' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>

<?php //END OF GET TEMPLATE PART

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
<script>
//jQuery(function($){
//    $(".andrew").click(function(){
//        var andbio = $(".andrew-bio").html();
//        $(".coll-2").empty();
//        $(".coll-2").prepend(andbio);
//    });
//});
</script>
<script>

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Staff name image controls
function currentSlide(n) {
  smoothscroll();
  showSlides(slideIndex = n);
  showSlides(slideIndex = n +1);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  
  if (n > slides.length) {slideIndex = 1}
	if (n < 1) {slideIndex = slides.length} // conditional for looping back round to last slide from start
  for (i = 0; i < slides.length; i++) {
	slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
	dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  slides[slideIndex].style.display = "block";
  dots[slideIndex-1].className += " active";
//  captionText.innerHTML = dots[slideIndex-1].alt;
}

function smoothscroll() {
    var currentScroll = document.documentElement.scrollTop || document.body.scrollTop;
    if (currentScroll > 0) {
         window.requestAnimationFrame(smoothscroll);
         window.scrollTo (0,currentScroll - (currentScroll/5));
    }
};
</script>
<?php
get_footer();
