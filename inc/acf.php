<?php
/**
 * ACF field groups, generated from the content defaults in inc/content/.
 *
 * Each page template gets one field group with a tab per section. A field is
 * named "{section}_{key}"; leaving it empty keeps the design default. Lists
 * become repeaters (ACF Pro) and keep their defaults on ACF free.
 *
 * @package prajkta
 */

defined( 'ABSPATH' ) || exit;

add_action( 'acf/init', function () {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	if ( function_exists( 'acf_add_options_page' ) ) {
		acf_add_options_page( array(
			'page_title' => __( 'Site Content', 'prajkta' ),
			'menu_slug'  => 'pf-site-content',
			'icon_url'   => 'dashicons-admin-site-alt3',
			'position'   => 59,
		) );
		pf_acf_register_group( 'global', __( 'Site content (header, footer, shared sections)', 'prajkta' ), array(
			array( array( 'param' => 'options_page', 'operator' => '==', 'value' => 'pf-site-content' ) ),
		) );
	}

	foreach ( pf_templates() as $slug => $page ) {
		$location = 'home' === $slug
			? array( array( array( 'param' => 'page_type', 'operator' => '==', 'value' => 'front_page' ) ) )
			: array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => $page['template'] ) ) );

		/* translators: %s: page name */
		pf_acf_register_group( $slug, sprintf( __( '%s page content', 'prajkta' ), $page['title'] ), $location );
	}
} );

function pf_acf_register_group( $slug, $title, $location ) {
	$fields = array();

	foreach ( pf_schema( $slug ) as $section => $defaults ) {
		$fields[] = array(
			'key'   => "field_pf_{$slug}_{$section}",
			'label' => pf_acf_label( $section ),
			'name'  => '',
			'type'  => 'tab',
		);
		foreach ( $defaults as $key => $default ) {
			$field = pf_acf_field( "field_pf_{$slug}_{$section}_{$key}", "{$section}_{$key}", $key, $default );
			if ( $field ) {
				$fields[] = $field;
			}
		}
	}

	acf_add_local_field_group( array(
		'key'                   => 'group_pf_' . $slug,
		'title'                 => $title,
		'fields'                => $fields,
		'location'              => $location,
		'style'                 => 'seamless',
		'hide_on_screen'        => 'home' === $slug || 'global' === $slug ? array() : array( 'the_content' ),
		'instruction_placement' => 'field',
	) );
}

function pf_acf_label( $key ) {
	return ucwords( str_replace( array( '_', '-' ), ' ', $key ) );
}

/**
 * Field definition inferred from the key name and the shape of the default.
 */
function pf_acf_field( $acf_key, $name, $key, $default ) {
	$base = array(
		'key'   => $acf_key,
		'name'  => $name,
		'label' => pf_acf_label( $key ),
	);

	if ( is_array( $default ) ) {
		$is_pro = function_exists( 'acf_get_field_type' ) && acf_get_field_type( 'repeater' );
		if ( ! $is_pro || empty( $default ) || ! is_array( reset( $default ) ) ) {
			return null;
		}
		$sub = array();
		foreach ( reset( $default ) as $sub_key => $sub_default ) {
			$sub[] = pf_acf_field( "{$acf_key}_{$sub_key}", $sub_key, $sub_key, $sub_default );
		}
		return $base + array(
			'type'         => 'repeater',
			'layout'       => 'block',
			'button_label' => __( 'Add item', 'prajkta' ),
			'sub_fields'   => array_values( array_filter( $sub ) ),
			'instructions' => __( 'Leave empty to keep the items from the design.', 'prajkta' ),
		);
	}

	if ( preg_match( '/(^|_)(image|photo|cover)(_\d+)?$/', $key ) ) {
		return $base + array(
			'type'          => 'image',
			'return_format' => 'url',
			'preview_size'  => 'medium',
			'instructions'  => __( 'Leave empty to use the design image.', 'prajkta' ),
		);
	}

	if ( 'icon' === $key ) {
		return $base + array(
			'type'          => 'select',
			'choices'       => array_combine( array_keys( pf_icon_paths() ), array_keys( pf_icon_paths() ) ),
			'default_value' => $default,
		);
	}

	$text = (string) $default;
	$long = strlen( $text ) > 90 || false !== strpos( $text, "\n" );

	return $base + array(
		'type'          => $long ? 'textarea' : 'text',
		'default_value' => $text,
		'new_lines'     => '',
		'rows'          => $long ? 3 : null,
		'instructions'  => preg_match( '/(^|_)(url|link|file)$/', $key )
			? __( 'A full URL, or {page-slug} for a page on this site, e.g. {donate} or {contact}#form.', 'prajkta' )
			: '',
	);
}
