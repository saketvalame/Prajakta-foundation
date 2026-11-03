<?php
/**
 * Fallback listing (blog, archives, search).
 *
 * @package prajkta
 */

get_header();
?>

<section class="page-head">
	<div class="container">
		<h1 class="hero__title">
			<?php
			if ( is_search() ) {
				/* translators: %s: search query */
				printf( esc_html__( 'Search results for “%s”', 'prajkta' ), esc_html( get_search_query() ) );
			} elseif ( is_archive() ) {
				echo esc_html( wp_strip_all_tags( get_the_archive_title() ) );
			} else {
				esc_html_e( 'News & Updates', 'prajkta' );
			}
			?>
		</h1>
	</div>
</section>

<section class="section">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<div class="card-grid card-grid--3">
				<?php
				while ( have_posts() ) :
					the_post();
					$cats = get_the_category();
					?>
					<article <?php post_class( 'news-card' ); ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>
						<p class="news-card__meta"><span><?php echo esc_html( $cats ? $cats[0]->name : '' ); ?></span><time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></time></p>
						<h2 class="h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 26 ) ); ?></p>
						<a class="news-card__more" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'prajkta' ); ?> →</a>
					</article>
				<?php endwhile; ?>
			</div>
			<div class="pagination"><?php the_posts_pagination(); ?></div>
		<?php else : ?>
			<p><?php esc_html_e( 'Nothing here yet.', 'prajkta' ); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
