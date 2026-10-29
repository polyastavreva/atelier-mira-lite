<?php
/**
 * Atelier Mira Lite functions and definitions.
 *
 * @package Atelier_Mira_Lite
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'ATELIER_MIRA_LITE_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Theme supports and editor styles.
 */
function atelier_mira_lite_setup() {
	add_theme_support( 'wp-block-styles' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'atelier_mira_lite_setup' );

/**
 * Front-end styles and scripts.
 */
function atelier_mira_lite_assets() {
	wp_enqueue_style( 'atelier-mira-lite', get_stylesheet_uri(), array(), ATELIER_MIRA_LITE_VERSION );
	wp_enqueue_script(
		'atelier-mira-lite',
		get_theme_file_uri( 'assets/js/theme.js' ),
		array(),
		ATELIER_MIRA_LITE_VERSION,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'atelier_mira_lite_assets' );

/**
 * Turn on the photo animations before the page paints, unless the visitor prefers reduced motion.
 */
function atelier_mira_lite_motion_flag() {
	wp_print_inline_script_tag( "if(!window.matchMedia||!matchMedia('(prefers-reduced-motion: reduce)').matches){document.documentElement.classList.add('am-anim');}" );
}
add_action( 'wp_head', 'atelier_mira_lite_motion_flag', 1 );

/**
 * Block styles and the pattern category.
 */
function atelier_mira_lite_register() {
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'eyebrow',
			'label' => __( 'Eyebrow', 'atelier-mira-lite' ),
		)
	);
	register_block_pattern_category(
		'atelier-mira-lite',
		array( 'label' => __( 'Atelier Mira Lite', 'atelier-mira-lite' ) )
	);
}
add_action( 'init', 'atelier_mira_lite_register' );
