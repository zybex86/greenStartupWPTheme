<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Green_Startup
 */

get_header();
?>

	<section id="blog">
    <div class="container clearfix">
			<div class="row justify-content-center">
				<div class="row" id="posty">
					<main id="content" class="col-md-8" role="main">

						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', get_post_type() );

							the_post_navigation();

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

					</main><!-- #main -->
					<!-- SIDEBAR
				=============================================================== -->
					<aside class="col-md-4">
						<?php get_sidebar(); ?>
					</aside>
				</div><!-- #posty -->
			</div><!-- row -->
		</div><!-- container --> 
	</section>

<?php

get_footer();
