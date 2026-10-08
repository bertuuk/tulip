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

if ( ! function_exists( 'tulip_register_pattern_categories' ) ) :
	/**
	 * One category with every Tulip pattern, so they are easy to find in the
	 * inserter. Patterns also stay in the core categories (Banner, Text...).
	 */
	function tulip_register_pattern_categories() {
		register_block_pattern_category(
			'tulip',
			array(
				'label'       => _x( 'Tulip', 'block pattern category', 'tulip' ),
				'description' => __( 'Sections designed for Tulip.', 'tulip' ),
			)
		);
	}
endif;
add_action( 'init', 'tulip_register_pattern_categories', 9 );

if ( ! function_exists( 'tulip_mark_all_posts_link' ) ) :
	/**
	 * In the blog category filter, mark "All" as the current page on the
	 * blog index, the same way the Categories block marks the current one.
	 *
	 * @param string $block_content Rendered block.
	 * @param array  $block         Block data.
	 * @return string
	 */
	function tulip_mark_all_posts_link( $block_content, $block ) {
		if ( ! is_home() || empty( $block['attrs']['className'] ) || false === strpos( $block['attrs']['className'], 'tulip-all-posts' ) ) {
			return $block_content;
		}
		$processor = new WP_HTML_Tag_Processor( $block_content );
		if ( $processor->next_tag( 'a' ) ) {
			$processor->set_attribute( 'aria-current', 'page' );
		}
		return $processor->get_updated_html();
	}
endif;
add_filter( 'render_block_core/paragraph', 'tulip_mark_all_posts_link', 10, 2 );

require_once get_theme_file_path( 'inc/plugin-integrations.php' );
