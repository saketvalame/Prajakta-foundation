<?php
/**
 * Template Name: News
 *
 * The "latest" grid lists published blog posts; until there are any it shows
 * the sample cards from the design.
 *
 * @package prajkta
 */

get_header();
$c = pf_content( 'news' );

$cards = array();
$news_posts = get_posts( array( 'numberposts' => 9, 'post_status' => 'publish' ) );
foreach ( $news_posts as $post_item ) {
	if ( 'hello-world' === $post_item->post_name ) {
		continue; // WordPress's sample post.
	}
	$cats    = get_the_category( $post_item->ID );
	$cards[] = array(
		'category' => $cats ? $cats[0]->name : __( 'Latest News', 'prajkta' ),
		'date'     => get_the_date( 'M j, Y', $post_item ),
		'title'    => get_the_title( $post_item ),
		'text'     => wp_trim_words( get_the_excerpt( $post_item ), 26 ),
		'url'      => get_permalink( $post_item ),
		'image'    => get_the_post_thumbnail_url( $post_item, 'large' ),
	);
}
if ( ! $cards ) {
	$cards = $c['latest']['items'];
}
$circle = $c['circle'];
?>

<?php pf_part( 'hero', array( 'hero' => $c['hero'], 'variant' => 'photo', 'bg' => '#362d26' ) ); ?>

<section class="section news-featured">
	<div class="container split split--media-left split--center">
		<img src="<?php echo esc_url( pf_img( $c['featured']['image'] ) ); ?>" alt="" loading="lazy">
		<div class="split__text">
			<h2 class="h2 h2--md"><a href="<?php echo esc_url( pf_link( $c['featured']['url'] ) ); ?>"><?php echo esc_html( $c['featured']['title'] ); ?></a></h2>
			<p class="muted"><?php echo esc_html( $c['featured']['text'] ); ?></p>
			<p class="byline">
				<img src="<?php echo esc_url( pf_img( $c['featured']['author_photo'] ) ); ?>" alt="" width="48" height="48" loading="lazy">
				<span><strong><?php echo esc_html( $c['featured']['author'] ); ?></strong><small><?php echo esc_html( $c['featured']['author_role'] ); ?></small></span>
			</p>
		</div>
	</div>
</section>

<section class="section blue-band blue-band--navy journal">
	<div class="container split split--media-left split--center">
		<img class="journal__img" src="<?php echo esc_url( pf_img( $c['journal']['image'] ) ); ?>" alt="" loading="lazy">
		<div class="split__text">
			<h2 class="h2"><?php echo esc_html( $c['journal']['title'] ); ?></h2>
			<p><?php echo esc_html( $c['journal']['text'] ); ?></p>
			<?php pf_btn( $c['journal']['btn_label'], $c['journal']['btn_url'] ); ?>
		</div>
	</div>
</section>

<div class="tear" aria-hidden="true"></div>

<section class="section news-latest" id="latest" data-filter-group>
	<div class="container">
		<div class="news-latest__box">
			<div class="filter-bar">
				<div class="chips chips--plain" role="group" aria-label="<?php esc_attr_e( 'Filter news', 'prajkta' ); ?>">
					<button type="button" class="chip is-active" data-filter="all"><?php esc_html_e( 'All', 'prajkta' ); ?></button>
					<?php foreach ( pf_list( $c['latest']['categories'] ) as $cat ) : ?>
						<button type="button" class="chip" data-filter="<?php echo esc_attr( sanitize_title( $cat ) ); ?>"><?php echo esc_html( $cat ); ?></button>
					<?php endforeach; ?>
				</div>
				<?php if ( count( $cards ) > 3 ) : ?>
					<button type="button" class="more more--caps" data-load-more><?php echo esc_html( $c['latest']['btn_label'] ); ?></button>
				<?php endif; ?>
			</div>
			<div class="card-grid card-grid--3" data-filter-items>
				<?php foreach ( $cards as $i => $item ) : ?>
					<article class="news-card" data-cat="<?php echo esc_attr( sanitize_title( $item['category'] ) ); ?>"<?php echo $i > 2 ? ' data-more hidden' : ''; ?>>
						<img src="<?php echo esc_url( pf_img( $item['image'] ) ); ?>" alt="" loading="lazy">
						<p class="news-card__meta"><span><?php echo esc_html( $item['category'] ); ?></span><time><?php echo esc_html( $item['date'] ); ?></time></p>
						<h3><a href="<?php echo esc_url( pf_link( $item['url'] ) ); ?>"><?php echo esc_html( $item['title'] ); ?></a></h3>
						<p><?php echo esc_html( $item['text'] ); ?></p>
						<a class="news-card__more" href="<?php echo esc_url( pf_link( $item['url'] ) ); ?>"><?php esc_html_e( 'Read More', 'prajkta' ); ?> →</a>
					</article>
				<?php endforeach; ?>
			</div>
			<p class="filter-empty" hidden><?php esc_html_e( 'No stories in this category yet.', 'prajkta' ); ?></p>
		</div>
	</div>
</section>

<section class="section section--warm events" id="events">
	<div class="container">
		<img class="events__img" src="<?php echo esc_url( pf_img( $c['events']['image'] ) ); ?>" alt="" loading="lazy">
		<header class="sec-head sec-head--row sec-head--end">
			<div>
				<p class="eyebrow eyebrow--caps"><?php echo esc_html( $c['events']['eyebrow'] ); ?></p>
				<h2 class="h2 h2--light"><?php echo esc_html( $c['events']['title'] ); ?></h2>
			</div>
			<p class="sec-head__aside text-right"><?php echo esc_html( $c['events']['text'] ); ?></p>
		</header>
		<div class="card-grid card-grid--2">
			<?php foreach ( $c['events']['items'] as $item ) : ?>
				<article class="event">
					<p class="event__date event__date--<?php echo esc_attr( $item['tone'] ); ?>"><strong><?php echo esc_html( $item['day'] ); ?></strong><span><?php echo esc_html( $item['month'] ); ?></span></p>
					<div>
						<h3><?php echo esc_html( $item['title'] ); ?></h3>
						<p class="event__meta"><?php pf_icon( 'clock' ); ?><?php echo esc_html( $item['time'] ); ?></p>
						<p class="event__meta"><?php pf_icon( 'map-pin' ); ?><?php echo esc_html( $item['place'] ); ?></p>
						<?php pf_btn( __( 'Register Now', 'prajkta' ), $item['url'], 'btn--outline btn--sm' ); ?>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<div class="tear" aria-hidden="true"></div>

<section class="section section--flush-top gallery" id="gallery">
	<div class="container">
		<h2 class="h2"><?php echo esc_html( $c['gallery']['title'] ); ?></h2>
		<p class="gallery__sub"><?php echo esc_html( $c['gallery']['text'] ); ?></p>
		<ul class="gallery__grid">
			<?php foreach ( $c['gallery']['images'] as $img ) : ?>
				<li><img src="<?php echo esc_url( pf_img( $img['image'] ) ); ?>" alt="<?php echo esc_attr( $img['caption'] ); ?>" loading="lazy"></li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>

<section class="section blue-band blue-band--navy circle" id="subscribe-news">
	<div class="container split split--center">
		<div class="split__text">
			<h2 class="h2"><?php echo esc_html( $circle['title'] ); ?></h2>
			<p><?php echo esc_html( $circle['text'] ); ?></p>
			<form class="inline-form inline-form--dark" data-demo-form>
				<label class="screen-reader-text" for="pf-circle-email"><?php esc_html_e( 'Email address', 'prajkta' ); ?></label>
				<input id="pf-circle-email" type="email" name="email" placeholder="email@example.com" required>
				<button class="btn btn--orange" type="submit"><?php echo esc_html( $circle['btn_label'] ); ?></button>
			</form>
			<p class="fine-print"><?php echo esc_html( $circle['note'] ); ?></p>
		</div>
		<div class="circle__quotes" data-rotator data-rotator-auto="7000">
			<span class="circle__mark" aria-hidden="true">&ldquo;</span>
			<?php foreach ( $circle['quotes'] as $i => $q ) : ?>
				<figure data-rotator-item<?php echo $i ? ' hidden' : ''; ?>>
					<blockquote><p><?php echo esc_html( $q['quote'] ); ?></p></blockquote>
					<figcaption><strong><?php echo esc_html( $q['name'] ); ?></strong><span><?php echo esc_html( $q['role'] ); ?></span></figcaption>
				</figure>
			<?php endforeach; ?>
			<?php if ( count( $circle['quotes'] ) > 1 ) : ?>
				<div class="circle__dots">
					<?php foreach ( $circle['quotes'] as $i => $q ) : ?>
						<button type="button" data-rotator-dot="<?php echo (int) $i; ?>" aria-label="<?php echo esc_attr( sprintf( __( 'Quote %d', 'prajkta' ), $i + 1 ) ); ?>"<?php echo $i ? '' : ' aria-current="true"'; ?>></button>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<?php pf_part( 'cta' ); ?>

<?php
get_footer();
