<?php
/**
 * Template Name: Environment
 *
 * @package prajkta
 */

get_header();
$c = pf_content( 'environment' );
?>

<?php pf_part( 'hero', array( 'hero' => $c['hero'], 'variant' => 'white', 'icons' => array( 'arrow-right', '' ) ) ); ?>

<section class="section section--paper torn-edges programs" id="programs">
	<div class="container">
		<h2 class="h2"><?php echo esc_html( $c['programs']['title'] ); ?></h2>
		<p class="sec-lead"><?php echo esc_html( $c['programs']['text'] ); ?></p>
		<div class="card-grid card-grid--4">
			<?php foreach ( $c['programs']['items'] as $item ) : ?>
				<article class="card card--tint">
					<span class="icon-box icon-box--white icon-box--square"><?php pf_icon( $item['icon'] ); ?></span>
					<h3><?php echo pf_t( $item['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h3>
					<p><?php echo esc_html( $item['text'] ); ?></p>
					<span class="bar bar--white"><span style="width:<?php echo (int) $item['progress']; ?>%"></span></span>
					<a class="card__link" href="<?php echo esc_url( pf_link( $item['url'] ) ); ?>"><?php esc_html_e( 'Learn More', 'prajkta' ); ?></a>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section feature">
	<div class="container feature__inner">
		<figure class="feature__media">
			<img class="torn-photo" src="<?php echo esc_url( pf_img( $c['featured']['image'] ) ); ?>" alt="" loading="lazy">
			<figcaption class="label-chip"><?php echo esc_html( $c['featured']['label'] ); ?></figcaption>
		</figure>
		<div class="feature__box">
			<h2 class="h2"><?php echo esc_html( $c['featured']['title'] ); ?></h2>
			<p><?php echo esc_html( $c['featured']['text'] ); ?></p>
			<?php pf_btn( $c['featured']['btn_label'], $c['featured']['btn_url'], 'btn--ghost', 'arrow-right' ); ?>
		</div>
	</div>
</section>

<section class="section rooted">
	<div class="container split split--top">
		<div class="split__text">
			<h2 class="h2"><?php echo esc_html( $c['rooted']['title'] ); ?></h2>
			<p><?php echo esc_html( $c['rooted']['text'] ); ?></p>
		</div>
		<div class="tabs" data-tabs>
			<div class="tabs__list" role="tablist">
				<?php foreach ( $c['rooted']['tabs'] as $i => $tab ) : ?>
					<button type="button" role="tab" id="rooted-tab-<?php echo (int) $i; ?>" aria-controls="rooted-panel-<?php echo (int) $i; ?>" aria-selected="<?php echo $i ? 'false' : 'true'; ?>"<?php echo $i ? ' tabindex="-1"' : ''; ?>><?php echo esc_html( $tab['label'] ); ?></button>
				<?php endforeach; ?>
			</div>
			<?php foreach ( $c['rooted']['tabs'] as $i => $tab ) : ?>
				<div class="tabs__panel" role="tabpanel" id="rooted-panel-<?php echo (int) $i; ?>" aria-labelledby="rooted-tab-<?php echo (int) $i; ?>"<?php echo $i ? ' hidden' : ''; ?>>
					<p><?php echo esc_html( $tab['text'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php pf_part( 'field-moments', array( 'data' => $c['field'] ) ); ?>

<section class="section section--soft restoration">
	<div class="container">
		<h2 class="h2"><?php echo esc_html( $c['restoration']['title'] ); ?></h2>
		<p class="sec-lead"><?php echo esc_html( $c['restoration']['text'] ); ?></p>
		<div class="split split--center">
			<figure class="restoration__media">
				<img src="<?php echo esc_url( pf_img( $c['restoration']['image'] ) ); ?>" alt="" loading="lazy">
				<figcaption class="label-chip label-chip--light"><?php echo esc_html( $c['restoration']['label'] ); ?></figcaption>
			</figure>
			<div class="split__text">
				<p class="kicker"><?php echo esc_html( $c['restoration']['eyebrow'] ); ?></p>
				<h3 class="h3"><?php echo esc_html( $c['restoration']['heading'] ); ?></h3>
				<blockquote class="restoration__quote"><p><?php echo esc_html( $c['restoration']['quote'] ); ?></p><cite>— <?php echo esc_html( $c['restoration']['author'] ); ?></cite></blockquote>
				<?php pf_more( $c['restoration']['btn_label'], $c['restoration']['btn_url'], 'more--caps' ); ?>
			</div>
		</div>
	</div>
</section>

<section class="section section--soft ground">
	<div class="container split split--center">
		<div class="split__text">
			<h2 class="h2 h2--lg"><?php echo esc_html( $c['ground']['title'] ); ?></h2>
			<ul class="ground__list">
				<?php foreach ( $c['ground']['items'] as $item ) : ?>
					<li>
						<span class="icon-box icon-box--<?php echo esc_attr( $item['tone'] ); ?>"><?php pf_icon( 'check-circle' ); ?></span>
						<div><strong><?php echo esc_html( $item['title'] ); ?></strong><p><?php echo esc_html( $item['text'] ); ?></p></div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<figure class="ground__media">
			<img class="torn-photo" src="<?php echo esc_url( pf_img( $c['ground']['image'] ) ); ?>" alt="" loading="lazy">
			<blockquote class="quote-box"><p><?php echo esc_html( $c['ground']['quote'] ); ?></p><cite>— <?php echo esc_html( $c['ground']['author'] ); ?></cite></blockquote>
		</figure>
	</div>
</section>

<?php pf_part( 'closing', array( 'data' => $c['closing'] ) ); ?>

<?php
get_footer();
