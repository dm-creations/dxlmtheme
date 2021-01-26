<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dxlm
 */
if ( have_posts() ) : 
get_header('new-inv'); ?>
<style>
	.page-banner-1 {
	    height: 7em;
	}
	.archive-arr {
	    display: flex;
	}
	.news-section {
	    width: 60%;
	    height: 200%;
	}
	.social-section { 
	    width: 30%;
	}
	section.widget-do-etfw {
	    height: 60vh;
	    overflow-y: scroll;
	}
@media all and (max-width: 667px) {
    .page-banner-1 {
    margin-top: 130px;
    }
    .archive-arr {
	    flex-direction: column-reverse;
    }
    .social-section {
    width: 100%;
    }
    .news-section {
    width: 100%;
    }
}
</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
                    <img style="width:100%; position: absolute;" href="https://www.dxlm.co.uk/wp-content/uploads/2017/10/news_default.jpg">
                    <div class="entry-shifted-r">
                        <header class="entry-header page-banner-1">
                            <?php // original location of if ( have_posts() ) : ?>
                    
                            <h1 class="grid-feature-title">News
                            <?php   //the_archive_title( '<h1 class="page-title">', '</h1>' );
                                    the_archive_description( '<div class="archive-description">', '</div>' ); ?>
                            </h1>
                        </header><!-- .page-header -->
                        <div class="archive-arr">
				<div class="news-section">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-news', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :
                        get_header('404');
			// get_template_part( 'template-parts/content', 'none' );

		endif; ?>
				</div>
				<div class="social-section">
				<?php // get_sidebar(); ?>
				<?php  echo do_shortcode('[instagram-feed]'); ?>
				</div>
			</div>
                    </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
