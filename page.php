<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _themename
 */

get_header();


$page_sidebar = _themename_opt('page_layout');

?>

	<main id="primary" class="site-main">

		<?php 
		/**
		 * if active core plugin banner will pull from core plugin
		 * else default load form theme 
		 * @package __themename Banner
		 * @since 1.0.0
		 */
		
		 $banner_id = get_themebuilder_Id(get_the_ID(), 'banner');
		 /**
		  * display Page Banner 
		  * hook --__themename_banner -- 10
		  */
		 do_action('__themename_banner_content', $banner_id, 'page');

	    _themename_wrapper_start( $page_sidebar  );

		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		_themename_wrapper_end( $page_sidebar );
		?>
	</main><!-- #main -->

<?php
get_footer();
