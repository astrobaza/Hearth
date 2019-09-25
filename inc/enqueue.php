<?php
/**
 * Hearth enqueue scripts
 *
 * @package hearth
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'hearth_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function hearth_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/styles.min.css' );
		wp_enqueue_style( 'hearth-styles', get_template_directory_uri() . '/css/styles.min.css', array(), $css_version );
		wp_enqueue_style( 'hearth-slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/vendor/modernizr.js' );
		wp_enqueue_script( 'hearth-scripts', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), $js_version, true );
		wp_enqueue_script( 'hearth-slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), $js_version, true );
		wp_enqueue_script( 'global', 'js/global.min.js', array(), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'hearth_scripts' ).

add_action( 'wp_enqueue_scripts', 'hearth_scripts' );
