<?php
/**
 * Content helpers.
 *
 * Every page's copy and images live in inc/content/{slug}.php as defaults that
 * match the design. When ACF is active, a field named "{section}_{key}" on the
 * page (or on the options page for "global") overrides the default.
 *
 * @package prajkta
 */

defined( 'ABSPATH' ) || exit;

/**
 * Page slug => page template file. "home" uses front-page.php.
 */
function pf_templates() {
	return array(
		'home'         => array( 'title' => 'Home', 'template' => '' ),
		'about'        => array( 'title' => 'About', 'template' => 'templates/about.php' ),
		'our-work'     => array( 'title' => 'Our Work', 'template' => 'templates/our-work.php' ),
		'scholarships' => array( 'title' => 'Scholarships', 'template' => 'templates/scholarships.php' ),
		'healthcare'   => array( 'title' => 'Healthcare', 'template' => 'templates/healthcare.php' ),
		'environment'  => array( 'title' => 'Environment', 'template' => 'templates/environment.php' ),
		'csr'          => array( 'title' => 'CSR', 'template' => 'templates/csr.php' ),
		'volunteer'    => array( 'title' => 'Volunteer', 'template' => 'templates/volunteer.php' ),
		'donate'       => array( 'title' => 'Donate', 'template' => 'templates/donate.php' ),
		'thank-you'    => array( 'title' => 'Thank You', 'template' => 'templates/thank-you.php' ),
		'transparency' => array( 'title' => 'Transparency', 'template' => 'templates/transparency.php' ),
		'stories'      => array( 'title' => 'Stories', 'template' => 'templates/stories.php' ),
		'news'         => array( 'title' => 'News', 'template' => 'templates/news.php' ),
		'contact'      => array( 'title' => 'Contact', 'template' => 'templates/contact.php' ),
	);
}

function pf_schema( $slug ) {
	static $cache = array();
	if ( ! isset( $cache[ $slug ] ) ) {
		$file           = PF_DIR . '/inc/content/' . $slug . '.php';
		$cache[ $slug ] = file_exists( $file ) ? include $file : array();
	}
	return $cache[ $slug ];
}

function pf_is_blank( $value ) {
	return null === $value || false === $value || '' === $value || array() === $value;
}

/**
 * Resolved content for a page: design defaults, overridden by saved ACF values.
 */
function pf_content( $slug, $post_id = null ) {
	if ( null === $post_id ) {
		$post_id = 'global' === $slug ? 'option' : get_queried_object_id();
	}
	$use_acf = function_exists( 'get_field' );
	$out     = array();

	foreach ( pf_schema( $slug ) as $section => $fields ) {
		foreach ( $fields as $key => $default ) {
			$value                   = $use_acf ? get_field( "{$section}_{$key}", $post_id ) : null;
			$out[ $section ][ $key ] = pf_is_blank( $value ) ? $default : $value;
		}
	}
	return $out;
}

/**
 * Site-wide content (header, footer, FAQ, testimonials, closing banner).
 */
function pf_global( $section = null ) {
	static $global = null;
	if ( null === $global ) {
		$global = pf_content( 'global' );
	}
	return $section ? $global[ $section ] : $global;
}

/**
 * Image URL from an ACF value (URL, ID or array) or a bundled asset filename.
 */
function pf_img( $value ) {
	if ( is_array( $value ) ) {
		$value = isset( $value['url'] ) ? $value['url'] : '';
	}
	if ( is_numeric( $value ) ) {
		$value = wp_get_attachment_image_url( (int) $value, 'full' );
	}
	if ( pf_is_blank( $value ) ) {
		return PF_URI . '/assets/img/placeholder.svg';
	}
	if ( preg_match( '#^(https?:)?//|^/#', $value ) ) {
		return $value;
	}
	return PF_URI . '/assets/img/' . $value;
}

function pf_url( $slug ) {
	if ( 'home' === $slug ) {
		return home_url( '/' );
	}
	$page = get_page_by_path( $slug );
	return $page ? get_permalink( $page ) : home_url( '/' . $slug . '/' );
}

/**
 * Links in content may be written as "{slug}" or "{slug}#anchor".
 */
function pf_link( $value ) {
	if ( preg_match( '/^\{([a-z0-9-]+)\}(.*)$/', (string) $value, $m ) ) {
		return pf_url( $m[1] ) . $m[2];
	}
	return (string) $value;
}

/**
 * Short text with line breaks and a little inline markup (orange highlights).
 */
function pf_t( $text ) {
	$text = str_replace( "\n", '<br>', (string) $text );
	return wp_kses( $text, array(
		'br'     => array(),
		'span'   => array( 'class' => array() ),
		'strong' => array(),
		'em'     => array(),
	) );
}

/**
 * Longer text: blank lines become paragraphs.
 */
function pf_p( $text ) {
	return wpautop( wp_kses_post( (string) $text ) );
}

/**
 * Comma-separated content value as a trimmed list.
 */
function pf_list( $value ) {
	return array_values( array_filter( array_map( 'trim', explode( ',', (string) $value ) ), 'strlen' ) );
}

function pf_btn( $label, $url, $class = 'btn--orange', $icon = '' ) {
	if ( pf_is_blank( $label ) ) {
		return;
	}
	printf(
		'<a class="btn %1$s" href="%2$s">%3$s%4$s</a>',
		esc_attr( $class ),
		esc_url( pf_link( $url ) ),
		esc_html( $label ),
		$icon ? pf_icon( $icon, '', false ) : '' // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup.
	);
}

/**
 * Text link with an orange underline ("LEARN MORE →").
 */
function pf_more( $label, $url, $class = '' ) {
	if ( pf_is_blank( $label ) ) {
		return;
	}
	printf(
		'<a class="more %1$s" href="%2$s">%3$s%4$s</a>',
		esc_attr( $class ),
		esc_url( pf_link( $url ) ),
		esc_html( $label ),
		pf_icon( 'arrow-right', '', false ) // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup.
	);
}

/**
 * Load a template part from parts/ with an args array.
 */
function pf_part( $name, $args = array() ) {
	get_template_part( 'parts/' . $name, null, $args );
}
