<?php
/**
 * template Name: _Themename Left Sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _themename
 */

get_header();

?>

	<main id="primary" class="site-main">

		<?php get_template_part('template-parts/banner/banner', 'page');

	    _themename_wrapper_start( 'left');

		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		_themename_wrapper_end( 'left' );
		?>
	</main><!-- #main -->

<?php
get_footer();
