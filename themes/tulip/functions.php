<?php
/**
 * Tulip functions and definitions.
 *
 * Everything visual lives in theme.json. This file only loads the small
 * stylesheet that theme.json cannot express (focus rings, reduced motion).
 *
 * @package Tulip
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'tulip_setup' ) ) :
	/**
	 * Theme setup: editor stylesheet.
	 */
	function tulip_setup() {
		add_editor_style( 'assets/css/base.css' );
	}
endif;
add_action( 'after_setup_theme', 'tulip_setup' );

if ( ! function_exists( 'tulip_enqueue_styles' ) ) :
	/**
	 * Front-end stylesheet.
	 */
	function tulip_enqueue_styles() {
		$theme = wp_get_theme();
		wp_enqueue_style(
			'tulip-base',
			get_theme_file_uri( 'assets/css/base.css' ),
			array(),
			$theme->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'tulip_enqueue_styles' );
