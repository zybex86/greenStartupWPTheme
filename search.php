<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Green_Startup
 */

get_header();
?>

	<section id="search">
    
		<div class="container clearfix">
			<div class="row justify-content-center">
				<div class="row" id="posty">
					<main id="content" class="col-md-8" role="main">
		<?php if ( have_posts() ) : ?>

			
				
				<div class="section-header">
				<i class="fas fa-search"></i>
				<h2 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Wyniki wyszukiwania dla: %s', 'greenstartup' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h2>
				</div><!-- .page-header -->
			
      	
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

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
