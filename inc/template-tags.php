<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package _themename
 */

if ( ! function_exists( '_themename_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function _themename_posted_on() {
	?>
	  <span class="post_date_loop"><?php echo esc_html( get_the_date('M d, Y') ); ?> </span> 
	<?php
	}
endif;

if ( ! function_exists( '_themename_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function _themename_posted_by() {
		global $post;
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( '%s', 'post author', '_themename' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( $post->post_author) ) . '">' . esc_html(get_the_author_meta( 'display_name',$post->post_author) ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( '_themename_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function _themename_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', '_themename' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', '_themename' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', '_themename' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', '_themename' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', '_themename' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', '_themename' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( '_themename_entry_meta_footer' ) ) :
		/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 * Footer entry meta is displayed differently in archives and single posts.
	 *
	 * @since _themename 1.0
	 *
	 * @return void
	 */
	function _themename_entry_meta_footer() {

		$readmore_butotn_text = _themename_opt('read_more_text_button', 'Read More');

	?>
	<div class="post_bottom">
		<a href="<?php echo esc_url( get_the_permalink()); ?>" class="learn_btn_two"><?php echo esc_html($readmore_butotn_text); ?></a>
		<span class="post_comments">
		  <?php comments_number( 'No comments', '1 comment', '% comments' ); ?>
		</span>
    </div>
   <?php 
	}
endif;	

if ( ! function_exists( '_themename_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function _themename_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
					the_post_thumbnail(
						'post-thumbnail',
						array(
							'alt' => the_title_attribute(
								array(
									'echo' => false,
								)
							),
							'class' => 'zoom_in_img'
						)
					);
				?>
			</a>

			<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;

function _themename_is_comment_by_post_author( $comment = null ) {

	if ( is_object( $comment ) && $comment->user_id > 0 ) {

		$user = get_userdata( $comment->user_id );
		$post = get_post( $comment->comment_post_ID );

		if ( ! empty( $user ) && ! empty( $post ) ) {

			return $comment->user_id === $post->post_author;

		}
	}
	return false;

}

/**
 * Site logo 
 */

 if(!function_exists('_themename_logo')) {
   
	/**
	 * By default show custom logo from customizer 
	 * if show logo from theme option display it 
	 * Select Ratina logo from theme logo 
	*/

		function _themename_logo () {
           
			$logo_option_url = _THEMENAME_IMAGES.'/default_logo/logo.png';
			$sticky_logo_option = _THEMENAME_IMAGES.'/default_logo/logo_sticky.png';
			$sticky_ratina_sticky_url = '';
			$sticky_ratina_attr = '';
			$ratena_url = '';
			$ratena_attr = '';
			$logo_alt = '_themename default logo';
			$logo_alt_sticky = '_themename default sticky logo';

			if(class_exists( 'Redux' ) ) {

				$logo = _themename_opt('logo');
				$logo_sticky = _themename_opt('sticky_logo');
				$logo_ratina = _themename_opt('retina_logo');
				$logo_ratina_sticky = _themename_opt('retina_sticky_logo');
                
				// ratina logo 
				if(isset($logo_ratina['url'] ) && $logo_ratina['url'] !='') {
                  $ratena_url = $logo_ratina['url'];
				}

				// ratina logo sticky
				if(isset($logo_ratina_sticky['url'] ) && $logo_ratina_sticky['url'] !='') {
                  $sticky_ratina_sticky_url = $logo_ratina_sticky['url'];
				}
                
				// site logo 
                 if(isset($logo['url']) && $logo['url'] != '') {
					$logo_option_url = $logo['url'];
				 }

                 if(isset($logo['id']) && $logo['id'] != '') {
					$logo_alt = get_post_meta( $logo['id'], '_wp_attachment_image_alt', true);
				 }

				// sitcky log 

				 if(isset($logo_sticky['url']) && $logo_sticky['url'] != '') {
					$sticky_logo_option = $logo_sticky['url'];
				 }

				 if(isset($logo_sticky['id']) && $logo_sticky['id'] != '') {
					$logo_alt_sticky = get_post_meta( $logo_sticky['id'], '_wp_attachment_image_alt', true);
				 }

			}

			//  logo ratina
			if($ratena_url  != ''){
				$ratena_attr = 'srcset="'.$logo_option_url.", ".$ratena_url." 2x".'"';
			}

			// sticky logo ratina 

			if($sticky_ratina_sticky_url  != ''){
				$sticky_ratina_attr = 'srcset="'.$default_sticky_logo.", ".$sticky_ratina_sticky_url." 2x".'"';
			}

			if(function_exists('the_custom_logo') && has_custom_logo()) {

				the_custom_logo();

			}elseif($logo_option_url != '') {

              echo '<a href="'.esc_url(home_url('/')).'" class="navbar-brand">
						<img src="'.esc_url($logo_option_url).'" class="site-logo" alt="'.esc_attr( $logo_alt ).'"'.$ratena_attr.'>
						<img src="'.esc_url($sticky_logo_option).'" class="site-logo" alt="'.esc_attr( $logo_alt_sticky ).'"'.$sticky_ratina_attr.'>
			        </a>';

			}else{

				echo '<a href="'.esc_url(home_url('/')).'" class="navbar-brand">
				        <img src="'.esc_url($logo_option_url).'" class="site-logo" alt="'.esc_attr( $logo_alt ).'" '.$ratena_attr.'>
						<img src="'.esc_url($sticky_logo_option).'" class="site-logo" alt="'.esc_attr( $logo_alt_sticky ).'" '.$sticky_ratina_attr.'>
				      </a>';	
			}
          
		}

 }

 /**
  * display tag 
  */
 if(!function_exists('_themename_single_page_tag'))  {
	 function _themename_single_page_tag() {
		 if(has_tag() ) :
		 ?>
		 <div class="tagcloud">
            <?php the_tags(null, ''); ?>
        </div>
		 <?php
		 endif;
	 }
 }

 /**
  * About Author 
  */

if(!function_exists('_themename_about_author')) {
	
	function _themename_about_author() {
		global $post;
      ?>
	  <div class="about-autheor">
		<h3 class="comment-reply-title"><?php echo esc_html__( 'About the Author', '_themename' ); ?></h3>
		<div class="author-details">
		  <div class="auther-avater">
		  <a href="<?php echo esc_url(get_author_posts_url( $post->post_author)); ?>">
		    <?php echo get_avatar( get_the_author_meta( 'user_email',$post->post_author)); ?>
		   </a>
		  </div>
		  <div class="auther-info">
		    <h4><?php echo esc_html(  get_the_author_meta( 'display_name',$post->post_author) ); ?></h4>
			<p><?php echo esc_html(  get_the_author_meta( 'description',$post->post_author) ); ?></p>
		  </div>
		</div>
	  </div>
	  <?php 
	}
}