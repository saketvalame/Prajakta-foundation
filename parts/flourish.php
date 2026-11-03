<?php
/**
 * Jasmine line drawing in the footer corner.
 *
 * @package prajkta
 */

$pf_flower = function ( $x, $y, $r, $rot ) {
	$out = sprintf( '<g transform="translate(%1$s %2$s) rotate(%3$s)">', $x, $y, $rot );
	for ( $i = 0; $i < 5; $i++ ) {
		$out .= sprintf( '<path d="M0 0C%1$s %2$s %3$s %4$s 0 %5$sC-%3$s %4$s -%1$s %2$s 0 0Z" transform="rotate(%6$s)"/>', $r * .35, -$r * .3, $r * .45, -$r * .8, -$r, $i * 72 );
	}
	return $out . sprintf( '<circle r="%s"/></g>', $r * .12 );
};
?>
<svg class="site-footer__flourish" viewBox="0 0 220 380" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
	<path d="M210 370C170 320 150 270 160 210S200 120 190 40"/>
	<path d="M163 250c-20-6-34-2-46 10M170 170c22-10 34-26 36-48M158 300c-24 6-40 20-46 40"/>
	<path d="M186 90c-14 4-22 14-24 28 14-2 22-12 24-28zM150 330c10-12 24-16 38-10-10 12-24 16-38 10zM196 200c-10-10-12-24-4-36 10 10 12 24 4 36z"/>
	<?php
	echo $pf_flower( 100, 70, 46, 10 ); // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG.
	echo $pf_flower( 80, 200, 40, -20 ); // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG.
	echo $pf_flower( 120, 320, 36, 30 ); // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG.
	?>
</svg>
