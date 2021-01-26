<?php /* Template Name: Contact Us Page */ ?>
<?php get_header(); ?>

<div id="primary" class="content-area page-banner-3">
    <main id="main" class="site-main">
        <div class="entry-content entry-shifted-r">
            <div class="divi-duo-contact">
                <div class="divi-directions connecty">

                        <?php
			while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <style>
                            .post-<?php the_ID(); ?> h1 {
                                margin-top: 0;
                            }
                        </style>
                    <?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dxlmtheme' ),
				'after'  => '</div>',
			) );
                        endwhile; ?>
                    </article>
                </div>
                <h2 class="grid-feature-title content-title"><?php the_title() ?></h2> 
                <div class="divi-map formy">
                    <?php echo do_shortcode( '[wpforms id="948"]' ) ?>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>

