<?php
/**
 * Template Name: Thank You (donation)
 *
 * Receipt values are filled from the donate form's URL parameters by main.js.
 *
 * @package prajkta
 */

get_header();
$c = pf_content( 'thank-you' );
$r = $c['receipt'];
?>

<section class="thanks">
	<div class="container">
		<span class="thanks__check"><?php pf_icon( 'check' ); ?></span>
		<h1 class="thanks__title"><?php echo pf_t( $c['hero']['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h1>
		<div class="thanks__text"><?php echo pf_p( $c['hero']['text'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></div>
		<div class="btn-row">
			<?php
			pf_btn( $c['hero']['btn1_label'], $c['hero']['btn1_url'], 'btn--orange', 'arrow-right' );
			pf_btn( $c['hero']['btn2_label'], $c['hero']['btn2_url'], 'btn--ghost', 'arrow-right' );
			?>
		</div>
		<ul class="thanks__grid">
			<?php foreach ( $c['hero']['items'] as $item ) : ?>
				<li>
					<span class="icon-box icon-box--pale"><?php pf_icon( $item['icon'] ); ?></span>
					<h2><?php echo esc_html( $item['title'] ); ?></h2>
					<p><?php echo esc_html( $item['text'] ); ?></p>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>

<section class="section receipt-sec" id="receipt">
	<div class="container split split--top">
		<div class="split__text">
			<p class="kicker kicker--blue"><?php echo esc_html( $r['eyebrow'] ); ?> <?php pf_icon( 'sun' ); ?></p>
			<h2 class="h2 h2--lg receipt-sec__title"><?php echo pf_t( $r['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h2>
			<p><?php echo pf_t( $r['text'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
			<ul class="receipt-sec__points">
				<?php foreach ( $r['points'] as $point ) : ?>
					<li><span class="icon-box icon-box--outline"><?php pf_icon( $point['icon'] ); ?></span><div><strong><?php echo esc_html( $point['title'] ); ?></strong><p><?php echo esc_html( $point['text'] ); ?></p></div></li>
				<?php endforeach; ?>
			</ul>
			<div class="btn-row">
				<button class="btn btn--orange" type="button" data-print><?php echo esc_html( $r['btn1_label'] ); ?><?php pf_icon( 'download' ); ?></button>
				<button class="btn btn--blue" type="button" data-share data-share-text="<?php esc_attr_e( 'I just donated to Prajkta Foundation. Join me in creating lasting change!', 'prajkta' ); ?>"><?php echo esc_html( $r['btn2_label'] ); ?><?php pf_icon( 'share' ); ?></button>
			</div>
		</div>

		<article class="receipt" data-receipt>
			<header class="receipt__head">
				<img src="<?php echo esc_url( PF_URI . '/assets/img/logo.png' ); ?>" width="136" height="50" alt="<?php esc_attr_e( 'Prajkta Foundation', 'prajkta' ); ?>">
				<p><?php echo pf_t( $r['tagline'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
			</header>
			<h3 class="receipt__title"><?php esc_html_e( 'Donation Receipt', 'prajkta' ); ?></h3>
			<p class="receipt__thanks"><?php esc_html_e( 'Thank you for your generous contribution.', 'prajkta' ); ?></p>
			<dl class="receipt__rows">
				<div><dt><?php esc_html_e( 'Receipt No.', 'prajkta' ); ?></dt><dd data-field="number"><?php echo esc_html( $r['number'] ); ?></dd></div>
				<div><dt><?php esc_html_e( 'Date', 'prajkta' ); ?></dt><dd data-field="date"><?php echo esc_html( $r['date'] ); ?></dd></div>
				<div><dt><?php esc_html_e( 'Donor Name', 'prajkta' ); ?></dt><dd data-field="name"><?php echo esc_html( $r['name'] ); ?></dd></div>
				<div><dt><?php esc_html_e( 'Email', 'prajkta' ); ?></dt><dd data-field="email"><?php echo esc_html( $r['email'] ); ?></dd></div>
				<div><dt><?php esc_html_e( 'Phone', 'prajkta' ); ?></dt><dd data-field="phone"><?php echo esc_html( $r['phone'] ); ?></dd></div>
			</dl>
			<h4 class="receipt__sub"><?php esc_html_e( 'Donation Details', 'prajkta' ); ?></h4>
			<dl class="receipt__rows">
				<div><dt><?php esc_html_e( 'Purpose / Program', 'prajkta' ); ?></dt><dd data-field="purpose"><?php echo esc_html( $r['purpose'] ); ?></dd></div>
				<div><dt><?php esc_html_e( 'Donation Type', 'prajkta' ); ?></dt><dd><?php echo esc_html( $r['type'] ); ?></dd></div>
				<div><dt><?php esc_html_e( 'Amount', 'prajkta' ); ?></dt><dd>₹ <span data-field="amount"><?php echo esc_html( $r['amount'] ); ?></span></dd></div>
			</dl>
			<p class="receipt__total"><span><?php esc_html_e( 'Total Amount', 'prajkta' ); ?></span><strong>₹ <span data-field="amount"><?php echo esc_html( $r['amount'] ); ?></span></strong></p>
			<footer class="receipt__foot">
				<div>
					<p class="receipt__sign"><?php esc_html_e( 'Thank you!', 'prajkta' ); ?> <?php pf_icon( 'heart' ); ?></p>
					<p><?php esc_html_e( 'With gratitude,', 'prajkta' ); ?><br><?php esc_html_e( 'Team Prajkta Foundation', 'prajkta' ); ?></p>
				</div>
				<svg class="receipt__seal" viewBox="0 0 100 100" aria-hidden="true" focusable="false">
					<defs><path id="pf-seal-path" d="M50 50m-34 0a34 34 0 1 1 68 0a34 34 0 1 1-68 0"/></defs>
					<rect x="2" y="2" width="96" height="96" fill="none" stroke="currentColor" stroke-width="2"/>
					<text font-size="11" letter-spacing="3" fill="currentColor"><textPath href="#pf-seal-path">THANK YOU FOR YOUR SUPPORT •</textPath></text>
					<path d="M50 64 38 52a7 7 0 0 1 12-9 7 7 0 0 1 12 9z" fill="none" stroke="currentColor" stroke-width="2.5"/>
				</svg>
			</footer>
		</article>
	</div>
</section>

<section class="section section--flush-top">
	<div class="container">
		<div class="hope-band">
			<span class="hope-band__thumb" aria-hidden="true"><?php pf_icon( 'receipt' ); ?></span>
			<div>
				<h2><?php echo esc_html( $c['band']['title'] ); ?></h2>
				<p><?php echo esc_html( $c['band']['text'] ); ?></p>
			</div>
			<?php pf_btn( $c['band']['btn_label'], $c['band']['btn_url'], 'btn--outline-blue', 'arrow-right' ); ?>
		</div>
	</div>
</section>

<?php
get_footer();
