<?php
/**
 * Check and setup theme's default settings
 *
 * @package hearth
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'hearth_setup_theme_default_settings' ) ) {
	function hearth_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$hearth_posts_index_style = get_theme_mod( 'hearth_posts_index_style' );
		if ( '' == $hearth_posts_index_style ) {
			set_theme_mod( 'hearth_posts_index_style', 'default' );
		}

		// Sidebar position.
		$hearth_sidebar_position = get_theme_mod( 'hearth_sidebar_position' );
		if ( '' == $hearth_sidebar_position ) {
			set_theme_mod( 'hearth_sidebar_position', 'right' );
		}

		// Container width.
		$hearth_container_type = get_theme_mod( 'hearth_container_type' );
		if ( '' == $hearth_container_type ) {
			set_theme_mod( 'hearth_container_type', 'container' );
		}
	}
}
