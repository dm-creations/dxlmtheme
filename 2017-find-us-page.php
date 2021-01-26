<?php /* Template Nome: Find Us Page */ ?>
<?php get_header(); ?>

<div id="primary" class="content-area page-banner-3">
    <main id="main" class="site-main">
        <div class="entry-content entry-shifted-r">
            <h2 class="grid-feature-title"><?php the_title() ?></h2>
            <div class="divi-duo">
                <div style="<!-- grid-column-start: 1 -->" class="divi-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2469.3599292542567!2d-0.23663853430521237!3d51.763026899801446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48763c87641fd4c9%3A0x95a591cb2c8055bd!2sL+A+Metalworks+ltd!5e0!3m2!1sen!2suk!4v1507830929039" width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>                 
                <div class="divi-contact">
                    <h1 style="margin-left: 5%; margin-top: 2px;">Contact Us</h1>
                    <?php echo do_shortcode( '[pirate_forms]' ) ?>
                </div>
            

                <footer id="colophon" class="site-footer find-us-info">
            <div class="site-info-l">
                <?php // get_sidebar('low'); ?>
            </div>
                    <div style="background-image: url('');" class="flex-contact">
                        <div style="text-align: left;">
                            <p><strong>LA Metalworks Ltd</strong></p>
                            <p>LA Metalworks House</p>
                            <p>Hatfield</p>
                            <p>Hertfordshire</p>
                            <p>AL10 0SP</p>
                        </div>
                        <!--<hr id="hrr">-->
                        <div style="text-align: right;">
                            <p>Tel: <a style="font-weight: 500;" href="tel:+441707-256-290">(01707) 256 290</a></p>
                            <p>Email: <a style="font-weight: 500;" href="mailto:info@lametalworks.co.uk">info@lametalworks.co.uk</a></p>
                        </div>
                    </div> <!-- .site-info -->
                </footer>
                    <?php
			while ( have_posts() ) : the_post(); ?>
                    <article style="margin-left: 5%;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dxlmtheme' ),
				'after'  => '</div>',
			) );
                        endwhile; ?>
                    </article>                
            </div>
            </div>
        </div>
        
    </main>

<?php get_footer(); ?>

