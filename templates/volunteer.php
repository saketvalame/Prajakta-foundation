<?php
/**
 * Template Name: Volunteer
 *
 * @package prajkta
 */

get_header();
$c = pf_content( 'volunteer' );
?>

<?php pf_part( 'hero', array( 'hero' => $c['hero'], 'variant' => 'photo', 'bg' => '#29311b' ) ); ?>

<section class="section roles" id="roles">
	<div class="container">
		<h2 class="h2"><?php echo esc_html( $c['roles']['title'] ); ?></h2>
		<p class="sec-lead"><?php echo esc_html( $c['roles']['text'] ); ?></p>
		<div class="card-grid card-grid--3">
			<?php foreach ( $c['roles']['items'] as $item ) : ?>
				<article class="card card--soft card--shadow role<?php echo $item['featured'] ? ' role--featured' : ''; ?>">
					<span class="icon-box icon-box--white"><?php pf_icon( $item['icon'] ); ?></span>
					<h3><?php echo esc_html( $item['title'] ); ?></h3>
					<p><?php echo esc_html( $item['text'] ); ?></p>
					<?php pf_more( $c['roles']['btn_label'], '#join', 'more--caps more--lg role__link' ); ?>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section section--soft journey">
	<div class="container">
		<p class="kicker"><?php echo esc_html( $c['journey']['eyebrow'] ); ?></p>
		<h2 class="h2"><?php echo esc_html( $c['journey']['title'] ); ?></h2>
		<ol class="journey__steps">
			<?php foreach ( $c['journey']['steps'] as $i => $step ) : ?>
				<li>
					<span class="journey__num"><?php echo (int) $i + 1; ?></span>
					<h3><?php echo esc_html( $step['title'] ); ?></h3>
					<p><?php echo esc_html( $step['text'] ); ?></p>
				</li>
			<?php endforeach; ?>
		</ol>
	</div>
</section>

<div class="tear" aria-hidden="true"></div>

<section class="section campaigns">
	<div class="container">
		<header class="sec-head sec-head--row">
			<h2 class="h2"><?php echo esc_html( $c['campaigns']['title'] ); ?></h2>
			<?php pf_more( $c['campaigns']['btn_label'], $c['campaigns']['btn_url'], 'more--caps' ); ?>
		</header>
		<div class="card-grid card-grid--2">
			<?php foreach ( $c['campaigns']['items'] as $item ) : ?>
				<article class="photo-card">
					<img src="<?php echo esc_url( pf_img( $item['image'] ) ); ?>" alt="" loading="lazy">
					<div class="photo-card__body">
						<p class="photo-card__tags"><span class="tag tag--orange"><?php echo esc_html( $item['date'] ); ?></span><span class="tag tag--dark"><?php echo esc_html( $item['tag'] ); ?></span></p>
						<h3><?php echo esc_html( $item['title'] ); ?></h3>
						<p><?php echo esc_html( $item['text'] ); ?></p>
						<?php pf_btn( __( 'Sign Up', 'prajkta' ), $item['url'], 'btn--glass btn--sm' ); ?>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section who-can">
	<div class="container split split--center">
		<div class="split__text">
			<p class="kicker"><?php echo esc_html( $c['who']['eyebrow'] ); ?></p>
			<h2 class="h2 h2--lg"><?php echo pf_t( $c['who']['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h2>
			<p><?php echo esc_html( $c['who']['text'] ); ?></p>
			<ul class="checks">
				<?php foreach ( pf_list( $c['who']['points'] ) as $point ) : ?>
					<li><?php pf_icon( 'check' ); ?><?php echo esc_html( $point ); ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<figure class="who-can__media">
			<img src="<?php echo esc_url( pf_img( $c['who']['image'] ) ); ?>" alt="" loading="lazy">
			<figcaption><?php pf_icon( 'heart' ); ?><?php echo esc_html( $c['who']['badge'] ); ?></figcaption>
		</figure>
	</div>
</section>

<div class="tear" aria-hidden="true"></div>

<?php pf_part( 'change-blue', array( 'data' => $c['change'] ) ); ?>
<?php pf_part( 'faq' ); ?>
<?php pf_part( 'voices' ); ?>

<section class="section section--warm join" id="join">
	<div class="container">
		<div class="join__card">
			<form class="join__form" data-demo-form>
				<h2 class="h2"><?php echo esc_html( $c['join']['title'] ); ?></h2>
				<p><?php echo esc_html( $c['join']['text'] ); ?></p>
				<div class="form-grid form-grid--outline">
					<p><label for="vol-name"><?php esc_html_e( 'Full Name', 'prajkta' ); ?></label><input id="vol-name" name="name" placeholder="John Doe" required></p>
					<p><label for="vol-email"><?php esc_html_e( 'Email Address', 'prajkta' ); ?></label><input id="vol-email" type="email" name="email" placeholder="john@example.com" required></p>
					<p class="is-wide"><label for="vol-interest"><?php esc_html_e( 'Interest Area', 'prajkta' ); ?></label>
						<select id="vol-interest" name="interest">
							<?php foreach ( pf_list( $c['join']['interests'] ) as $opt ) : ?>
								<option><?php echo esc_html( $opt ); ?></option>
							<?php endforeach; ?>
						</select>
					</p>
					<p class="is-wide"><label for="vol-why"><?php esc_html_e( 'Why do you want to join us?', 'prajkta' ); ?></label><textarea id="vol-why" name="why" rows="4" placeholder="<?php esc_attr_e( 'Share your motivation...', 'prajkta' ); ?>"></textarea></p>
				</div>
				<button class="btn btn--orange btn--block" type="submit"><?php echo esc_html( $c['join']['btn_label'] ); ?></button>
			</form>
			<figure class="join__media">
				<img src="<?php echo esc_url( pf_img( $c['join']['image'] ) ); ?>" alt="" loading="lazy">
				<blockquote><?php pf_icon( 'heart' ); ?><p><?php echo esc_html( $c['join']['quote'] ); ?></p></blockquote>
			</figure>
		</div>
	</div>
</section>

<?php pf_part( 'cta' ); ?>

<?php
get_footer();
