<?php
/**
 * Numbered process line.
 * Args: steps (title, text), variant (circle | square | solid).
 * "circle" and "square" highlight the last step; "solid" uses 01, 02… numbers.
 *
 * @package prajkta
 */

$pf_steps   = $args['steps'];
$pf_variant = isset( $args['variant'] ) ? $args['variant'] : 'circle';
$pf_last    = count( $pf_steps ) - 1;
?>
<ol class="steps steps--<?php echo esc_attr( $pf_variant ); ?>" style="--steps:<?php echo (int) count( $pf_steps ); ?>">
	<?php foreach ( $pf_steps as $pf_i => $pf_step ) : ?>
		<li class="steps__item<?php echo $pf_i === $pf_last ? ' is-last' : ''; ?>">
			<span class="steps__num"><?php echo esc_html( 'solid' === $pf_variant ? sprintf( '%02d', $pf_i + 1 ) : $pf_i + 1 ); ?></span>
			<strong class="steps__title"><?php echo esc_html( $pf_step['title'] ); ?></strong>
			<span class="steps__text"><?php echo esc_html( $pf_step['text'] ); ?></span>
		</li>
	<?php endforeach; ?>
</ol>
