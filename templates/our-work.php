<?php
/**
 * Template Name: Our Work
 *
 * @package prajkta
 */

get_header();
$c = pf_content( 'our-work' );
?>

<?php pf_part( 'hero', array( 'hero' => $c['hero'], 'variant' => 'white' ) ); ?>

<section class="section section--soft pillars">
	<div class="container">
		<h2 class="h2"><?php echo esc_html( $c['pillars']['title'] ); ?></h2>
		<p class="sec-lead"><?php echo esc_html( $c['pillars']['text'] ); ?></p>
		<div class="card-grid card-grid--4">
			<?php foreach ( $c['pillars']['items'] as $item ) : ?>
				<article class="pillar">
					<span class="icon-box icon-box--square"><?php pf_icon( $item['icon'] ); ?></span>
					<h3><?php echo esc_html( $item['title'] ); ?></h3>
					<p><?php echo esc_html( $item['text'] ); ?></p>
					<strong class="pillar__stat"><?php echo esc_html( $item['stat'] ); ?></strong>
					<span class="bar"><span style="width:<?php echo (int) $item['progress']; ?>%"></span></span>
					<a class="pillar__link" href="<?php echo esc_url( pf_link( $item['url'] ) ); ?>"><?php esc_html_e( 'Explore Programme', 'prajkta' ); ?><?php pf_icon( 'arrow-right' ); ?></a>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section focus">
	<div class="container">
		<h2 class="h2 h2--caps"><?php echo esc_html( $c['focus']['title'] ); ?></h2>
		<p class="sec-lead"><?php echo esc_html( $c['focus']['text'] ); ?></p>
		<div class="focus__grid">
			<?php foreach ( $c['focus']['items'] as $i => $item ) : ?>
				<article class="focus__item<?php echo $i < 2 ? ' focus__item--top' : ''; ?>">
					<img src="<?php echo esc_url( pf_img( $item['image'] ) ); ?>" alt="" loading="lazy">
					<div class="focus__card">
						<span class="tag tag--blue"><?php echo esc_html( $item['tag'] ); ?></span>
						<h3><?php echo esc_html( $item['title'] ); ?></h3>
						<p><?php echo esc_html( $item['text'] ); ?></p>
						<?php pf_more( __( 'Learn More', 'prajkta' ), $item['url'] ); ?>
					</div>
				</article>
			<?php endforeach; ?>
			<img class="focus__tree" src="<?php echo esc_url( pf_img( $c['focus']['center_image'] ) ); ?>" alt="" loading="lazy">
		</div>
	</div>
</section>

<div class="tear" aria-hidden="true"></div>

<section class="section where">
	<div class="container split">
		<div class="split__text">
			<h2 class="h2"><?php echo esc_html( $c['where']['title'] ); ?></h2>
			<p><?php echo esc_html( $c['where']['text'] ); ?></p>
			<ul class="regions">
				<?php foreach ( $c['where']['regions'] as $region ) : ?>
					<li><span><?php echo esc_html( $region['name'] ); ?></span><strong><?php echo esc_html( $region['count'] ); ?></strong></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<img class="where__img" src="<?php echo esc_url( pf_img( $c['where']['image'] ) ); ?>" alt="" loading="lazy">
	</div>
</section>

<section class="section section--flush-top change-stories">
	<div class="container">
		<h2 class="h2 rule-below"><?php echo esc_html( $c['change']['title'] ); ?></h2>
		<div class="card-grid card-grid--2">
			<?php foreach ( $c['change']['items'] as $item ) : ?>
				<article class="quote-card">
					<img src="<?php echo esc_url( pf_img( $item['image'] ) ); ?>" alt="" loading="lazy">
					<div class="quote-card__body">
						<p class="kicker kicker--line"><?php echo esc_html( $item['tag'] ); ?></p>
						<h3><?php echo esc_html( $item['quote'] ); ?></h3>
						<p><?php echo esc_html( $item['text'] ); ?></p>
						<p class="quote-card__author">— <?php echo esc_html( $item['author'] ); ?></p>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<div class="tear" aria-hidden="true"></div>

<?php pf_part( 'faq' ); ?>
<?php pf_part( 'voices' ); ?>
<?php pf_part( 'cta' ); ?>

<?php
get_footer();
