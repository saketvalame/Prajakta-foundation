<?php
/**
 * Page hero: headline and buttons on the left, artwork on the right.
 *
 * Args: hero (title, text, btn1_*, btn2_*, image), variant (paper | white | soft
 * | photo), bg (photo variant: colour the image fades into), icons ([btn1, btn2]).
 *
 * @package prajkta
 */

$pf_h       = $args['hero'];
$pf_variant = isset( $args['variant'] ) ? $args['variant'] : 'paper';
$pf_icons   = isset( $args['icons'] ) ? $args['icons'] : array( '', '' );
$pf_style   = ! empty( $args['bg'] ) ? ' style="--hero-bg:' . esc_attr( $args['bg'] ) . '"' : '';
?>
<section class="hero hero--<?php echo esc_attr( $pf_variant ); ?>"<?php echo $pf_style; // phpcs:ignore WordPress.Security.EscapeOutput -- escaped above. ?>>
	<?php if ( ! empty( $pf_h['image'] ) ) : ?>
		<div class="hero__media">
			<img src="<?php echo esc_url( pf_img( $pf_h['image'] ) ); ?>" alt="" fetchpriority="high">
		</div>
	<?php endif; ?>
	<div class="container hero__inner">
		<div class="hero__content">
			<h1 class="hero__title"><?php echo pf_t( $pf_h['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput -- kses in pf_t. ?></h1>
			<?php if ( ! empty( $pf_h['text'] ) ) : ?>
				<p class="hero__text"><?php echo esc_html( $pf_h['text'] ); ?></p>
			<?php endif; ?>
			<div class="btn-row">
				<?php
				pf_btn( $pf_h['btn1_label'], $pf_h['btn1_url'], 'btn--orange', $pf_icons[0] );
				pf_btn( $pf_h['btn2_label'], $pf_h['btn2_url'], 'photo' === $pf_variant ? 'btn--blue btn--ring' : 'btn--blue', $pf_icons[1] );
				?>
			</div>
		</div>
	</div>
</section>
