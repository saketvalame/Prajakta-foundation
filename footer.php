<?php
/**
 * Site footer.
 *
 * @package prajkta
 */

$pf_footer = pf_global( 'footer' );
$pf_torn   = is_page_template( array( 'templates/csr.php', 'templates/thank-you.php' ) ) || is_home() || is_singular( 'post' ) || is_archive() || is_search() || is_404();
?>
</main>

<footer class="site-footer<?php echo $pf_torn ? ' site-footer--torn' : ''; ?>">
	<div class="container">
		<div class="site-footer__top">
			<div class="site-footer__brand">
				<img src="<?php echo esc_url( PF_URI . '/assets/img/logo-white.png' ); ?>" width="194" height="65" alt="<?php esc_attr_e( 'Prajkta Foundation', 'prajkta' ); ?>" loading="lazy">
				<p><?php echo esc_html( $pf_footer['about'] ); ?></p>
				<ul class="socials">
					<li><a href="<?php echo esc_url( pf_link( $pf_footer['linkedin_url'] ) ); ?>" aria-label="LinkedIn"><?php pf_icon( 'linkedin' ); ?></a></li>
					<li><a href="<?php echo esc_url( pf_link( $pf_footer['instagram_url'] ) ); ?>" aria-label="Instagram"><?php pf_icon( 'instagram' ); ?></a></li>
					<li><a href="<?php echo esc_url( pf_link( $pf_footer['community_url'] ) ); ?>" aria-label="<?php esc_attr_e( 'Community', 'prajkta' ); ?>"><?php pf_icon( 'users' ); ?></a></li>
					<li><a href="mailto:<?php echo esc_attr( antispambot( $pf_footer['email'] ) ); ?>" aria-label="<?php esc_attr_e( 'Email', 'prajkta' ); ?>"><?php pf_icon( 'mail' ); ?></a></li>
				</ul>
			</div>

			<nav class="site-footer__links" aria-label="<?php esc_attr_e( 'Footer', 'prajkta' ); ?>">
				<?php foreach ( pf_footer_columns() as $pf_col ) : ?>
					<ul>
						<?php foreach ( $pf_col as $pf_i => $pf_item ) : ?>
							<li<?php echo ( 0 === $pf_i && 'Explore' === $pf_item[0] ) ? ' class="is-heading"' : ''; ?>>
								<?php if ( $pf_item[1] ) : ?>
									<a href="<?php echo esc_url( pf_link( $pf_item[1] ) ); ?>"><?php echo esc_html( $pf_item[0] ); ?></a>
								<?php else : ?>
									<?php echo esc_html( $pf_item[0] ); ?>
								<?php endif; ?>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endforeach; ?>
			</nav>
		</div>

		<div class="site-footer__newsletter" id="subscribe">
			<div>
				<p class="site-footer__label"><?php echo esc_html( $pf_footer['newsletter_label'] ); ?></p>
				<p class="site-footer__sub"><?php echo esc_html( $pf_footer['newsletter_text'] ); ?></p>
			</div>
			<form class="inline-form" data-demo-form>
				<label class="screen-reader-text" for="pf-footer-email"><?php esc_html_e( 'Email address', 'prajkta' ); ?></label>
				<input id="pf-footer-email" type="email" name="email" placeholder="<?php esc_attr_e( 'Email address', 'prajkta' ); ?>" required>
				<button class="btn btn--orange" type="submit"><?php esc_html_e( 'Subscribe', 'prajkta' ); ?></button>
			</form>
		</div>

		<div class="site-footer__bottom">
			<p><?php echo esc_html( $pf_footer['copyright'] ); ?></p>
			<ul>
				<li><a href="<?php echo esc_url( pf_link( $pf_footer['privacy_url'] ) ); ?>"><?php esc_html_e( 'Privacy Policy', 'prajkta' ); ?></a></li>
				<li><a href="<?php echo esc_url( pf_link( $pf_footer['terms_url'] ) ); ?>"><?php esc_html_e( 'Terms of Service', 'prajkta' ); ?></a></li>
				<li><a href="<?php echo esc_url( pf_link( $pf_footer['legal_url'] ) ); ?>"><?php esc_html_e( 'Legal', 'prajkta' ); ?></a></li>
			</ul>
		</div>
	</div>
	<?php get_template_part( 'parts/flourish' ); ?>
</footer>

<?php wp_footer(); ?>
</body>
</html>
