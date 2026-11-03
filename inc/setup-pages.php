<?php
/**
 * On theme activation: create the design's pages (if missing), assign their
 * templates, use "Home" as the front page and turn on pretty permalinks.
 *
 * @package prajkta
 */

defined( 'ABSPATH' ) || exit;

add_action( 'after_switch_theme', 'pf_setup_pages' );

function pf_setup_pages() {
	$ids = array();

	foreach ( pf_templates() as $slug => $page ) {
		$existing = get_page_by_path( $slug );
		$id       = $existing ? $existing->ID : wp_insert_post( array(
			'post_type'   => 'page',
			'post_status' => 'publish',
			'post_title'  => $page['title'],
			'post_name'   => $slug,
		) );

		if ( $id && ! is_wp_error( $id ) ) {
			if ( $page['template'] && ! get_post_meta( $id, '_wp_page_template', true ) ) {
				update_post_meta( $id, '_wp_page_template', $page['template'] );
			}
			$ids[ $slug ] = $id;
		}
	}

	if ( isset( $ids['home'] ) && 'page' !== get_option( 'show_on_front' ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $ids['home'] );
	}

	if ( ! get_option( 'permalink_structure' ) ) {
		update_option( 'permalink_structure', '/%postname%/' );
	}
	flush_rewrite_rules();
}
