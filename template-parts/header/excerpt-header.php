<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage _themename
 * @since _themename 1.0
 */

// Don't show the title if the post-format is `aside` or `status`.
$post_format = get_post_format();
if ( 'aside' === $post_format || 'status' === $post_format ) {
	return;
}
?>
<?php if(has_post_thumbnail( )) : ?> 
  <div class="post_media">
      <?php _themename_post_thumbnail(); ?>
  </div>
<?php endif; ?>


