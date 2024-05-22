<?php 

$is_banner = _themename_opt('archive_banner_toggle', 'show');
$is_breadcrumbs = _themename_opt('archive_banner_breadcrumb', 'show');
$is_banner_title = _themename_opt('is_archive_title', 'show');
$banner_url = _themename_opt('archive_banner_img_upload');
$banner_background_url = _THEMENAME_IMAGES.'/blog/banner/blog_details_img.jpg';

if ( $banner_url && !empty($banner_url['url']) ) {
    $banner_background_url = $banner_url['url'];
}

if (!class_exists('Redux') ) {
    $banner_background_url = '';
}



if ( $is_banner ) {
    if ($banner_background_url != '') :  ?>
        <div class="blog_breadcrumbs_area_two parallaxie" data-bg-img="<?php echo esc_url($banner_background_url); ?>">
        <div class="overlay_bg"></div>
    <?php else: ?>
        <div class="blog_breadcrumbs_area_two banner-with-color">
    <?php endif; ?>
    <div class="container">
        <div class="breadcrumb_content text-white text-center">
            <?php
            if (have_posts() && $is_banner_title == 'show') {
                the_archive_title( '<h1 class="page-title page_title">', '</h1>' );
            }
            if ( $is_breadcrumbs == 'show') {
                _themename_breadcrumbs();
            } ?>
        </div>
    </div>
    </div>
    <?php
}