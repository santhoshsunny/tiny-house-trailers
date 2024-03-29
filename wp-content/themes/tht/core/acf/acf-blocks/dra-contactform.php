<?php

acf_register_block(
	array(
		'name'				=> 'contactform-address',
		'title'				=> __('Contact Form Address', 'tht'),
		'category'			=> 'contactform',
		'keywords'		 => array('image', 'banner'),
		'icon' => array(
			'src'        => 'format-image',
			'background' => '#7e70af',
			'foreground' => '#fff',
		),
		'post_types'     => array('page'),
		'mode'           => 'edit',
		'supports'       => array(
			'align'    => array('full'),
			'multiple' => false,
		),
		'render_callback'	=> 'wptht_acf_block_render_callback',
	)
);

acf_register_block(
	array(
		'name'				=> 'contact-form',
		'title'				=> __('Contact Form', 'tht'),
		'category'			=> 'contactform',
		'keywords'		 => array('form', 'cf7'),
		'icon' => array(
			'src'        => 'format-image',
			'background' => '#7e70af',
			'foreground' => '#fff',
		),
		'post_types'     => array('page'),
		'mode'           => 'edit',
		'supports'       => array(
			'align'    => array('full'),
			'multiple' => false,
		),
		'render_callback'	=> 'wptht_acf_block_render_callback',
	)
);
