<?php 


require _THEMENAME_THEMEROOT_DIR . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require _THEMENAME_THEMEROOT_DIR . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require _THEMENAME_THEMEROOT_DIR . '/inc/template-functions.php';
/**
 * _Themename helper 
 */
require _THEMENAME_THEMEROOT_DIR . '/inc/helper.php';

/**
 * _Themename comment area
*/
require _THEMENAME_THEMEROOT_DIR.'/inc/classes/comment_walker.php';
/**
 * _Themename nav walker
*/
require _THEMENAME_THEMEROOT_DIR.'/inc/classes/main-nav-walker.php';
/**
 * Customizer additions.
 */
require _THEMENAME_THEMEROOT_DIR . '/inc/customizer.php';

/**
 * _Themename Enqueue 
 */

require _THEMENAME_THEMEROOT_DIR . '/inc/static_enqueue.php';

/**
 * _Themename Admin Enqueue 
 */

require _THEMENAME_THEMEROOT_DIR . '/inc/admin_enqueue.php';


/**
 * _Themename breadcrumbs
 */

require _THEMENAME_THEMEROOT_DIR . '/inc/breadcrumbs.php';

/**
 * _Themename Tgm
 */
require _THEMENAME_THEMEROOT_DIR . '/inc/plugin_activation.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require _THEMENAME_THEMEROOT_DIR . '/inc/jetpack.php';
}
