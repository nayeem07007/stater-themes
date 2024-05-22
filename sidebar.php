<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _themename
 */

if ( ! is_active_sidebar( 'blog_sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-lg-4 sidebar_right">
	<?php dynamic_sidebar( 'blog_sidebar' ); ?>
</aside><!-- #secondary -->
