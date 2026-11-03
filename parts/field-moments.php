<?php
/**
 * Text on the left, blue brush-stroke photo panel on the right.
 * Args: data (title, text, btn_label, btn_url, image), id (optional).
 *
 * @package prajkta
 */

$pf_f = $args['data'];
?>
<section class="moments"<?php echo ! empty( $args['id'] ) ? ' id="' . esc_attr( $args['id'] ) . '"' : ''; ?>>
	<div class="container moments__inner">
		<div class="moments__text">
			<h2 class="h2"><?php echo esc_html( $pf_f['title'] ); ?></h2>
			<p><?php echo esc_html( $pf_f['text'] ); ?></p>
			<?php pf_btn( $pf_f['btn_label'], $pf_f['btn_url'], 'btn--outline', 'View More' === $pf_f['btn_label'] ? 'arrow-right' : '' ); ?>
		</div>
	</div>
	<img class="moments__panel" src="<?php echo esc_url( pf_img( $pf_f['image'] ) ); ?>" alt="" loading="lazy">
</section>
