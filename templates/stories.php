<?php
/**
 * Template Name: Stories
 *
 * @package prajkta
 */

get_header();
$c = pf_content( 'stories' );
$s = $c['featured'];
$f = $c['focus'];
?>

<?php pf_part( 'hero', array( 'hero' => $c['hero'], 'variant' => 'white', 'icons' => array( '', 'arrow-right' ) ) ); ?>

<section class="section featured-story">
	<div class="container split split--media-left split--center">
		<img class="torn-photo" src="<?php echo esc_url( pf_img( $s['image'] ) ); ?>" alt="" loading="lazy">
		<div class="split__text">
			<h2 class="h2"><?php echo esc_html( $s['title'] ); ?></h2>
			<p class="muted"><?php echo esc_html( $s['text'] ); ?></p>
			<dl class="journey-facts">
				<div><dt><?php pf_icon( 'alert' ); ?><?php esc_html_e( 'Before', 'prajkta' ); ?></dt><dd><?php echo esc_html( $s['before'] ); ?></dd></div>
				<div class="is-active"><dt><?php pf_icon( 'arrow-right' ); ?><?php esc_html_e( 'After', 'prajkta' ); ?></dt><dd><?php echo esc_html( $s['after'] ); ?></dd></div>
				<div><dt><?php pf_icon( 'badge-check' ); ?><?php esc_html_e( 'Key Impact', 'prajkta' ); ?></dt><dd><?php echo esc_html( $s['impact'] ); ?></dd></div>
			</dl>
			<?php pf_more( $s['btn_label'], $s['btn_url'], 'more--caps more--lg' ); ?>
		</div>
	</div>
</section>

<div class="tear" aria-hidden="true"></div>

<section class="section story-grid" id="stories" data-filter-group>
	<div class="container">
		<div class="filter-bar">
			<div class="chips" role="group" aria-label="<?php esc_attr_e( 'Filter stories', 'prajkta' ); ?>">
				<button type="button" class="chip is-active" data-filter="all"><?php esc_html_e( 'All', 'prajkta' ); ?></button>
				<?php foreach ( pf_list( $c['grid']['categories'] ) as $cat ) : ?>
					<button type="button" class="chip" data-filter="<?php echo esc_attr( sanitize_title( $cat ) ); ?>"><?php echo esc_html( $cat ); ?></button>
				<?php endforeach; ?>
			</div>
			<label class="sort-select">
				<span class="screen-reader-text"><?php esc_html_e( 'Sort', 'prajkta' ); ?></span>
				<select data-sort>
					<option value="latest"><?php esc_html_e( 'Latest', 'prajkta' ); ?></option>
					<option value="az"><?php esc_html_e( 'A–Z', 'prajkta' ); ?></option>
				</select>
			</label>
		</div>
		<div class="card-grid card-grid--3" data-filter-items>
			<?php foreach ( $c['grid']['items'] as $item ) : ?>
				<article class="story-card" data-cat="<?php echo esc_attr( sanitize_title( $item['category'] ) ); ?>" data-title="<?php echo esc_attr( $item['title'] ); ?>">
					<div class="story-card__media">
						<img src="<?php echo esc_url( pf_img( $item['image'] ) ); ?>" alt="" loading="lazy">
						<span class="story-card__tag"><?php echo esc_html( $item['category'] ); ?></span>
					</div>
					<h3><?php echo esc_html( $item['title'] ); ?></h3>
					<p><?php echo esc_html( $item['text'] ); ?></p>
					<?php pf_more( $c['grid']['link_label'], $item['url'], 'more--caps more--lg' ); ?>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<div class="tear" aria-hidden="true"></div>

<section class="section films" id="films">
	<div class="container">
		<h2 class="h2"><?php echo esc_html( $c['films']['title'] ); ?></h2>
		<p class="sec-lead"><?php echo esc_html( $c['films']['text'] ); ?></p>
		<div class="card-grid card-grid--2">
			<?php foreach ( $c['films']['items'] as $item ) : ?>
				<article class="film">
					<a class="film__media" href="<?php echo esc_url( pf_link( $item['video_url'] ) ); ?>">
						<img src="<?php echo esc_url( pf_img( $item['image'] ) ); ?>" alt="" loading="lazy">
						<span class="film__play"><span class="screen-reader-text"><?php echo esc_html( sprintf( __( 'Play %s', 'prajkta' ), $item['title'] ) ); ?></span><?php pf_icon( 'play' ); ?></span>
						<span class="film__time"><?php echo esc_html( $item['duration'] ); ?></span>
					</a>
					<h3 class="h3"><?php echo esc_html( $item['title'] ); ?></h3>
					<p class="muted"><?php echo esc_html( $item['text'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php pf_part( 'change-blue', array( 'data' => $c['change'] ) ); ?>
<?php pf_part( 'voices' ); ?>

<section class="section section--flush-top in-focus">
	<div class="container">
		<h2 class="h2"><?php echo esc_html( $f['title'] ); ?></h2>
		<div class="in-focus__grid">
			<figure class="in-focus__big">
				<img src="<?php echo esc_url( pf_img( $f['big_image'] ) ); ?>" alt="" loading="lazy">
				<figcaption><strong><?php echo esc_html( $f['big_title'] ); ?></strong><?php echo esc_html( $f['big_text'] ); ?></figcaption>
			</figure>
			<img src="<?php echo esc_url( pf_img( $f['small_1_image'] ) ); ?>" alt="" loading="lazy">
			<img src="<?php echo esc_url( pf_img( $f['small_2_image'] ) ); ?>" alt="" loading="lazy">
			<figure class="in-focus__wide">
				<img src="<?php echo esc_url( pf_img( $f['wide_image'] ) ); ?>" alt="" loading="lazy">
				<figcaption><strong><?php echo esc_html( $f['wide_title'] ); ?></strong><?php echo esc_html( $f['wide_text'] ); ?></figcaption>
			</figure>
		</div>
	</div>
</section>

<?php pf_part( 'cta' ); ?>

<?php
get_footer();
