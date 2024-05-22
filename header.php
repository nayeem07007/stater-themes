<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _themename
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Responsive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
    if ( function_exists('wp_body_open') ) {
        wp_body_open();
    }
    ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', '_themename' ); ?></a>
        <?php
        //Header Style
        /**
         * add header
         * hook __themename_header -- 10;
         */
        global $post;
        $header_id = get_themebuilder_Id($post->ID, 'header');
        do_action('__themename_header_content', $header_id);
       

