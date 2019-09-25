<?php
/**
 * Custom hooks.
 *
 * @package hearth
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'hearth_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function hearth_site_info() {
		do_action( 'hearth_site_info' );
	}
}

if ( ! function_exists( 'hearth_add_site_info' ) ) {
	add_action( 'hearth_site_info', 'hearth_add_site_info' );

	/**
	 * Add site info content.
	 */
	function hearth_add_site_info() {
		$the_theme = wp_get_theme();

		$site_info = sprintf(
			'<a href="%1$s">%2$s</a><span class="sep"> | </span>%3$s(%4$s)',
			esc_url( __( 'http://wordpress.org/', 'hearth' ) ),
			sprintf(
				/* translators:*/
				esc_html__( 'Proudly powered by %s', 'hearth' ),
				'WordPress'
			),
			sprintf( // WPCS: XSS ok.
				/* translators:*/
				esc_html__( 'Theme: %1$s by %2$s.', 'hearth' ),
				$the_theme->get( 'Name' ),
				'<a href="' . esc_url( __( 'http://astrobaza.ro', 'hearth' ) ) . '">Astronautul Roz</a>'
			),
			sprintf( // WPCS: XSS ok.
				/* translators:*/
				esc_html__( 'Version: %1$s', 'hearth' ),
				$the_theme->get( 'Version' )
			)
		);

		echo apply_filters( 'hearth_site_info_content', $site_info ); // WPCS: XSS ok.
	}
}


add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => ' &#47; ',
            'wrap_before' => '<div class="breadcrumb" itemprop="breadcrumb">',
            'wrap_after'  => '</div>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
}