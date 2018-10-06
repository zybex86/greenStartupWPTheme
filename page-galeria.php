<?php
/**
 *  Template Name: Galeria
 */



get_header();
?>

	   <!-- GALERIA -->
  <section id="galeria">
      <article>
        <div class="container clearfix">
          <div class="row justify-content-center">
            <div class="col-sm-8 col-sm-offset-2">
              <div class="section-header">
                <i class="fas fa-camera"></i>
                <h2 class="page-title"><?php the_title(); ?></h2>
              </div><!-- section-header -->
              <?php
              // TO SHOW THE PAGE CONTENTS
              while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                  <div class="entry-content-page">
                      <?php the_content(); ?> <!-- Page Content -->
                  </div><!-- .entry-content-page -->

              <?php endwhile; ?>
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- container -->
      </article>
  
    </section>
  
<?php
get_footer();
