<?php
/**
 * Template Name: CSR
 *
 * @package prajkta
 */

get_header();
$c = pf_content( 'csr' );
$d = $c['dashboard'];
?>

<?php pf_part( 'hero', array( 'hero' => $c['hero'], 'variant' => 'photo', 'bg' => '#404627' ) ); ?>

<section class="section volunteering">
	<div class="container split split--center">
		<div class="split__text">
			<p class="kicker"><?php echo esc_html( $c['volunteering']['eyebrow'] ); ?></p>
			<h2 class="h2"><?php echo esc_html( $c['volunteering']['title'] ); ?></h2>
			<p><?php echo esc_html( $c['volunteering']['text'] ); ?></p>
			<?php pf_more( $c['volunteering']['btn_label'], $c['volunteering']['btn_url'], 'more--caps more--lg' ); ?>
		</div>
		<img src="<?php echo esc_url( pf_img( $c['volunteering']['image'] ) ); ?>" alt="" loading="lazy">
	</div>
</section>

<section class="section section--paper torn-edges csr-focus">
	<div class="container">
		<h2 class="h2 h2--lg"><?php echo esc_html( $c['focus']['title'] ); ?></h2>
		<p class="sec-lead"><?php echo esc_html( $c['focus']['text'] ); ?></p>
		<div class="card-grid card-grid--3 csr-focus__grid">
			<?php foreach ( $c['focus']['items'] as $item ) : ?>
				<article class="card card--white card--shadow csr-focus__card csr-focus__card--<?php echo esc_attr( $item['tone'] ); ?>">
					<span class="icon-box icon-box--plain"><?php pf_icon( $item['icon'] ); ?></span>
					<h3><?php echo esc_html( $item['title'] ); ?></h3>
					<p><?php echo esc_html( $item['text'] ); ?></p>
					<ul class="ticks">
						<?php foreach ( pf_list( $item['tags'] ) as $tag ) : ?>
							<li><?php pf_icon( 'check-circle' ); ?><?php echo esc_html( $tag ); ?></li>
						<?php endforeach; ?>
					</ul>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section blue-band dashboard">
	<div class="container">
		<p class="kicker kicker--peach"><?php echo esc_html( $d['eyebrow'] ); ?></p>
		<h2 class="h2"><?php echo esc_html( $d['title'] ); ?></h2>
		<p class="sec-lead"><?php echo esc_html( $d['text'] ); ?></p>
		<div class="dashboard__panel">
			<div class="dashboard__stats">
				<?php foreach ( $d['stats'] as $stat ) : ?>
					<div><span><?php echo esc_html( $stat['label'] ); ?></span><strong><?php echo esc_html( $stat['value'] ); ?></strong></div>
				<?php endforeach; ?>
			</div>
			<div class="dashboard__alloc">
				<h3><?php echo esc_html( $d['alloc_title'] ); ?></h3>
				<?php foreach ( $d['allocation'] as $row ) : ?>
					<div class="dashboard__row">
						<span><?php echo esc_html( $row['label'] ); ?></span><span><?php echo (int) $row['percent']; ?>%</span>
						<span class="bar bar--dark bar--<?php echo esc_attr( $row['color'] ); ?>"><span style="width:<?php echo (int) $row['percent']; ?>%"></span></span>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="dashboard__ring">
				<div class="ring ring--outline" style="--p:<?php echo (int) $d['ring_percent']; ?>">
					<strong><?php echo (int) $d['ring_percent']; ?>%</strong><span><?php echo esc_html( $d['ring_label'] ); ?></span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section model">
	<div class="container">
		<h2 class="h2 text-center"><?php echo esc_html( $c['model']['title'] ); ?></h2>
		<?php pf_part( 'steps', array( 'steps' => $c['model']['steps'], 'variant' => 'solid' ) ); ?>
	</div>
</section>

<section class="section section--flush-top success">
	<div class="container">
		<header class="sec-head sec-head--row">
			<h2 class="h2"><?php echo esc_html( $c['success']['title'] ); ?></h2>
			<?php pf_more( $c['success']['btn_label'], $c['success']['btn_url'], 'more--caps more--lg' ); ?>
		</header>
		<div class="card-grid card-grid--2">
			<?php foreach ( $c['success']['items'] as $item ) : ?>
				<article class="glass-card">
					<img src="<?php echo esc_url( pf_img( $item['image'] ) ); ?>" alt="" loading="lazy">
					<div class="glass-card__panel">
						<h3><?php echo esc_html( $item['title'] ); ?></h3>
						<p><?php echo esc_html( $item['text'] ); ?></p>
						<?php pf_btn( $item['tag'], $item['url'], 'btn--blue' ); ?>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section section--soft partner" id="partner">
	<div class="container split split--top">
		<div class="split__text">
			<h2 class="h2"><?php echo pf_t( $c['partner']['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h2>
			<p><?php echo esc_html( $c['partner']['text'] ); ?></p>
			<ul class="contact-lines">
				<li><span class="icon-box icon-box--white icon-box--orange-ink"><?php pf_icon( 'mail' ); ?></span><div><small><?php echo esc_html( $c['partner']['email_label'] ); ?></small><a href="mailto:<?php echo esc_attr( antispambot( $c['partner']['email'] ) ); ?>"><?php echo esc_html( antispambot( $c['partner']['email'] ) ); ?></a></div></li>
				<li><span class="icon-box icon-box--white icon-box--orange-ink"><?php pf_icon( 'phone' ); ?></span><div><small><?php echo esc_html( $c['partner']['phone_label'] ); ?></small><span><?php echo esc_html( $c['partner']['phone'] ); ?></span></div></li>
			</ul>
		</div>
		<form class="form-card" data-demo-form>
			<div class="form-grid">
				<p><label for="csr-name"><?php esc_html_e( 'Full Name', 'prajkta' ); ?></label><input id="csr-name" name="name" required></p>
				<p><label for="csr-company"><?php esc_html_e( 'Company Name', 'prajkta' ); ?></label><input id="csr-company" name="company"></p>
				<p class="is-wide"><label for="csr-email"><?php esc_html_e( 'Corporate Email', 'prajkta' ); ?></label><input id="csr-email" type="email" name="email" required></p>
				<p class="is-wide"><label for="csr-interest"><?php esc_html_e( 'Primary Interest', 'prajkta' ); ?></label>
					<select id="csr-interest" name="interest">
						<?php foreach ( pf_list( $c['partner']['interests'] ) as $opt ) : ?>
							<option><?php echo esc_html( $opt ); ?></option>
						<?php endforeach; ?>
					</select>
				</p>
				<p class="is-wide"><label for="csr-scope"><?php esc_html_e( 'Project Scope / Budget Range', 'prajkta' ); ?></label><textarea id="csr-scope" name="scope" rows="5"></textarea></p>
			</div>
			<p class="text-center"><button class="btn btn--orange" type="submit"><?php echo esc_html( $c['partner']['btn_label'] ); ?></button></p>
		</form>
	</div>
</section>

<?php
get_footer();
