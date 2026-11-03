<?php
/**
 * Template Name: About
 *
 * @package prajkta
 */

get_header();
$c = pf_content( 'about' );
?>

<?php pf_part( 'hero', array( 'hero' => $c['hero'], 'variant' => 'paper' ) ); ?>

<section class="section narrative">
	<div class="container narrative__inner">
		<img class="torn-photo narrative__img" src="<?php echo esc_url( pf_img( $c['narrative']['image'] ) ); ?>" alt="" loading="lazy">
		<div class="narrative__box">
			<p class="kicker kicker--white"><?php echo esc_html( $c['narrative']['eyebrow'] ); ?></p>
			<h2 class="h2"><?php echo esc_html( $c['narrative']['title'] ); ?></h2>
			<?php echo pf_p( $c['narrative']['text'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
		</div>
	</div>
	<div class="container mv">
		<div class="mv__card mv__card--orange">
			<span class="icon-box icon-box--white"><?php pf_icon( 'flag' ); ?></span>
			<h2><?php echo esc_html( $c['mission']['mission_title'] ); ?></h2>
			<p><?php echo esc_html( $c['mission']['mission_text'] ); ?></p>
		</div>
		<div class="mv__card mv__card--blue">
			<span class="icon-box icon-box--white"><?php pf_icon( 'eye' ); ?></span>
			<h2><?php echo esc_html( $c['mission']['vision_title'] ); ?></h2>
			<p><?php echo esc_html( $c['mission']['vision_text'] ); ?></p>
		</div>
	</div>
</section>

<div class="tear" aria-hidden="true"></div>

<section class="section how">
	<div class="container">
		<h2 class="h2 text-center"><?php echo esc_html( $c['how']['title'] ); ?></h2>
		<ol class="how__steps">
			<?php foreach ( $c['how']['steps'] as $i => $step ) : ?>
				<li>
					<span class="how__num"><small><?php esc_html_e( 'Step', 'prajkta' ); ?></small><?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?></span>
					<span class="how__text"><strong><?php echo esc_html( $step['title'] ); ?></strong><?php echo esc_html( $step['text'] ); ?></span>
					<?php pf_icon( $step['icon'], 'how__icon' ); ?>
				</li>
			<?php endforeach; ?>
		</ol>
		<img class="how__art" src="<?php echo esc_url( pf_img( $c['how']['image'] ) ); ?>" alt="" loading="lazy">
	</div>
</section>

<section class="section values">
	<div class="container">
		<h2 class="h2 text-center"><?php echo esc_html( $c['values']['title'] ); ?></h2>
		<div class="values__grid">
			<?php foreach ( $c['values']['items'] as $item ) : ?>
				<div class="values__item">
					<?php pf_icon( $item['icon'] ); ?>
					<h3><?php echo esc_html( $item['title'] ); ?></h3>
					<p><?php echo esc_html( $item['text'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<div class="tear" aria-hidden="true"></div>

<section class="section milestones">
	<div class="container">
		<h2 class="h2 text-center"><?php echo esc_html( $c['milestones']['title'] ); ?></h2>
		<img class="milestones__art" src="<?php echo esc_url( pf_img( $c['milestones']['image'] ) ); ?>" alt="" loading="lazy">
		<ol class="milestones__list">
			<?php foreach ( $c['milestones']['items'] as $item ) : ?>
				<li>
					<span class="milestones__year"><?php echo esc_html( $item['year'] ); ?></span>
					<strong><?php echo esc_html( $item['title'] ); ?></strong>
					<p><?php echo esc_html( $item['text'] ); ?></p>
				</li>
			<?php endforeach; ?>
		</ol>
	</div>
</section>

<section class="section trustees">
	<div class="container">
		<h2 class="h2"><?php echo esc_html( $c['trustees']['title'] ); ?></h2>
		<p class="sec-lead"><?php echo esc_html( $c['trustees']['text'] ); ?></p>
		<p class="trustees__banner"><?php echo esc_html( $c['trustees']['banner'] ); ?></p>
		<div class="card-grid card-grid--3 trustees__grid">
			<?php foreach ( $c['trustees']['items'] as $item ) : ?>
				<article class="trustee">
					<img class="trustee__photo" src="<?php echo esc_url( pf_img( $item['photo'] ) ); ?>" alt="<?php echo esc_attr( $item['name'] ); ?>" loading="lazy">
					<p class="trustee__role"><?php echo esc_html( $item['role'] ); ?></p>
					<h3><?php echo esc_html( $item['name'] ); ?></h3>
					<p class="trustee__title"><span class="icon-box icon-box--sm"><?php pf_icon( 'leaf' ); ?></span><?php echo esc_html( $item['position'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="belief">
	<div class="belief__text">
		<p class="belief__eyebrow"><?php echo esc_html( $c['change']['eyebrow'] ); ?></p>
		<h2><?php echo esc_html( $c['change']['title'] ); ?></h2>
		<p><?php echo esc_html( $c['change']['text'] ); ?></p>
		<?php pf_btn( $c['change']['btn_label'], $c['change']['btn_url'], 'btn--ghost' ); ?>
	</div>
	<img class="belief__img" src="<?php echo esc_url( pf_img( $c['change']['image'] ) ); ?>" alt="" loading="lazy">
</section>

<?php pf_part( 'voices' ); ?>
<?php pf_part( 'cta' ); ?>

<?php
get_footer();
