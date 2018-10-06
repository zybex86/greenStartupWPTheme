<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Green_Startup
 */

get_header();
?>

<section id="blog">
    <div class="container clearfix">
			<div class="row justify-content-center">
        <div class="section-header">
					<i class="fas fa-exclamation"></i>
					<h2 class="page-title">Niestety ta strona nie istnieje</h2>
				</div><!-- section-header -->
				<div class="row" id="posty">
					<main id="content" class="col-sm-8" role="main">
						<h2>Nie martw się! Postaram Ci się pomóc.</h2>

						<div class="widget widget_categories">
							<h4 class="widget-title">Może interesują Cię poniższe kategorie?</h4>
							<ul>
								<?php 
									wp_list_categories ( array (
										'orderby' 		=> 'count',
										'order'				=> 'DESC',
										'show_count'  => 1,
										'title_li'		=> '',
										'number'			=> 10
									) );
								?>
						</div>
						<!-- ARCHIWUM -->
						
					
						<?php the_widget( 'WP_Widget_Archives', 'title=Zawsze możesz przejrzeć moje archiwalne wpisy...' ); ?>

						<p>... zawsze możesz wrócić do <a href="<?php echo esc_url( home_url( '/') ); ?>" class="btn">strony głównej</a></p>
					</main><!-- main -->
					<!-- WIDGETY BLOGOWE
  				=============================================================== -->
					<aside class="col-sm-4">
						<?php get_sidebar(); ?>
					</aside>
				</div><!-- posty -->
					
  			
			</div>
		</div> <!-- container -->
	</section><!-- blog -->
							



	
<?php
get_footer();
