<?php
/**
 * Theme Banner Settings
 */
Redux::set_section('_themename_opt', array(
    'title'            => esc_html__( 'Banner Setting', '_themename' ),
    'id'               => 'banner_settings_opt',
    'icon'             => 'el el-picture',
));

// Page Banner 
Redux::set_section('_themename_opt', array(
    'title'            => esc_html__( 'Page Banner', '_themename' ),
    'id'               => 'page_banner_opt',
    'icon'             => '',
    'subsection' => true,
    'fields'           => array(
        array(
            'id'        => 'page_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Page Banner', '_themename'),
            'subtitle'  => esc_html__('Show Hide Page Banner Globally ', '_themename'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', '_themename'),
                'hide'  => esc_html__('Hide Banner', '_themename'),
            ), 
            'default'   => 'show',
        ),

        array(
            'id'        => 'page_banner_breadcrumb',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Page Breadcrumb', '_themename'),
            'options'   => array(
                'show'  => esc_html__('Show', '_themename'),
                'hide'  => esc_html__('Hide', '_themename'),
            ), 
            'default'   => 'show',
            'required'  => array('page_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'page_banner_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Page Title', '_themename'),
            'options'   => array(
                'show'  => esc_html__('Show', '_themename'),
                'hide'  => esc_html__('Hide', '_themename'),
            ), 
            'default'   => 'show',
            'required'  => array('page_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'page_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', '_themename'),
            'default'   => array(
                'url'   => _THEMENAME_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'required'  => array('page_banner_toggle', '=', 'show')

        ),
        array(
            'id'        => 'page_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.page-banner .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),
            'required'  => array('page_banner_toggle', '=', 'show')
        ),
      )
));


// Blog Banner
Redux::set_section('_themename_opt', array(
    'title'            => esc_html__( 'Blog Banner', '_themename' ),
    'id'               => 'blog_banner_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'        => 'blog_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Blog Banner', '_themename'),
            'subtitle'  => esc_html__('Show Hide Blog Banner Globally ', '_themename'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', '_themename'),
                'hide'  => esc_html__('Hide Banner', '_themename'),
            ), 
            'default'   => 'show'
        ),

        array(
            'id'        => 'is_blog_banner_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Blog Title', '_themename'),
            'options'   => array(
                'show'  => esc_html__('Show', '_themename'),
                'hide'  => esc_html__('Hide', '_themename'),
            ), 
            'default'   => 'show',
            'required'  => array('blog_banner_toggle', '=', 'show')
        ),

        array( 
            'title'     => esc_html__('Blog title', '_themename'),
            'id'        => 'blog_banner_title',
            'type'      => 'text',
            'default'   => 'Blog List',
            'required'  => array('is_blog_banner_title', '=' , 'show')
        ),

        array(
            'id'        => 'blog_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', '_themename'),
            'default'   => array(
                'url'   => _THEMENAME_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'required'  => array('blog_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'blog_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),
            'required'  => array('blog_banner_toggle', '=', 'show')
        ),
      )
));


// Single page Banner
Redux::set_section('_themename_opt', array(
    'title'            => esc_html__( 'Single Blog Banner', '_themename' ),
    'id'               => 'single_blog_banner_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'        => 'single_blog_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Single Blog Banner', '_themename'),
            'subtitle'  => esc_html__('Show Hide Banner Globally ', '_themename'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', '_themename'),
                'hide'  => esc_html__('Hide Banner', '_themename'),
            ), 
            'default'   => 'show'
        ),

        array(
            'id'        => 'single_blog_banner_breadcrumb',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Breadcrumb', '_themename'),
            'options'   => array(
                'show'  => esc_html__('Show', '_themename'),
                'hide'  => esc_html__('Hide', '_themename'),
            ), 
            'default'   => 'show',
            'required'  => array('single_blog_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'is_single_blog_banner_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Title', '_themename'),
            'options'   => array(
                'show'  => esc_html__('Show', '_themename'),
                'hide'  => esc_html__('Hide', '_themename'),
            ), 
            'default'   => 'show',
            'required'  => array('single_blog_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'single_blog_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', '_themename'),
            'default'   => array(
                'url'   => _THEMENAME_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'required'  => array('single_blog_banner_toggle', '=', 'show')

        ),

        array(
            'id'        => 'single_blog_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.blog-single-page .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),
            'required'  => array('single_blog_banner_toggle', '=', 'show')
        ),
      )
));


//  Archive page Banner
Redux::set_section('_themename_opt', array(
    'title'            => esc_html__( 'Archive Banner', '_themename' ),
    'id'               => 'archive_blog_banner_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'        => 'archive_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Archive  Banner', '_themename'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', '_themename'),
                'hide'  => esc_html__('Hide Banner', '_themename'),
            ), 
            'default'   => 'show'
        ),

        array(
            'id'        => 'archive_banner_breadcrumb',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Breadcrumb', '_themename'),
            'options'   => array(
                'show'  => esc_html__('Show', '_themename'),
                'hide'  => esc_html__('Hide', '_themename'),
            ), 
            'default'   => 'show',
            'required'  => array('archive_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'is_archive_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Archive Title', '_themename'),
            'options'   => array(
                'show'  => esc_html__('Show', '_themename'),
                'hide'  => esc_html__('Hide', '_themename'),
            ), 
            'default'   => 'show',
            'required'  => array('archive_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'archive_description',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Archive Description', '_themename'),
            'options'   => array(
                'show'  => esc_html__('Show', '_themename'),
                'hide'  => esc_html__('Hide', '_themename'),
            ), 
            'default'   => 'show',
            'required'  => array('archive_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'archive_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', '_themename'),
            'default'   => array(
                'url'   => _THEMENAME_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'required'  => array('archive_banner_toggle', '=', 'show')

        ),

        array(
            'id'        => 'archive_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.search-banner .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),
            'required'  => array('archive_banner_toggle', '=', 'show')
        ),
      )
));

// search page Banner
Redux::set_section('_themename_opt', array(
    'title'            => esc_html__( 'Search Banner', '_themename' ),
    'id'               => 'search_blog_banner_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'        => 'search_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', '_themename'),
            'default'   => array(
                'url'   => _THEMENAME_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
        ),

        array(
            'id'        => 'search_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.archive-banner .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),
        ),
    )
));


// 404 Error page
Redux::set_section('_themename_opt', array(
    'title'            => esc_html__( '404 Banner', '_themename' ),
    'id'               => 'error_banner_opt',
    'icon'             => '',
    'subsection'       => true,
    'fields'           => array(

        array(
            'id'        => 'error_banner_toggle',
            'type'      => 'button_set',
            'title'     => esc_html__('Show 404  Banner', '_themename'),
            'options'   => array(
                'show'  => esc_html__('Show Banner', '_themename'),
                'hide'  => esc_html__('Hide Banner', '_themename'),
            ),
            'default'   => 'show'
        ),

        array(
            'id'        => 'is_error_banner_title',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Title', '_themename'),
            'options'   => array(
                'show'  => esc_html__('Show', '_themename'),
                'hide'  => esc_html__('Hide', '_themename'),
            ),
            'default'   => 'show',
            'required'  => array('error_banner_toggle', '=', 'show')
        ),

        array(
            'title'         => esc_html__('404 Banner Title', '_themename'),
            'type'          => 'text',
            'id'            => 'error_banner_title',
            'default'       => '404',
            'required'      => array('is_error_banner_title', '=', 'show')
        ),

        array(
            'id'        => 'error_banner_breadcrumb',
            'type'      => 'button_set',
            'title'     => esc_html__('Show Breadcrumb', '_themename'),
            'options'   => array(
                'show'  => esc_html__('Show', '_themename'),
                'hide'  => esc_html__('Hide', '_themename'),
            ),
            'default'   => 'show',
            'required'  => array('error_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => 'error_banner_img_upload',
            'type'      => 'media',
            'title'     => __('Upload Banner', '_themename'),
            'default'   => array(
                'url'   => _THEMENAME_IMAGES.'/blog/banner/blog_details_img.jpg',
            ),
            'required'  => array('error_banner_toggle', '=', 'show')
        ),

        array(
            'id'        => '404_banner_overly',
            'type'      => 'color_rgba',
            'title'     => 'Banner Overly Color',
            'mode'      => 'background',
            'output'    => array( '.blog_breadcrumbs_area_two.banner-404 .overlay_bg' ),
            'default'   => array(
                'color'     => '#000',
                'alpha'     => .5
            ),
            'required'  => array('error_banner_toggle', '=', 'show')
        ),
    )
));

