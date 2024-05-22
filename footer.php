<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _themename
 */

global $post;
$footer = get_themebuilder_Id($post->ID, 'footer');

/**
 * add header
 * hook __themename_footer -- 10;
 */
do_action('__themename_footer_content', $footer);

?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
