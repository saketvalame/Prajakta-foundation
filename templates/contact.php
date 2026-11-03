<?php
/**
 * Template Name: Contact
 *
 * @package prajkta
 */

get_header();
$c = pf_content( 'contact' );
$h = $c['hero'];
?>

<section class="contact-hero">
	<div class="container contact-hero__inner">
		<div>
			<p class="contact-hero__eyebrow"><?php echo esc_html( $h['eyebrow'] ); ?></p>
			<h1 class="hero__title"><?php echo pf_t( $h['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h1>
			<p class="contact-hero__text"><?php echo esc_html( $h['text'] ); ?></p>
		</div>
		<div class="contact-hero__side">
			<h2><?php echo esc_html( $h['talk_title'] ); ?></h2>
			<p class="contact-hero__talk">
				<a href="tel:<?php echo esc_attr( preg_replace( '/[^\d+]/', '', $h['phone'] ) ); ?>"><?php echo esc_html( $h['phone'] ); ?></a>
				<a href="mailto:<?php echo esc_attr( antispambot( $h['email'] ) ); ?>"><?php echo esc_html( antispambot( $h['email'] ) ); ?></a>
			</p>
			<h2><?php echo esc_html( $h['office_title'] ); ?></h2>
			<p><?php echo pf_t( $h['address'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
			<ul class="socials socials--bare">
				<li><a href="<?php echo esc_url( pf_link( $h['facebook_url'] ) ); ?>" aria-label="Facebook"><?php pf_icon( 'facebook' ); ?></a></li>
				<li><a href="<?php echo esc_url( pf_link( $h['twitter_url'] ) ); ?>" aria-label="X / Twitter"><?php pf_icon( 'twitter' ); ?></a></li>
				<li><a href="<?php echo esc_url( pf_link( $h['linkedin_url'] ) ); ?>" aria-label="LinkedIn"><?php pf_icon( 'linkedin' ); ?></a></li>
			</ul>
		</div>
	</div>
</section>

<div class="tear" aria-hidden="true"></div>

<section class="section section--soft contact-cards">
	<div class="container card-grid card-grid--3">
		<?php foreach ( $c['cards']['items'] as $item ) : ?>
			<article class="card card--white card--shadow">
				<span class="icon-box icon-box--square icon-box--<?php echo esc_attr( $item['tone'] ); ?>"><?php pf_icon( $item['icon'] ); ?></span>
				<h2 class="h3"><?php echo esc_html( $item['title'] ); ?></h2>
				<p><?php echo esc_html( $item['line_1'] ); ?><br><?php echo esc_html( $item['line_2'] ); ?></p>
			</article>
		<?php endforeach; ?>
	</div>
</section>

<section class="section contact-form" id="form">
	<div class="container split split--top">
		<div class="split__text">
			<h2 class="h2"><?php echo pf_t( $c['form']['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h2>
			<p><?php echo esc_html( $c['form']['text'] ); ?></p>
			<p class="note-box"><?php pf_icon( 'timer' ); ?><?php echo esc_html( $c['form']['note'] ); ?></p>
		</div>
		<form data-demo-form>
			<div class="form-grid">
				<p><label for="ct-name"><?php esc_html_e( 'Full Name', 'prajkta' ); ?></label><input id="ct-name" name="name" placeholder="Jane Doe" required></p>
				<p><label for="ct-email"><?php esc_html_e( 'Email Address', 'prajkta' ); ?></label><input id="ct-email" type="email" name="email" placeholder="jane@example.com" required></p>
				<p><label for="ct-phone"><?php esc_html_e( 'Phone Number', 'prajkta' ); ?></label><input id="ct-phone" type="tel" name="phone" placeholder="+91 000 000 0000"></p>
				<p><label for="ct-org"><?php esc_html_e( 'Organisation (Optional)', 'prajkta' ); ?></label><input id="ct-org" name="org" placeholder="<?php esc_attr_e( 'Company Name', 'prajkta' ); ?>"></p>
				<p class="is-wide"><label for="ct-type"><?php esc_html_e( 'Inquiry Type', 'prajkta' ); ?></label>
					<select id="ct-type" name="type">
						<?php foreach ( pf_list( $c['form']['types'] ) as $opt ) : ?>
							<option><?php echo esc_html( $opt ); ?></option>
						<?php endforeach; ?>
					</select>
				</p>
				<p class="is-wide"><label for="ct-subject"><?php esc_html_e( 'Subject', 'prajkta' ); ?></label><input id="ct-subject" name="subject" placeholder="<?php esc_attr_e( 'How can we help you?', 'prajkta' ); ?>"></p>
				<p class="is-wide"><label for="ct-message"><?php esc_html_e( 'Message', 'prajkta' ); ?></label><textarea id="ct-message" name="message" rows="6" placeholder="<?php esc_attr_e( 'Your message here...', 'prajkta' ); ?>" required></textarea></p>
			</div>
			<button class="btn btn--orange btn--block btn--lg" type="submit"><?php echo esc_html( $c['form']['btn_label'] ); ?><?php pf_icon( 'send' ); ?></button>
		</form>
	</div>
</section>

<div class="tear" aria-hidden="true"></div>

<section class="map">
	<iframe title="<?php echo esc_attr( $c['map']['title'] ); ?>" src="https://maps.google.com/maps?q=<?php echo rawurlencode( $c['map']['query'] ); ?>&amp;z=12&amp;output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<div class="map__card">
		<h2 class="h3"><?php echo esc_html( $c['map']['title'] ); ?></h2>
		<p><?php echo pf_t( $c['map']['address'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></p>
		<a class="btn btn--orange btn--block" href="https://www.google.com/maps/dir/?api=1&amp;destination=<?php echo rawurlencode( $c['map']['query'] ); ?>" target="_blank" rel="noopener"><?php echo esc_html( $c['map']['btn_label'] ); ?></a>
	</div>
</section>

<section class="section engage">
	<div class="container">
		<h2 class="h2 h2--lg text-center"><?php echo esc_html( $c['engage']['title'] ); ?></h2>
		<div class="card-grid card-grid--4">
			<?php foreach ( $c['engage']['items'] as $item ) : ?>
				<article class="engage__card">
					<?php pf_icon( $item['icon'] ); ?>
					<h3><?php echo esc_html( $item['title'] ); ?></h3>
					<p><?php echo esc_html( $item['text'] ); ?></p>
					<a href="<?php echo esc_url( pf_link( $item['url'] ) ); ?>"><?php echo esc_html( $item['link_label'] ); ?></a>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php pf_part( 'faq' ); ?>

<section class="section follow">
	<div class="container split split--center">
		<div class="split__text">
			<h2 class="h2 h2--lg"><?php echo esc_html( $c['follow']['title'] ); ?></h2>
			<p class="muted"><?php echo esc_html( $c['follow']['text'] ); ?></p>
			<?php $pf_footer = pf_global( 'footer' ); ?>
			<ul class="socials socials--orange">
				<li><a href="<?php echo esc_url( pf_link( $pf_footer['linkedin_url'] ) ); ?>" aria-label="LinkedIn"><?php pf_icon( 'linkedin' ); ?></a></li>
				<li><a href="<?php echo esc_url( pf_link( $pf_footer['instagram_url'] ) ); ?>" aria-label="Instagram"><?php pf_icon( 'instagram' ); ?></a></li>
				<li><a href="<?php echo esc_url( pf_link( $h['facebook_url'] ) ); ?>" aria-label="Facebook"><?php pf_icon( 'facebook' ); ?></a></li>
				<li><a href="<?php echo esc_url( pf_link( $h['twitter_url'] ) ); ?>" aria-label="X / Twitter"><?php pf_icon( 'twitter' ); ?></a></li>
			</ul>
		</div>
		<form class="stay" data-demo-form>
			<h2 class="h3"><?php echo esc_html( $c['follow']['newsletter_title'] ); ?></h2>
			<p><?php echo esc_html( $c['follow']['newsletter_text'] ); ?></p>
			<label class="screen-reader-text" for="pf-stay-email"><?php esc_html_e( 'Email address', 'prajkta' ); ?></label>
			<input id="pf-stay-email" type="email" name="email" placeholder="<?php esc_attr_e( 'Enter your email address', 'prajkta' ); ?>" required>
			<button class="btn btn--orange btn--block" type="submit"><?php echo esc_html( $c['follow']['btn_label'] ); ?></button>
			<p class="fine-print"><?php echo esc_html( $c['follow']['note'] ); ?></p>
		</form>
	</div>
</section>

<?php pf_part( 'cta', array( 'title' => $c['cta']['title'], 'text' => $c['cta']['text'], 'image' => 'cta-bg.jpg' ) ); ?>

<?php
get_footer();
