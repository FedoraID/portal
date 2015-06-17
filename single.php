<?php
/**
 * The template for displaying all single posts.
 *
 * @package fedoraid
 */

get_header('post'); ?>

<script type="text/javascript">
    jQuery(document).ready(function(){
      jQuery('.parallax').parallax();
    });        
</script>

<div class="parallax-container">
    <div class="parallax"><img src="http://localhost/personal/fedora.or.id/wp-content/uploads/2015/06/fedora-artwork.png" /></div>
    	<header class="entry-header-post animated fadeInUp" id="post-title-animate">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<div class="entry-meta">
				<?php fedora_id_posted_on(); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->
</div>

<div class="container">
	<div class="row">
		<div class="col s12">
			<div class="single-post-body">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'single' ); ?>

					<?php endwhile; // End of the loop. ?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
		</div>
	</div>
</div>

<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
	<a class="btn-floating btn-large blue" href="<?php echo site_url(); ?>" title="Back to Home">
		<i class="mdi-action-home"></i>
	</a>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="http://localhost/personal/fedora.or.id/wp-content/uploads/2015/06/fedora-artwork.png" /></div>
</div>

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
