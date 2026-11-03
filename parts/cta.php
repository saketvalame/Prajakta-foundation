<?php
/**
 * Closing banner with the Donate / Volunteer / Partner cards.
 * Args (optional): title, text, image — override the site-wide values.
 *
 * @package prajkta
 */

$pf_cta = pf_global( 'cta' );
foreach ( array( 'title', 'text', 'image' ) as $pf_key ) {
	if ( ! empty( $args[ $pf_key ] ) ) {
		$pf_cta[ $pf_key ] = $args[ $pf_key ];
	}
}
?>
<section class="cta-band">
	<img class="cta-band__bg" src="<?php echo esc_url( pf_img( $pf_cta['image'] ) ); ?>" alt="" loading="lazy">
	<div class="container cta-band__inner">
		<div class="cta-band__text">
			<h2><?php echo pf_t( $pf_cta['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput -- kses in pf_t. ?></h2>
			<p><?php echo esc_html( $pf_cta['text'] ); ?></p>
		</div>
		<div class="cta-band__cards">
			<?php foreach ( $pf_cta['items'] as $pf_i => $pf_item ) : ?>
				<a class="cta-card<?php echo 0 === $pf_i ? ' is-primary' : ''; ?>" href="<?php echo esc_url( pf_link( $pf_item['url'] ) ); ?>">
					<?php pf_icon( $pf_item['icon'], 'cta-card__icon' ); ?>
					<span class="cta-card__text">
						<strong><?php echo esc_html( $pf_item['title'] ); ?></strong>
						<small><?php echo esc_html( $pf_item['text'] ); ?></small>
					</span>
					<?php pf_icon( 'chevron-right', 'cta-card__arrow' ); ?>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>
