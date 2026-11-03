<?php
/**
 * Centred closing banner over a photo (Environment, Donate, Transparency).
 * Args: data (title, text, btn1_*, btn2_*, image), icon (optional).
 *
 * @package prajkta
 */

$pf_c = $args['data'];
?>
<section class="closing">
	<img class="closing__bg" src="<?php echo esc_url( pf_img( $pf_c['image'] ) ); ?>" alt="" loading="lazy">
	<div class="container closing__inner">
		<?php if ( ! empty( $args['icon'] ) ) : ?>
			<?php pf_icon( $args['icon'], 'closing__icon' ); ?>
		<?php endif; ?>
		<h2><?php echo pf_t( $pf_c['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput -- kses in pf_t. ?></h2>
		<p><?php echo esc_html( $pf_c['text'] ); ?></p>
		<div class="btn-row btn-row--center">
			<?php
			pf_btn( $pf_c['btn1_label'], $pf_c['btn1_url'] );
			pf_btn( $pf_c['btn2_label'], $pf_c['btn2_url'], 'btn--ghost' );
			?>
		</div>
	</div>
</section>
