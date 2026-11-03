<?php
/**
 * Blue "How Change Happens" band with connected icon boxes.
 * Args: data (title, text, items[icon,title,text], optional banner_*).
 *
 * @package prajkta
 */

$pf_d = $args['data'];
?>
<section class="section blue-band change">
	<div class="container">
		<header class="sec-head sec-head--center">
			<h2 class="h2"><?php echo esc_html( $pf_d['title'] ); ?></h2>
			<p><?php echo esc_html( $pf_d['text'] ); ?></p>
		</header>
		<ol class="change__list">
			<?php foreach ( $pf_d['items'] as $pf_i => $pf_item ) : ?>
				<li class="change__item">
					<span class="change__icon"><?php pf_icon( $pf_item['icon'] ); ?></span>
					<h3><?php echo esc_html( ( $pf_i + 1 ) . '. ' . $pf_item['title'] ); ?></h3>
					<p><?php echo esc_html( $pf_item['text'] ); ?></p>
				</li>
			<?php endforeach; ?>
		</ol>
		<?php if ( ! empty( $pf_d['banner_title'] ) ) : ?>
			<div class="change__banner">
				<span class="icon-box icon-box--white"><?php pf_icon( 'heart' ); ?></span>
				<div>
					<h3><?php echo esc_html( $pf_d['banner_title'] ); ?></h3>
					<p><?php echo esc_html( $pf_d['banner_text'] ); ?></p>
				</div>
				<?php pf_btn( $pf_d['banner_btn'], $pf_d['banner_url'], 'btn--orange', 'arrow-right' ); ?>
			</div>
		<?php endif; ?>
	</div>
</section>
