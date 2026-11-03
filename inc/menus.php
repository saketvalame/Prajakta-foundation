<?php
/**
 * Navigation from the design, used until a "Primary menu" is assigned in
 * Appearance → Menus.
 *
 * @package prajkta
 */

defined( 'ABSPATH' ) || exit;

function pf_menu_items() {
	return array(
		array( 'Home', 'home' ),
		array( 'About', 'about' ),
		array( 'Get Involved', 'volunteer', array(
			array( 'Volunteer', 'volunteer' ),
			array( 'Donate', 'donate' ),
			array( 'Corporate CSR', 'csr' ),
		) ),
		array( 'Our Impact', 'our-work', array(
			array( 'Our Work', 'our-work' ),
			array( 'Scholarships', 'scholarships' ),
			array( 'Healthcare', 'healthcare' ),
			array( 'Environment', 'environment' ),
			array( 'Stories', 'stories' ),
		) ),
		array( 'Transparency', 'transparency' ),
		array( 'News', 'news' ),
	);
}

function pf_is_current( $slug ) {
	if ( 'home' === $slug ) {
		return is_front_page();
	}
	return is_page( $slug );
}

function pf_fallback_menu() {
	echo '<ul class="menu">';
	foreach ( pf_menu_items() as $item ) {
		$children = isset( $item[2] ) ? $item[2] : array();
		$current  = pf_is_current( $item[1] );
		foreach ( $children as $child ) {
			$current = $current || pf_is_current( $child[1] );
		}

		$classes = array( 'menu-item' );
		if ( $children ) {
			$classes[] = 'menu-item-has-children';
		}
		if ( $current ) {
			$classes[] = 'current-menu-item';
		}

		printf(
			'<li class="%1$s"><a href="%2$s"%3$s>%4$s</a>',
			esc_attr( implode( ' ', $classes ) ),
			esc_url( pf_url( $item[1] ) ),
			pf_is_current( $item[1] ) && ! $children ? ' aria-current="page"' : '',
			esc_html( $item[0] )
		);

		if ( $children ) {
			echo '<ul class="sub-menu">';
			foreach ( $children as $child ) {
				printf(
					'<li class="menu-item"><a href="%1$s"%2$s>%3$s</a></li>',
					esc_url( pf_url( $child[1] ) ),
					pf_is_current( $child[1] ) ? ' aria-current="page"' : '',
					esc_html( $child[0] )
				);
			}
			echo '</ul>';
		}
		echo '</li>';
	}
	echo '</ul>';
}

/**
 * Footer link columns: [label, link] pairs. A pair without a link is a heading.
 */
function pf_footer_columns() {
	return array(
		array( array( 'Explore', '' ), array( 'Home', '{home}' ), array( 'Transparency', '{transparency}' ), array( 'News', '{news}' ), array( 'Contact', '{contact}' ) ),
		array( array( 'Our Work', '{our-work}' ), array( 'CSR', '{csr}' ), array( 'Scholarship', '{scholarships}' ), array( 'Healthcare', '{healthcare}' ), array( 'Environment', '{environment}' ) ),
		array( array( 'About', '{about}' ), array( 'Stories', '{stories}' ) ),
		array( array( 'Volunteer', '{volunteer}' ), array( 'Donate', '{donate}' ) ),
	);
}
