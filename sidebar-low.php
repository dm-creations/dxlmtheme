<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dxlm
 */

/* if widgets are in the sidebar area return true otherwise stop the file right here (return) */
if ( ! is_active_sidebar( 'sidebar-low' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-low' ); ?>
</aside><!-- #secondary -->
