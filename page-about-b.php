<?php /* Template Name: About B */ ?>
<style>
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
</style>
<?php get_header('new-inv'); ?>
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
                <div>    
                <div style="z-index: -1;" class="main-carousel">
                    <div class="carousel-cell">
                        <img style="width: 100%;" src="http://www.dxlm.co.uk/wp-content/uploads/2018/01/About-Template-left-pic.png"class="">
                    </div>
                    <div class="carousel-cell">
                        <img src="http://www.dxlm.co.uk/wp-content/uploads/2018/01/Scott-Narrow.png" class="">
                    </div>
                    <div class="carousel-cell">
                        <img style="width: 100%;" src="http://www.dxlm.co.uk/wp-content/uploads/2018/01/Andrew-H-left-pic.png" class="">
                    </div>
                    <div class="carousel-cell">
                        <img src="http://www.dxlm.co.uk/wp-content/uploads/2018/01/Andy-Slim.png" class="">
                    </div>
                    <div class="carousel-cell">
                        <img style="height: 100%;" src="http://www.dxlm.co.uk/wp-content/uploads/2018/01/Screen-Shot-2018-01-05-at-00.23.52.png" class="">
                    </div>
                    <div class="carousel-cell">
                        <img style="height: 100%;" src="http://www.dxlm.co.uk/wp-content/uploads/2017/08/paul.jpg" class="image-mngmt">
                    </div>
                    <div class="carousel-cell">
                        <img style="height: 100%;" src="http://www.dxlm.co.uk/wp-content/uploads/2018/01/Screen-Shot-2018-01-05-at-00.23.52.png" class="">
                    </div>
                    <div class="carousel-cell">
                        <img style="height: 100%;" src="http://www.dxlm.co.uk/wp-content/uploads/2017/08/paul-t.jpg" class="">
                    </div>
                    <div class="carousel-cell">
                        <img style="height: 100%;" src="http://www.dxlm.co.uk/wp-content/uploads/2018/01/Screen-Shot-2018-01-05-at-00.23.52.png" class="">
                    </div>
                    <div class="carousel-cell">
                        <img style="height: 100%;" src="http://www.dxlm.co.uk/wp-content/uploads/2017/08/drew.jpg" class="">
                    </div>
                </div>
                </div>
                </div>

            <div class="entry-content entry-shifted-r">
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
<?php
get_footer();
