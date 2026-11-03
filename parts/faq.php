<?php
/**
 * Shared FAQ accordion with the "Have questions?" card.
 *
 * @package prajkta
 */

$pf_faq = pf_global( 'faq' );
?>
<section class="section faq">
	<div class="container">
		<h2 class="faq__title"><?php echo esc_html( $pf_faq['title'] ); ?></h2>
		<div class="faq__grid">
			<div class="faq__list">
				<?php foreach ( $pf_faq['items'] as $pf_item ) : ?>
					<details class="faq__item">
						<summary><?php echo esc_html( $pf_item['question'] ); ?><?php pf_icon( 'plus', 'faq__icon' ); ?></summary>
						<div class="faq__answer"><?php echo pf_p( $pf_item['answer'] ); // phpcs:ignore WordPress.Security.EscapeOutput -- kses in pf_p. ?></div>
					</details>
				<?php endforeach; ?>
			</div>
			<aside class="faq__card">
				<span class="chat-badge" aria-hidden="true"></span>
				<h3><?php echo pf_t( $pf_faq['card_title'] ); // phpcs:ignore WordPress.Security.EscapeOutput -- kses in pf_t. ?></h3>
				<p><?php echo esc_html( $pf_faq['card_text'] ); ?></p>
				<?php pf_btn( $pf_faq['card_btn_label'], $pf_faq['card_btn_url'] ); ?>
			</aside>
		</div>
	</div>
</section>
