<?php
// Add scripts and stylesheets
function synthesis2021_scripts()
{
	wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6');
	wp_enqueue_style('synthesis_css', get_template_directory_uri() . '/css/synthesis.css', array(), time(), 'all');
	wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true);
	wp_enqueue_script('synthesis_js', get_template_directory_uri() . '/js/synthesis.js', array('jquery'), time());
}

add_action('wp_enqueue_scripts', 'synthesis2021_scripts');

function synthesis2021_google_fonts()
{
	wp_register_style('OpenSans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
	wp_enqueue_style('OpenSans');
}

function register_main_menu()
{
	register_nav_menu('main-menu', __('Main Menu'));
}
add_action('init', 'register_main_menu');


add_action('wp_print_styles', 'synthesis2021_google_fonts');

add_theme_support('title-tag');

function synthesis_customize_register($wp_customize)
{

	$wp_customize->add_section('synthesis_members_password', array(
		'title'    => __('Members Password', 'synthesis'),
		'priority' => 120,
	));

	//  =============================
	//  = Text Input                =
	//  =============================
	$wp_customize->add_setting('synthesis_members_password_text', array(
		'default'        => 'changeme',
		'capability'     => 'edit_theme_options',

	));

	$wp_customize->add_control('synthesis_members_password_control', array(
		'label'      => __('Members Password', 'synthesis'),
		'section'    => 'synthesis_members_password',
		'settings'   => 'synthesis_members_password_text',
	));
}

add_action('customize_register', 'synthesis_customize_register');
