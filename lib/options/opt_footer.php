<?php
Redux::set_section('_themename_opt', array(
	'title'     => esc_html__( 'Footer', '_themename' ),
	'id'        => 'footer_settings_opt',
	'icon'      => 'dashicons dashicons-arrow-down-alt2',
));

// page Title Bar
Redux::set_section('_themename_opt', array(
	'title'         => esc_html__( 'Contents', '_themename' ),
	'id'            => 'footer_contents_opt',
	'icon'          => '',
    'subsection'    => true,
	'fields'        => array(

	    array(
            'title'     => esc_html__('Copyright Text', '_themename'),
            'id'        => 'footer_copyright_txt',
            'type'      => 'editor',
            'default'   => 'Copyright &copy; 2021 <a href="#">DroitThemes</a> | All rights reserved',
            'args'      => array(
                'wpautop'       => true,
                'media_buttons' => false,
                'textarea_rows' => 10,
                'teeny'         => false,
            )
        ),
	)
));

