<?php

new \Kirki\Panel(
	'sbtech_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Sbtech Options', 'sbtech' ),
		'description' => esc_html__( 'My Panel Description.', 'sbtech' ),
	]
);

// Section 01
function sbtech_top_header(){
	new \Kirki\Section(
		'sbtech_top_head_section',
		[
			'title'       => esc_html__( 'Top Header', 'sbtech' ),
			'description' => esc_html__( 'My Top Header Section', 'sbtech' ),
			'panel'       => 'sbtech_panel',
			'priority'    => 160,
		]
	);

	// Top header switch option
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'top_header_switch',
			'label'       => esc_html__( 'Switch Field', 'sbtech' ),
			'description' => esc_html__( 'Top Header switch control', 'sbtech' ),
			'section'     => 'sbtech_top_head_section',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'sbtech' ),
				'off' => esc_html__( 'Disable', 'sbtech' ),
			],
		]
	);

	// Button text
	new \Kirki\Field\Text(
		[
			'settings' => 'button_text',
			'label'    => esc_html__( 'Button text', 'sbtech' ),
			'section'  => 'sbtech_top_head_section',
			'default'  => esc_html__( 'New Update', 'sbtech' ),
			'priority' => 10,
		]
	);

	// Button Description
	new \Kirki\Field\Text(
		[
			'settings' => 'button_desc',
			'label'    => esc_html__( 'Button Description', 'sbtech' ),
			'section'  => 'sbtech_top_head_section',
			'default'  => esc_html__( 'Betting against meme stocks could get you seriously burned', 'sbtech' ),
			'priority' => 10,
		]
	);

	// Nav facebook url
	new \Kirki\Field\Text(
		[
			'settings' => 'nav_facebook_url',
			'label'    => esc_html__( 'Nav Facebook Url', 'sbtech' ),
			'section'  => 'sbtech_top_head_section',
			'default'  => esc_html__( '#' ),
			'priority' => 10,
		]
	);

	// Nav twitter url
	new \Kirki\Field\Text(
		[
			'settings' => 'nav_twitter_url',
			'label'    => esc_html__( 'Nav Twitter Url', 'sbtech' ),
			'section'  => 'sbtech_top_head_section',
			'default'  => esc_html__( '#' ),
			'priority' => 10,
		]
	);

	// Nav instagram url
	new \Kirki\Field\Text(
		[
			'settings' => 'nav_instagram_url',
			'label'    => esc_html__( 'Nav Instagram Url', 'sbtech' ),
			'section'  => 'sbtech_top_head_section',
			'default'  => esc_html__( '#' ),
			'priority' => 10,
		]
	);

	// Nav Google url
	new \Kirki\Field\Text(
		[
			'settings' => 'nav_google_url',
			'label'    => esc_html__( 'Nav Google Url', 'sbtech' ),
			'section'  => 'sbtech_top_head_section',
			'default'  => esc_html__( '#' ),
			'priority' => 10,
		]
	);	

	
}
sbtech_top_header();


// Section 02
function sbtech_nav_offcanvas(){
	new \Kirki\Section(
		'sbtech_header_offcanvas_section',
		[
			'title'       => esc_html__( 'Top Header Offcanvas', 'sbtech' ),
			'description' => esc_html__( 'My Top Header Social Section', 'sbtech' ),
			'panel'       => 'sbtech_panel',
			'priority'    => 160,
		]
	);

	// Offcanvas switch option
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'header_offcanvas_switch',
			'label'       => esc_html__( 'Switch Field', 'sbtech' ),
			'description' => esc_html__( 'Top Header switch Offcanvas control', 'sbtech' ),
			'section'     => 'sbtech_header_offcanvas_section',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'sbtech' ),
				'off' => esc_html__( 'Disable', 'sbtech' ),
			],
		]
	);

	// sbtech logo field
	new \Kirki\Field\Image(
	[
		'settings'    => 'sbtech_offcanvas_logo',
		'label'       => esc_html__( 'Header Logo field', 'sbtech' ),
		'description' => esc_html__( 'Plesase set your header logo', 'sbtech' ),
		'section'     => 'sbtech_header_offcanvas_section',
		'default'     =>  get_template_directory_uri().'/assets/images/logo2.png',
	]
	);

	// Nav Address
	new \Kirki\Field\Text(
		[
			'settings' => 'nav_address',
			'label'    => esc_html__( 'Nav Menu Addresss', 'sbtech' ),
			'section'  => 'sbtech_header_offcanvas_section',
			'default'  => esc_html__( '68D, Belsion Town 2365 <br> Fna city, LH 3656, USA' ),
			'priority' => 10,
		]
	);

	// Nav Phone num
	new \Kirki\Field\Text(
		[
			'settings' => 'nav_phone',
			'label'    => esc_html__( 'Nav Phone Numner', 'sbtech' ),
			'section'  => 'sbtech_header_offcanvas_section',
			'default'  => esc_html__( '+ 8 (123) 123 456 789' ),
			'priority' => 10,
		]
	);

	// Nav email
	new \Kirki\Field\Text(
		[
			'settings' => 'nav_email',
			'label'    => esc_html__( 'Nav Email', 'sbtech' ),
			'section'  => 'sbtech_header_offcanvas_section',
			'default'  => esc_html__( 'Bloggar@gmail.com' ),
			'priority' => 10,
		]
	);

	
}
sbtech_nav_offcanvas();

// Section 03
function sbtech_logo_section(){
	new \Kirki\Section(
		'sbtech_head_logo_section',
		[
			'title'       => esc_html__( 'Logo section', 'sbtech' ),
			'description' => esc_html__( 'Nav Logo Section', 'sbtech' ),
			'panel'       => 'sbtech_panel',
			'priority'    => 160,
		]
	);

	// sbtech logo field
	new \Kirki\Field\Image(
	[
		'settings'    => 'sbtech_header_logo_field',
		'label'       => esc_html__( 'Header Logo field', 'sbtech' ),
		'description' => esc_html__( 'Plesase set your header logo', 'sbtech' ),
		'section'     => 'sbtech_head_logo_section',
		'default'     =>  get_template_directory_uri().'/assets/images/logo.png',
	]
	);

}
sbtech_logo_section();