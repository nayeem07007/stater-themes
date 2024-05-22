<?php
// Header Section
Redux::set_section( '_themename_opt', array(
    'title'            => esc_html__( 'Page Settings', '_themename' ),
    'id'               => 'page_settings_opt',
    'customizer_width' => '400px',
    'icon'             => 'dashicons dashicons-admin-page',
));


// color
Redux::set_section( '_themename_opt', array(
    'title'            => esc_html__( 'Layout', '_themename' ),
    'id'               => 'page_opt',
    'subsection'       => true,
    'icon'             => '',
    'fields'           => array(
      
        array(
            'id'       => 'page_layout',
            'type'     => 'image_select',
            'title'    => __('Page Layout', '_themename'), 
            'subtitle' => __('Select your Page Layout', '_themename'),
            'options'  => array(
                'full'      => array(
                    'alt'   => 'Full Width',
                    'img'   => ReduxFramework::$_url.'assets/img/1col.png'
                ),
                'left'      => array(
                    'alt'   => 'Left Sidebar',
                    'img'   => ReduxFramework::$_url.'assets/img/2cl.png'
                ),
                'right'      => array(
                    'alt'   => 'Right Sidebar',
                    'img'  => ReduxFramework::$_url.'assets/img/2cr.png'
                ),
            ),
            'default' => 'right'
        ),
    )
) );