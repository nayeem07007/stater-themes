<?php
/**
 * Theme Scheme Colors Options
 */
Redux::set_section('_themename_opt', array(
    'title'     => esc_html__( 'Color Scheme', '_themename' ),
    'id'        => 'color_scheme_opt',
    'icon'      => 'dashicons dashicons-admin-appearance',
    'fields'    => array(
        array(
            'id'          => 'theme_color_opt',
            'type'        => 'color',
            'title'       => esc_html__( 'Theme Color', '_themename' ),
            'output_variables' => true,
        ),
        array(
            'id'          => 'theme_body_color_opt',
            'type'        => 'color',
            'title'       => esc_html__( 'Body Color', '_themename' ),
            'output_variables' => true,
        ),
        array(
            'id'          => 'theme_link_color_opt',
            'type'        => 'color',
            'title'       => esc_html__( 'Link Color', '_themename' ),
            'output_variables' => true,
        ),
        array(
            'id'          => 'theme_hover_color_opt',
            'type'        => 'color',
            'title'       => esc_html__( 'Link Hover Color', '_themename' ),
            'output_variables' => true,
        ),
        array(
            'id'          => 'theme_title_color_opt',
            'type'        => 'color',
            'title'       => esc_html__( 'Title Color', '_themename' ),
            'output_variables' => true,
        ),

    )
));