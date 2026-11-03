<?php
/**
 * Template Name: Healthcare
 *
 * @package prajkta
 */

get_header();
$c = pf_content( 'healthcare' );
?>

<?php pf_part( 'hero', array( 'hero' => $c['hero'], 'variant' => 'soft' ) ); ?>

<section class="section section--gray initiatives" id="initiatives">
	<div class="container">
		<h2 class="h2"><?php echo esc_html( $c['initiatives']['title'] ); ?></h2>
		<div class="card-grid card-grid--3">
			<?php foreach ( $c['initiatives']['items'] as $item ) : ?>
				<article class="card card--white">
					<span class="icon-box"><?php pf_icon( $item['icon'] ); ?></span>
					<h3><?php echo esc_html( $item['title'] ); ?></h3>
					<p class="clamp-3"><?php echo esc_html( $item['text'] ); ?></p>
					<?php pf_more( __( 'Learn More', 'prajkta' ), $item['url'] ); ?>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<div class="tear" aria-hidden="true"></div>

<section class="section section--flush-bottom faces">
	<div class="container sec-head sec-head--row">
		<div>
			<h2 class="h2"><?php echo esc_html( $c['faces']['title'] ); ?></h2>
			<p><?php echo esc_html( $c['faces']['text'] ); ?></p>
		</div>
		<?php pf_more( $c['faces']['btn_label'], $c['faces']['btn_url'], 'more--caps' ); ?>
	</div>
	<div class="slider" data-rotator data-rotator-auto="6000">
		<?php foreach ( $c['faces']['slides'] as $i => $slide ) : ?>
			<img class="slider__slide" data-rotator-item src="<?php echo esc_url( pf_img( $slide['image'] ) ); ?>" alt="<?php echo esc_attr( $slide['label'] ); ?>" loading="lazy"<?php echo $i ? ' hidden' : ''; ?>>
		<?php endforeach; ?>
		<div class="slider__nav">
			<?php foreach ( $c['faces']['slides'] as $i => $slide ) : ?>
				<button type="button" class="slider__dot" data-rotator-dot="<?php echo (int) $i; ?>"<?php echo $i ? '' : ' aria-current="true"'; ?>>
					<span class="slider__label"><?php echo esc_html( $slide['label'] ); ?></span>
				</button>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section section--soft deliver">
	<div class="container">
		<h2 class="h2 text-center"><?php echo esc_html( $c['deliver']['title'] ); ?></h2>
		<?php pf_part( 'steps', array( 'steps' => $c['deliver']['steps'], 'variant' => 'square' ) ); ?>
	</div>
</section>

<div class="tear" aria-hidden="true"></div>

<?php pf_part( 'field-moments', array( 'data' => $c['partners'] ) ); ?>
<?php pf_part( 'voices' ); ?>
<?php pf_part( 'faq' ); ?>
<?php pf_part( 'cta' ); ?>

<?php
get_footer();
