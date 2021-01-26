<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dxlm
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        	<?php
                if ( has_post_thumbnail() ) { ?>
            <style>
                .post-<?php the_ID(); ?> .entry-content img {
                    display: none;
                }
            </style>
      
        <div class="news-box">
        
        <?php   if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta">
			<?php dxlmtheme_posted_on_1(); // Modified from dxlmtheme_posted_on() in template-tags ?>
		</div><!-- .entry-meta -->
        <?php	endif; ?> 
                
        <div class="news-image-box" style="background-image: url('<?php the_post_thumbnail_url('large') ?>');">
        </div>
        
                <?php }
                
                 else { ?>
            <style>
                .post-<?php the_ID(); ?> .entry-content img {
                    display: none;
                }
            </style>
                <div class="news-box">
                <?php 
                    if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta">
			<?php dxlmtheme_posted_on_1(); // Modified from dxlmtheme_posted_on() in template-tags ?>
		</div><!-- .entry-meta -->
        <?php	endif;  
                     $content = $post->post_content;
                     $searchimages = '~<img [^>]* />~';

// Run preg_match_all to grab all the images and save the results in $pics
                     preg_match_all( $searchimages, $content, $pics );
 
// Check to see if we have at least 1 image
                     $iNumberOfPics = count($pics[0]);
 
                     if ( $iNumberOfPics > 0 ) { // Your post have one or more images.
                     
                        // echo $pics[0]; //  this was supposed to cout the first image it finds hopefully... ?>
        
        <div class="news-image-box">
                <?php   print_r($pics[0][0]); /* cout the array within the array... yaay */ 
                      } ?>
        </div>
            
                <?php } ?>
        <div class="news-text">            
		<?php
                if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; ?>


            <div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'dxlmtheme' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title(),
                                the_post_thumbnail()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dxlmtheme' ),
				'after'  => '</div>',
			) );

		?>
            </div><!-- .entry-content -->
        </div>
    </div>   
</article><!-- #post-<?php the_ID(); ?> -->
