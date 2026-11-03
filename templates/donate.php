<?php
/**
 * Template Name: Donate
 *
 * The form is visual only: on submit it opens the Thank You page with the
 * entered details. Connect a payment gateway before going live.
 *
 * @package prajkta
 */

get_header();
$c       = pf_content( 'donate' );
$f       = $c['form'];
$amounts = pf_list( $f['amounts'] );
?>

<?php pf_part( 'hero', array( 'hero' => $c['hero'], 'variant' => 'photo', 'bg' => '#655936' ) ); ?>

<section class="section section--paper torn-edges radical">
	<div class="container">
		<header class="sec-head sec-head--row sec-head--end">
			<div>
				<h2 class="h2"><?php echo esc_html( $c['transparency']['title'] ); ?></h2>
				<p><?php echo esc_html( $c['transparency']['text'] ); ?></p>
			</div>
			<?php pf_btn( $c['transparency']['btn_label'], $c['transparency']['btn_url'], 'btn--outline', 'arrow-right' ); ?>
		</header>
		<div class="card-grid card-grid--3">
			<?php foreach ( $c['transparency']['items'] as $item ) : ?>
				<article class="card card--tint">
					<span class="icon-box icon-box--<?php echo esc_attr( $item['tone'] ); ?>"><?php pf_icon( $item['icon'] ); ?></span>
					<h3><?php echo esc_html( $item['title'] ); ?></h3>
					<p><?php echo esc_html( $item['text'] ); ?></p>
					<?php if ( $item['progress'] ) : ?>
						<span class="bar bar--white bar--orange"><span style="width:<?php echo (int) $item['progress']; ?>%"></span></span>
					<?php endif; ?>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php pf_part( 'voices' ); ?>

<div class="tear tear--dark" aria-hidden="true"></div>

<section class="section give" id="give">
	<div class="container">
		<div class="give__bar">
			<img src="<?php echo esc_url( PF_URI . '/assets/img/logo.png' ); ?>" width="136" height="50" alt="<?php esc_attr_e( 'Prajkta Foundation', 'prajkta' ); ?>" loading="lazy">
			<span class="give__secure"><?php pf_icon( 'shield-check' ); ?><?php esc_html_e( 'Secure Donation', 'prajkta' ); ?></span>
		</div>
		<div class="give__grid">
			<div class="give__intro">
				<h2 class="give__title"><?php echo esc_html( $f['title'] ); ?></h2>
				<p class="give__lead"><?php echo esc_html( $f['text'] ); ?></p>
				<p class="give__why"><?php echo esc_html( $f['why_title'] ); ?></p>
				<ul class="give__reasons">
					<?php foreach ( $f['why'] as $item ) : ?>
						<li><?php pf_icon( $item['icon'] ); ?><div><strong><?php echo esc_html( $item['title'] ); ?></strong><span><?php echo esc_html( $item['text'] ); ?></span></div></li>
					<?php endforeach; ?>
				</ul>
				<div class="give__tax">
					<?php pf_icon( 'receipt' ); ?>
					<h3><?php echo esc_html( $f['tax_title'] ); ?></h3>
					<p><?php echo esc_html( $f['tax_text'] ); ?></p>
				</div>
			</div>

			<form class="give__form" data-donate-form>
				<fieldset>
					<legend><span class="give__step">1</span><?php esc_html_e( 'Select Amount', 'prajkta' ); ?></legend>
					<div class="amounts">
						<?php foreach ( $amounts as $amount ) : ?>
							<?php $is_rec = trim( $f['recommended'] ) === $amount; ?>
							<label class="amounts__opt<?php echo $is_rec ? ' is-recommended' : ''; ?>">
								<input type="radio" name="preset" value="<?php echo esc_attr( $amount ); ?>"<?php checked( $is_rec ); ?>>
								<span>₹<?php echo esc_html( $amount ); ?></span>
								<?php if ( $is_rec ) : ?><small><?php esc_html_e( 'Recommended', 'prajkta' ); ?></small><?php endif; ?>
							</label>
						<?php endforeach; ?>
					</div>
					<label class="give__label" for="give-custom"><?php esc_html_e( 'Or Enter Custom Amount (₹)', 'prajkta' ); ?></label>
					<div class="input-prefix"><span>₹</span><input id="give-custom" name="custom" type="number" min="1" step="1" placeholder="e.g. 1500"></div>
				</fieldset>

				<fieldset>
					<legend><span class="give__step">2</span><?php esc_html_e( 'Donation Purpose', 'prajkta' ); ?></legend>
					<label class="screen-reader-text" for="give-purpose"><?php esc_html_e( 'Donation Purpose', 'prajkta' ); ?></label>
					<select id="give-purpose" name="purpose">
						<?php foreach ( pf_list( $f['purposes'] ) as $opt ) : ?>
							<option><?php echo esc_html( $opt ); ?></option>
						<?php endforeach; ?>
					</select>
				</fieldset>

				<fieldset>
					<legend><span class="give__step">3</span><?php esc_html_e( 'Your Details', 'prajkta' ); ?></legend>
					<div class="form-grid">
						<p><label for="give-name"><?php esc_html_e( 'Full Name *', 'prajkta' ); ?></label><input id="give-name" name="name" placeholder="Jane Doe" required></p>
						<p><label for="give-email"><?php esc_html_e( 'Email Address *', 'prajkta' ); ?></label><input id="give-email" name="email" type="email" placeholder="jane@example.com" required></p>
						<p><label for="give-phone"><?php esc_html_e( 'Phone Number', 'prajkta' ); ?></label><input id="give-phone" name="phone" type="tel" placeholder="+91 98765 43210"></p>
						<p><label for="give-pan"><?php esc_html_e( 'PAN Number', 'prajkta' ); ?> <small><?php esc_html_e( 'For Tax Benefit', 'prajkta' ); ?></small></label><input id="give-pan" name="pan" placeholder="ABCDE1234F" maxlength="10"></p>
					</div>
				</fieldset>

				<button class="btn btn--orange btn--lg" type="submit"><?php pf_icon( 'heart' ); ?><?php echo esc_html( $f['btn_label'] ); ?></button>
				<p class="give__methods"><span><?php esc_html_e( 'Accepted Payment Methods', 'prajkta' ); ?></span><?php pf_icon( 'bank' ); ?><?php pf_icon( 'card' ); ?><?php pf_icon( 'qr' ); ?></p>
			</form>
		</div>
	</div>
</section>

<?php pf_part( 'faq' ); ?>
<?php pf_part( 'closing', array( 'data' => $c['closing'] ) ); ?>

<?php
get_footer();
