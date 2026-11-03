<?php
/**
 * Single post.
 *
 * @package prajkta
 */

get_header();
?>

<?php
while ( have_posts() ) :
	the_post();
	$cats = get_the_category();
	?>
	<section class="page-head">
		<div class="container">
			<p class="contact-hero__eyebrow"><?php echo esc_html( $cats ? $cats[0]->name : __( 'News', 'prajkta' ) ); ?> · <?php echo esc_html( get_the_date() ); ?></p>
			<h1 class="hero__title"><?php the_title(); ?></h1>
		</div>
	</section>
	<article class="section">
		<div class="container prose">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large', array( 'class' => 'prose__cover' ) ); ?>
			<?php endif; ?>
			<?php the_content(); ?>
			<p><a class="more more--caps" href="<?php echo esc_url( pf_url( 'news' ) ); ?>"><?php esc_html_e( 'All news', 'prajkta' ); ?><?php pf_icon( 'arrow-right' ); ?></a></p>
		</div>
	</article>
<?php endwhile; ?>

<?php
get_footer();
