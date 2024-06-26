<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WordPress
 * @subpackage _Themename
 * @since _Themename 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$_themename_unique_id = wp_unique_id( 'search-form-' );
$_themename_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';

?>
<form role="search" <?php echo _themename_return($_themename_aria_label); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" id="<?php echo esc_attr( $_themename_unique_id ); ?>" class="search-field" value="<?php echo get_search_query(); ?>" name="s" placeholder="<?php esc_attr_e( 'Search', '_themename' ) ?>"/>
	<button type="submit" class="search-submit"><i class="icon-search-icon"></i></button>
</form>
