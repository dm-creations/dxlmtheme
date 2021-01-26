<?php /* Template Name: About */ ?>
<?php get_header('new-inv'); ?>
<style>
    a {
	color: black;
    }
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
    .flickity-prev-next-button {
	display: none;
    }
    .cell-2 {
	overflow: hidden;
    }
    .sliding{
	transition: all 1s;
    }
    .wider {
	width: 2000px;
    }
    .first {
	transition: all 1s;
    }
    .second {
	display:none;
	transition: all 1s;
    }
    .about-columns {
	display: flex;
	padding-right: 300px;
    }
    .coll-1 {
	width: 35%
    }
    .coll-2 {
	width: 30%
    }
    .coll-2 {
	margin-top: 1.8em;
    }
    .alignnone {
	margin-left: 10px;
	margin-top: 20px;
	transform: scale(1.5);
    }
    .coll-3 {
	width: 35%;
	text-align: left;
	margin-top: 0.8em;
	margin-left: 80px;
    }
    .coll-3 ul {
	    margin-left: 0;
	    margin-bottom: 0.3em;
	    padding-left: 0;
	    list-style-type: none;
    }
    .coll-3 p {
	    margin-top: 0;
	    margin-bottom: 0.5em;
    }
    p:first-child {
	    margin-top: 1em;
    }
@media all and (min-width: 1441px) {
    .main-carousel {
	padding-left: 19.5em;
	width: 100%;
	height: 555px;
    }
    .flickity-viewport {
    }
    .carousel-cell {
	margin-right: 10px;
	height: 555px;
	width: 50%;
    }
    .carousel-cell + .carousel-cell {    
    }
    .image-mngmt {
	width:60%
    }
    .im-box {
	display: flex;
	margin-top: 3em;
    }
}

@media all and (max-width: 1440px) {
    .main-carousel {
	padding-left: 19.5em;
	width: 100%;
	height: 555px;
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
    .about-columns {
	padding-right: 0;
    }
}
    .im-box {
	display: flex;
	margin-top: 2em;
    }
    .cell-1 img {
	width: 99%;
	height: 98.6%;
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
    .about-columns {
	    flex-direction: column;
    }
    .coll-1, .coll-2, .coll-3 {
	    width: 100%;
	    padding: 0;
	    margin: 0;
    }
    .entry-shifted-r {
	    margin-left: 0;
    }
}

</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
                    
			<?php
			while ( have_posts() ) : the_post();
//  BEGIN GET TEMPLATE PART
//				get_template_part( 'template-parts/content', 'page-about-b' ); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!--            <header class="entry-header page-banner-1">
		<?php the_title( '<h1 class="entry-title page-header-1">', '</h1>' ); ?>
                <?php the_post_thumbnail('full'); ?>  
            </header> .entry-header -->
                <div style="z-index: -1;" class="entry-shifted-r im-box">
                    <div class="cell-1">
                        <img src="https://www.lametalworks.co.uk/wp-content/uploads/2018/03/About-L1.jpg"class="">
                    </div>
		    <div class="cell-2">
			<div class="sliding">
				<!--<img style="" src="https://www.lametalworks.co.uk/wp-content/uploads/2018/03/About-P1.jpg" class="">-->
				<img style="" src="https://www.lametalworks.co.uk/wp-content/uploads/2018/11/hardman-quote.jpg" class="first">
				<img style="" src="https://www.lametalworks.co.uk/wp-content/uploads/2018/12/wates-feedback.jpg" class="second">
			</div>
		    </div>
                </div>
		<div class="mob-head-img"><img src="https://www.lametalworks.co.uk/wp-content/uploads/2018/03/About-L1.jpg"></div>
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
</article><!-- #post-<?php the_ID(); ?> -->
<?php //END OF GET TEMPLATE PART

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

var cell2Width = document.querySelector('.cell-2 img').width;
var cell2 = document.querySelector('.cell-2');
var sliding = document.querySelector('.sliding');
var slidingImages = document.querySelectorAll('.sliding img');
	
function setCellWidth() {
	cell2.style.width = (cell2Width + 'px');
	console.log('setCellWidth set to ' + cell2Width)
}
function setImageHeights() {
	slidingImages[0].style.height = (slidingImages[0].height + 'px');
	slidingImages[1].style.height = (slidingImages[0].height + 'px');
	
	slidingImages[1].style.display = 'inline';
}
function setSlideWidth() {
	document.onload = sliding.classList.toggle('wider');
}
function moveLeft(){
	var img1Width = slidingImages[0].width;
	sliding.style.marginLeft = ('-' + img1Width + 'px');
}
function resetLeft() {
	sliding.style.marginLeft = '0px';
}
function rotateSlide() {
	setTimeout(moveLeft, 1); 
//	after 4 seconds, move slide along x pixels
	setTimeout(resetLeft, 6000);
}
	setCellWidth();
	setImageHeights();
	setSlideWidth();
	rotateSlide();
	setInterval(rotateSlide, 12000);
</script>
<?php
get_footer();
