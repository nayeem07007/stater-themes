<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _themename
 */

get_header();

$blog_sidebar = _themename_opt('blog_layout');

?>

	<main id="primary" class="site-main">
	     <?php
		 /**
		 * if active core plugin banner will pull from core plugin
		 * else default load form theme 
		 * @package __themename Banner
		 * @since 1.0.0
		 * hook --__themename_banner -- 10
		 */
		 $banner_id = get_themebuilder_Id(get_the_ID(), 'banner');		 
		 do_action('__themename_banner_content', $banner_id, '404');
		 _themename_wrapper_start( $blog_sidebar );		
	 	?>
		
		
		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', '_themename' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', '_themename' ); ?></p>

					<?php get_search_form(); ?>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->
         <?php _themename_wrapper_end($blog_sidebar); ?>
	</main><!-- #main -->

<?php
get_footer();
