<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Green_Startup
 */

get_header();
?>


		<?php if ( have_posts() ) : ?>

		<section id="archive">
    
		<div class="container clearfix">
			<div class="row justify-content-center">
				
				<div class="section-header">
						
						<?php
							the_archive_title( '<i class="fas fa-pencil-alt"></i><br><h2 class="page-title">', '' );
							the_archive_description( '<small class="archive-description">', '</small></h1>' );
						?>
				</div><!-- section-header -->

				<div class="row" id="posty">
					<main id="content" class="col-sm-8" role="main">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</main>
		<aside class="col-md-4">
			<?php get_sidebar(); ?>
		</aside>
	</div>
	</div>
	</div>
	</section>
<?php

get_footer();
