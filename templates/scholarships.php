<?php
/**
 * Template Name: Scholarships
 *
 * @package prajkta
 */

get_header();
$c = pf_content( 'scholarships' );
?>

<?php pf_part( 'hero', array( 'hero' => $c['hero'], 'variant' => 'paper' ) ); ?>

<section class="section section--soft foundation-health">
	<div class="container split split--media-left split--top">
		<div>
			<img class="torn-photo" src="<?php echo esc_url( pf_img( $c['foundation']['image'] ) ); ?>" alt="" loading="lazy">
			<p class="lead-note"><span class="icon-box icon-box--sm"><?php pf_icon( 'leaf' ); ?></span><?php echo esc_html( $c['foundation']['text'] ); ?></p>
		</div>
		<div class="split__text">
			<h2 class="h2"><?php echo pf_t( $c['foundation']['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h2>
			<blockquote class="pull-quote">
				<p><?php echo esc_html( $c['foundation']['quote'] ); ?></p>
				<cite>— <?php echo esc_html( $c['foundation']['quote_author'] ); ?></cite>
			</blockquote>
		</div>
	</div>
</section>

<section class="section bridge">
	<div class="container split">
		<div class="split__text">
			<h2 class="h2 h2--lg"><?php echo pf_t( $c['bridge']['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h2>
			<blockquote class="pull-quote pull-quote--italic"><p><?php echo esc_html( $c['bridge']['quote'] ); ?></p></blockquote>
		</div>
		<figure class="bridge__media">
			<img class="torn-photo" src="<?php echo esc_url( pf_img( $c['bridge']['image'] ) ); ?>" alt="" loading="lazy">
			<figcaption><?php echo pf_t( $c['bridge']['caption'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></figcaption>
		</figure>
	</div>
</section>

<div class="tear" aria-hidden="true"></div>

<section class="section pathways">
	<div class="container">
		<header class="sec-head sec-head--row sec-head--end">
			<div>
				<p class="kicker"><?php echo esc_html( $c['pathways']['eyebrow'] ); ?></p>
				<h2 class="h2"><?php echo pf_t( $c['pathways']['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h2>
			</div>
			<p class="sec-head__aside"><?php echo esc_html( $c['pathways']['text'] ); ?></p>
		</header>
		<div class="card-grid card-grid--3">
			<?php foreach ( $c['pathways']['items'] as $item ) : ?>
				<article class="card card--gray">
					<span class="icon-box icon-box--solid"><?php pf_icon( $item['icon'] ); ?></span>
					<h3><?php echo esc_html( $item['title'] ); ?></h3>
					<p><?php echo esc_html( $item['text'] ); ?></p>
					<?php pf_more( __( 'Learn More', 'prajkta' ), $item['url'] ); ?>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<div class="tear" aria-hidden="true"></div>

<section class="resilience">
	<div class="resilience__head">
		<div class="container sec-head sec-head--row">
			<h2 class="h2"><?php echo esc_html( $c['resilience']['title'] ); ?></h2>
			<?php pf_more( $c['resilience']['btn_label'], $c['resilience']['btn_url'] ); ?>
		</div>
	</div>
	<div class="section section--soft">
		<div class="container resilience__list">
			<?php foreach ( $c['resilience']['items'] as $i => $item ) : ?>
				<article class="resilience__item<?php echo $i % 2 ? ' is-flipped' : ''; ?>">
					<img src="<?php echo esc_url( pf_img( $item['image'] ) ); ?>" alt="" loading="lazy">
					<div class="resilience__text">
						<h3><?php echo esc_html( $item['title'] ); ?></h3>
						<?php if ( $item['eyebrow'] ) : ?>
							<p class="resilience__eyebrow"><?php echo esc_html( $item['eyebrow'] ); ?></p>
						<?php endif; ?>
						<?php echo pf_p( $item['text'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
						<span class="tag <?php echo $i % 2 ? 'tag--blue' : 'tag--orange'; ?>"><?php echo esc_html( $item['tag'] ); ?></span>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section road">
	<div class="container">
		<h2 class="h2 h2--lg"><?php echo esc_html( $c['road']['title'] ); ?></h2>
		<p class="sec-lead"><?php echo esc_html( $c['road']['text'] ); ?></p>
		<?php pf_part( 'steps', array( 'steps' => $c['road']['steps'], 'variant' => 'circle' ) ); ?>
	</div>
</section>

<?php pf_part( 'field-moments', array( 'data' => $c['field'] ) ); ?>
<?php pf_part( 'faq' ); ?>
<?php pf_part( 'cta' ); ?>

<?php
get_footer();
