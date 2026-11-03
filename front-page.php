<?php
/**
 * Home page.
 *
 * @package prajkta
 */

get_header();
$c = pf_content( 'home' );
?>

<?php pf_part( 'hero', array( 'hero' => $c['hero'], 'variant' => 'paper', 'icons' => array( 'arrow-right', '' ) ) ); ?>

<section class="section who">
	<div class="container split split--media-left">
		<img class="who__img" src="<?php echo esc_url( pf_img( $c['who']['image'] ) ); ?>" alt="" loading="lazy">
		<div class="split__text">
			<p class="eyebrow"><?php echo esc_html( $c['who']['eyebrow'] ); ?></p>
			<h2 class="h2"><?php echo pf_t( $c['who']['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h2>
			<p><?php echo esc_html( $c['who']['text'] ); ?></p>
			<?php pf_btn( $c['who']['btn_label'], $c['who']['btn_url'], 'btn--outline', 'arrow-right' ); ?>
		</div>
	</div>
</section>

<section class="section impact">
	<div class="container">
		<header class="sec-head sec-head--row">
			<div>
				<p class="eyebrow"><?php echo esc_html( $c['impact']['eyebrow'] ); ?></p>
				<h2 class="h2 h2--light"><?php echo esc_html( $c['impact']['title'] ); ?></h2>
			</div>
			<?php pf_btn( $c['impact']['btn_label'], $c['impact']['btn_url'], 'btn--outline', 'arrow-right' ); ?>
		</header>
		<div class="impact-grid">
			<?php foreach ( $c['impact']['stats'] as $i => $stat ) : ?>
				<?php ob_start(); ?>
				<div class="impact-grid__img"><img src="<?php echo esc_url( pf_img( $stat['image'] ) ); ?>" alt="" loading="lazy"></div>
				<?php $img = ob_get_clean(); ?>
				<?php ob_start(); ?>
				<div class="impact-grid__stat">
					<span class="icon-box icon-box--white"><?php pf_icon( $stat['icon'] ); ?></span>
					<strong><?php echo esc_html( $stat['value'] ); ?></strong>
					<span class="impact-grid__label"><?php echo esc_html( $stat['label'] ); ?></span>
					<span class="impact-grid__sub"><?php echo esc_html( $stat['sub'] ); ?></span>
				</div>
				<?php $card = ob_get_clean(); ?>
				<?php echo $i < 2 ? $img . $card : $card . $img; // phpcs:ignore WordPress.Security.EscapeOutput -- escaped above. ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section work">
	<div class="container split">
		<div class="split__text">
			<p class="eyebrow"><?php echo esc_html( $c['work']['eyebrow'] ); ?></p>
			<h2 class="h2"><?php echo pf_t( $c['work']['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h2>
			<p><?php echo esc_html( $c['work']['text'] ); ?></p>
			<?php pf_btn( $c['work']['btn_label'], $c['work']['btn_url'], 'btn--outline', 'arrow-right' ); ?>
		</div>
		<div class="card-grid card-grid--2">
			<?php foreach ( $c['work']['items'] as $item ) : ?>
				<a class="card card--soft" href="<?php echo esc_url( pf_link( $item['url'] ) ); ?>">
					<span class="icon-box"><?php pf_icon( $item['icon'] ); ?></span>
					<h3><?php echo esc_html( $item['title'] ); ?></h3>
					<p><?php echo esc_html( $item['text'] ); ?></p>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<div class="tear" aria-hidden="true"></div>

<section class="section section--flush-bottom home-stories">
	<div class="container">
		<header class="sec-head sec-head--row">
			<div>
				<p class="eyebrow"><?php echo esc_html( $c['stories']['eyebrow'] ); ?></p>
				<h2 class="h2 h2--light"><?php echo esc_html( $c['stories']['title'] ); ?></h2>
			</div>
			<?php pf_btn( $c['stories']['btn_label'], $c['stories']['btn_url'], 'btn--outline', 'arrow-right' ); ?>
		</header>
	</div>
	<div class="story-strip">
		<img src="<?php echo esc_url( pf_img( $c['stories']['image_1'] ) ); ?>" alt="" loading="lazy">
		<img src="<?php echo esc_url( pf_img( $c['stories']['image_2'] ) ); ?>" alt="" loading="lazy">
		<a class="story-strip__last" href="<?php echo esc_url( pf_link( $c['stories']['caption_url'] ) ); ?>">
			<img src="<?php echo esc_url( pf_img( $c['stories']['image_3'] ) ); ?>" alt="" loading="lazy">
			<span class="story-strip__caption">
				<span><?php echo esc_html( $c['stories']['caption_label'] ); ?></span>
				<strong><?php echo esc_html( $c['stories']['caption_title'] ); ?></strong>
				<small><?php echo esc_html( $c['stories']['caption_text'] ); ?></small>
			</span>
		</a>
	</div>
</section>

<div class="tear" aria-hidden="true"></div>

<section class="section involve">
	<div class="container">
		<p class="eyebrow eyebrow--caps"><?php echo esc_html( $c['involve']['eyebrow'] ); ?></p>
		<h2 class="h2 h2--light"><?php echo esc_html( $c['involve']['title'] ); ?></h2>
		<div class="card-grid card-grid--3 involve__grid">
			<?php foreach ( $c['involve']['items'] as $item ) : ?>
				<article class="involve-card involve-card--<?php echo esc_attr( $item['tone'] ); ?>">
					<img src="<?php echo esc_url( pf_img( $item['image'] ) ); ?>" alt="" loading="lazy">
					<div class="involve-card__body">
						<h3><?php echo esc_html( $item['title'] ); ?></h3>
						<p><?php echo esc_html( $item['text'] ); ?></p>
						<?php pf_btn( $item['btn_label'], $item['url'], 'btn--glass' ); ?>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php pf_part( 'cta' ); ?>

<?php
get_footer();
