<?php
/**
 * "Voices of Impact" testimonial box.
 *
 * @package prajkta
 */

$pf_v = pf_global( 'voices' );
?>
<section class="section voices">
	<div class="container">
		<div class="voices__box">
			<h2 class="h2"><?php echo esc_html( $pf_v['title'] ); ?></h2>
			<p class="voices__intro"><?php echo esc_html( $pf_v['text'] ); ?></p>
			<div class="voices__grid">
				<div class="voices__photos">
					<span class="voices__mark" aria-hidden="true">&ldquo;</span>
					<img src="<?php echo esc_url( pf_img( $pf_v['photo_1'] ) ); ?>" alt="" loading="lazy">
					<img src="<?php echo esc_url( pf_img( $pf_v['photo_2'] ) ); ?>" alt="" loading="lazy">
					<img class="is-tall" src="<?php echo esc_url( pf_img( $pf_v['photo_3'] ) ); ?>" alt="" loading="lazy">
				</div>
				<div class="voices__quotes" data-rotator>
					<?php foreach ( $pf_v['items'] as $pf_i => $pf_item ) : ?>
						<figure class="voices__item" data-rotator-item<?php echo $pf_i ? ' hidden' : ''; ?>>
							<figcaption>
								<strong>— <?php echo esc_html( $pf_item['name'] ); ?></strong>
								<span><?php echo esc_html( $pf_item['role'] ); ?></span>
							</figcaption>
							<blockquote><p><?php echo esc_html( $pf_item['quote'] ); ?></p></blockquote>
						</figure>
					<?php endforeach; ?>
					<?php if ( count( $pf_v['items'] ) > 1 ) : ?>
						<button class="round-btn" type="button" data-rotator-next aria-label="<?php esc_attr_e( 'Next testimonial', 'prajkta' ); ?>"><?php pf_icon( 'chevron-right' ); ?></button>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
