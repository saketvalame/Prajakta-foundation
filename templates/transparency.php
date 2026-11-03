<?php
/**
 * Template Name: Transparency
 *
 * @package prajkta
 */

get_header();
$c = pf_content( 'transparency' );
$m = $c['money'];
$g = $c['compliance'];
?>

<?php pf_part( 'hero', array( 'hero' => $c['hero'], 'variant' => 'photo', 'bg' => '#182e03', 'icons' => array( '', 'arrow-right' ) ) ); ?>

<section class="section section--soft governance">
	<div class="container split split--top">
		<div class="split__text">
			<h2 class="h2"><?php echo pf_t( $c['governance']['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h2>
			<p><?php echo esc_html( $c['governance']['text'] ); ?></p>
		</div>
		<div class="card-grid card-grid--2">
			<?php foreach ( $c['governance']['items'] as $item ) : ?>
				<article class="card card--white card--shadow card--orange-icon">
					<?php pf_icon( $item['icon'] ); ?>
					<h3 class="h3"><?php echo pf_t( $item['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h3>
					<p><?php echo esc_html( $item['text'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section section--paper torn-edges money">
	<div class="container">
		<header class="sec-head sec-head--center">
			<h2 class="h2"><?php echo esc_html( $m['title'] ); ?></h2>
			<p><?php echo esc_html( $m['text'] ); ?></p>
		</header>
		<div class="money__grid">
			<div class="money__card">
				<h3><?php echo esc_html( $m['ring_title'] ); ?></h3>
				<div class="ring" style="--p:<?php echo (int) $m['ring_percent']; ?>">
					<strong><?php echo (int) $m['ring_percent']; ?>%</strong><span><?php echo esc_html( $m['ring_label'] ); ?></span>
				</div>
				<p class="money__legend"><span class="is-orange"><?php echo esc_html( $m['legend_1'] ); ?></span><span><?php echo esc_html( $m['legend_2'] ); ?></span></p>
			</div>
			<div class="money__card money__card--bars">
				<h3><?php echo esc_html( $m['bars_title'] ); ?></h3>
				<?php foreach ( $m['bars'] as $bar ) : ?>
					<div class="money__row">
						<span><?php echo esc_html( $bar['label'] ); ?></span><span><?php echo esc_html( $bar['value'] ); ?></span>
						<span class="bar bar--orange"><span style="width:<?php echo (int) $bar['percent']; ?>%"></span></span>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

<section class="section reports" id="reports">
	<div class="container">
		<header class="sec-head sec-head--row">
			<div>
				<h2 class="h2"><?php echo esc_html( $c['reports']['title'] ); ?></h2>
				<p><?php echo esc_html( $c['reports']['text'] ); ?></p>
			</div>
			<?php pf_more( $c['reports']['btn_label'], $c['reports']['btn_url'], 'more--caps' ); ?>
		</header>
		<div class="card-grid card-grid--3">
			<?php foreach ( $c['reports']['items'] as $item ) : ?>
				<article class="report">
					<img src="<?php echo esc_url( pf_img( $item['image'] ) ); ?>" alt="" loading="lazy">
					<h3 class="h3"><?php echo esc_html( $item['title'] ); ?></h3>
					<p><?php echo esc_html( $item['text'] ); ?></p>
					<a class="report__dl" href="<?php echo esc_url( pf_link( $item['file'] ) ); ?>" download><?php esc_html_e( 'Download PDF', 'prajkta' ); ?><?php pf_icon( 'download' ); ?></a>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<div class="tear" aria-hidden="true"></div>

<section class="section section--gray compliance">
	<div class="container">
		<h2 class="h2 text-center"><?php echo esc_html( $g['title'] ); ?></h2>
		<div class="card-grid card-grid--3">
			<article class="card card--white compliance__card">
				<h3 class="h3"><?php echo esc_html( $g['board_title'] ); ?></h3>
				<dl class="compliance__board">
					<?php foreach ( $g['board'] as $row ) : ?>
						<div><dt><?php echo esc_html( $row['name'] ); ?></dt><dd><?php echo esc_html( $row['role'] ); ?></dd></div>
					<?php endforeach; ?>
				</dl>
			</article>
			<article class="card card--white compliance__card">
				<h3 class="h3"><?php echo esc_html( $g['legal_title'] ); ?></h3>
				<dl class="compliance__legal">
					<?php foreach ( $g['legal'] as $row ) : ?>
						<div><dt><?php echo esc_html( $row['label'] ); ?></dt><dd><?php echo esc_html( $row['value'] ); ?></dd></div>
					<?php endforeach; ?>
				</dl>
			</article>
			<article class="card card--white compliance__card compliance__auditor">
				<h3 class="h3"><?php echo esc_html( $g['auditor_title'] ); ?></h3>
				<span class="icon-box icon-box--gray icon-box--lg"><?php pf_icon( 'bank' ); ?></span>
				<strong><?php echo esc_html( $g['auditor_name'] ); ?></strong>
				<p><?php echo esc_html( $g['auditor_text'] ); ?></p>
				<a class="compliance__link" href="<?php echo esc_url( pf_link( $g['auditor_file'] ) ); ?>"><?php echo esc_html( $g['auditor_label'] ); ?><?php pf_icon( 'external' ); ?></a>
			</article>
		</div>
	</div>
</section>

<section class="section downloads" id="downloads">
	<div class="container downloads__inner">
		<div class="downloads__intro">
			<h2 class="h2"><?php echo pf_t( $c['downloads']['title'] ); // phpcs:ignore WordPress.Security.EscapeOutput ?></h2>
			<p><?php echo esc_html( $c['downloads']['text'] ); ?></p>
			<label class="search-box">
				<?php pf_icon( 'search' ); ?>
				<span class="screen-reader-text"><?php esc_html_e( 'Search documents', 'prajkta' ); ?></span>
				<input type="search" placeholder="<?php esc_attr_e( 'Search documents...', 'prajkta' ); ?>" data-filter-input="#doc-list">
			</label>
		</div>
		<ul class="doc-list" id="doc-list">
			<?php foreach ( $c['downloads']['items'] as $item ) : ?>
				<li class="doc" data-filter-text="<?php echo esc_attr( strtolower( $item['title'] ) ); ?>">
					<span class="doc__icon doc__icon--<?php echo esc_attr( $item['tone'] ); ?>"><?php pf_icon( 'file' ); ?></span>
					<div><strong><?php echo esc_html( $item['title'] ); ?></strong><small><?php echo esc_html( $item['meta'] ); ?></small></div>
					<a class="doc__dl" href="<?php echo esc_url( pf_link( $item['file'] ) ); ?>" download aria-label="<?php echo esc_attr( sprintf( __( 'Download %s', 'prajkta' ), $item['title'] ) ); ?>"><?php pf_icon( 'download' ); ?></a>
				</li>
			<?php endforeach; ?>
			<li class="doc-list__empty" hidden><?php esc_html_e( 'No documents match your search.', 'prajkta' ); ?></li>
		</ul>
	</div>
</section>

<div class="tear" aria-hidden="true"></div>

<?php pf_part( 'faq' ); ?>
<?php pf_part( 'closing', array( 'data' => $c['closing'], 'icon' => 'handshake' ) ); ?>

<?php
get_footer();
