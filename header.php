<?php
/**
 * Site header.
 *
 * @package prajkta
 */

$pf_header = pf_global( 'header' );
$pf_cta    = is_front_page()
	? array( $pf_header['home_cta_label'], $pf_header['home_cta_url'] )
	: array( $pf_header['cta_label'], $pf_header['cta_url'] );
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main"><?php esc_html_e( 'Skip to content', 'prajkta' ); ?></a>

<header class="site-header">
	<div class="container site-header__inner">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php if ( has_custom_logo() ) : ?>
				<?php echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full', false, array( 'class' => 'brand__logo', 'alt' => get_bloginfo( 'name' ) ) ); ?>
			<?php else : ?>
				<img class="brand__logo" src="<?php echo esc_url( PF_URI . '/assets/img/logo.png' ); ?>" width="136" height="50" alt="<?php esc_attr_e( 'Prajkta Foundation', 'prajkta' ); ?>">
			<?php endif; ?>
		</a>

		<button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-nav">
			<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'prajkta' ); ?></span>
			<?php pf_icon( 'menu', 'nav-toggle__open' ); ?>
			<?php pf_icon( 'close', 'nav-toggle__close' ); ?>
		</button>

		<nav id="site-nav" class="site-nav" aria-label="<?php esc_attr_e( 'Primary', 'prajkta' ); ?>">
			<?php
			if ( has_nav_menu( 'primary' ) ) {
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'menu',
					'depth'          => 2,
				) );
			} else {
				pf_fallback_menu();
			}
			?>
			<div class="site-nav__actions">
				<a class="site-nav__phone" href="tel:<?php echo esc_attr( preg_replace( '/[^\d+]/', '', $pf_header['phone'] ) ); ?>" aria-label="<?php echo esc_attr( sprintf( __( 'Call us on %s', 'prajkta' ), $pf_header['phone'] ) ); ?>">
					<?php pf_icon( 'phone' ); ?>
				</a>
				<?php pf_btn( $pf_cta[0], $pf_cta[1], 'btn--orange btn--nav' ); ?>
			</div>
		</nav>
	</div>
</header>

<main id="main" class="site-main">
