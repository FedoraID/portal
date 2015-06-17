<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package fedoraid
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-grid">
			<div class="container">
				<div class="row">
					<div class="col s4">
						<div class="footer-widget">
							<?php get_sidebar(); ?>
						</div>
					</div>
					<div class="col s4">
						xxx
					</div>
					<div class="col s4">
						<p>Fedora disponsori oleh Red Hat.</p>
						<img src="https://labs.fedoraproject.org/static/images/sponsors/sidebar/redhat.png">
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<div class="site-info">
							<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'fedora-id' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'fedora-id' ), 'WordPress' ); ?></a>
							<span class="sep"> | </span>
							<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'fedora-id' ), 'fedora-id', '<a href="http://zealab.com" rel="designer">Zea</a>' ); ?>
						</div><!-- .site-info -->
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
