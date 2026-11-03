<?php
/**
 * Not found.
 *
 * @package prajkta
 */

get_header();
?>

<section class="page-head">
	<div class="container">
		<h1 class="hero__title"><?php esc_html_e( 'Page not found', 'prajkta' ); ?></h1>
		<p class="contact-hero__text"><?php esc_html_e( 'The page you were looking for has moved or no longer exists.', 'prajkta' ); ?></p>
		<div class="btn-row"><?php pf_btn( __( 'Back to Home', 'prajkta' ), '{home}', 'btn--orange', 'arrow-right' ); ?></div>
	</div>
</section>

<?php
get_footer();
