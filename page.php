<?php
/**
 * Default page (editor content).
 *
 * @package prajkta
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
	<section class="page-head">
		<div class="container"><h1 class="hero__title"><?php the_title(); ?></h1></div>
	</section>
	<section class="section">
		<div class="container prose"><?php the_content(); ?></div>
	</section>
<?php endwhile; ?>

<?php
get_footer();
