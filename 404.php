<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package fedoraid
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<section class="error-404 not-found">
							<header class="page-header-404">

							<div align="center">
								<img src="http://crajun.com/wp-content/uploads/2014/10/morpheus_meme.jpg" />
							</div>


								<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'fedora-id' ); ?></h1>
							</header><!-- .page-header -->

							<div class="page-content">

								<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'fedora-id' ); ?></p>

								<?php get_search_form(); ?>

								<?php if ( fedora_id_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
							
								<?php endif; ?>

							</div><!-- .page-content -->
						</section><!-- .error-404 -->
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
