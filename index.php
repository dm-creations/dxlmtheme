<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dxlm
 */

get_header('new-2'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


		</main><!-- #main -->

        </div><!-- #primary -->
<!--        <div style="position: fixed; right: 0; width: 500px; height: 500px; background-color: gray; z-index: 9999 !important;">
            
        </div>-->

<?php
//get_sidebar();
get_footer();
