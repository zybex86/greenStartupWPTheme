<?php
/**
 *  Template Name: Misja pracy
 */



get_header();
?>

	<section id="misja">
    <article>
      <div class="container clearfix">
        <div class="row justify-content-center">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="section-header">
              <i class="fas fa-handshake"></i>
              <?php 
                the_title( '<h2 class="page-title">', '</h2>' );
              ?>
            </div><!-- section-header -->
            <?php
              // TO SHOW THE PAGE CONTENTS
              while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                  <div class="entry-content-page">
                      <?php the_content(); ?> <!-- Page Content -->
                  </div><!-- .entry-content-page -->

              <?php endwhile; ?>
          </div>
        </div>
      </div><!-- container -->
    </article>

  </section>

<?php
get_footer();
