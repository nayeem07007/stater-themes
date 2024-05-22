<?php
/**
 * Enqueue site scripts and styles
 */
function _themename_scripts() {

    /**
     * Enqueueing Stylesheets
     */
	wp_enqueue_style( '_themename-fonts', _themename_fonts_url() );
	wp_enqueue_style( 'mediaelementplayer', _THEMENAME_VEND . '/media-player/mediaelementplayer.css' );
	wp_enqueue_style( 'fontawesome', _THEMENAME_VEND . '/fontawesome-free-6.0.0-web/css/all.min.css' );
	wp_enqueue_style( '_themename-main-style', get_theme_file_uri('/assets/css/style.css'), array(), _THEMENAME_VERSION );

	wp_enqueue_style( '_themename-root', get_stylesheet_uri(), array(), _THEMENAME_VERSION );
    wp_style_add_data( '_themename-root', 'rtl', 'replace' );


    /**
     * Enqueueing Scripts
     */
	wp_enqueue_script( 'mediaelement-and-player', _THEMENAME_VEND. '/media-player/mediaelement-and-player.min.js', array('jquery'), '4.2.6', true );
	wp_enqueue_script( 'parallaxie', _THEMENAME_VEND. '/parallax/parallaxie.js', array('jquery'), '0.5', true );
	wp_enqueue_script( '_themename-main-js', _THEMENAME_JS . '/main.js', array('jquery'), _THEMENAME_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_themename_scripts' );