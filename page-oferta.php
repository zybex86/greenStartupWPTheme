<?php
/**
 *  Template Name: Oferta
 */

$tytul_sekcji_zasady_pracy        = get_field('tytul_sekcji_zasady_pracy');
$tresc_zasad_pracy                = get_field('tresc_zasad_pracy');
$numer_telefonu                   = get_field('numer_telefonu');

get_header();
?>

	  <section id="oferta">
      <article>
        <div class="container clearfix">
          <div class="row justify-content-center">
            <div class="col-sm-8 col-sm-offset-2">
              <div class="section-header">
                  <i class="fas fa-question-circle"></i>
                <h2 class="page-title"><?php the_title(); ?></h2>
              </div><!-- section-header -->
              
              <?php
              // TO SHOW THE PAGE CONTENTS
              while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                  <div class="entry-content-page">
                      <?php the_content(); ?> <!-- Page Content -->
                  </div><!-- .entry-content-page -->

              <?php endwhile; wp_reset_postdata(); ?>

              <div class="section-header">
                <i class="fas fa-hand-holding"></i> <i class="fas fa-child"></i>
                <h2 class="page-title">Masaże i Yoga</h2>
              </div><!-- section-header -->
              
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- container -->
      </article>
  
    </section>
  
  <!-- ZASADY PRACY -->

  

  <section id="zasady-pracy">
      <article>
        <div class="container clearfix">
          <div class="row justify-content-center">
            <div class="col-sm-8 col-sm-offset-2">
              <div class="section-header">
                  <i class="fas fa-info"></i>
                <h2 class="page-title"><?php echo $tytul_sekcji_zasady_pracy; ?></h2>
              </div><!-- section-header -->
              <div id="zasady-text">
              <?php echo $tresc_zasad_pracy; ?>
              
              <h3><?php echo $numer_telefonu; ?></h3>
              </div>
              
              <table class="table">
                  <thread>
                    <tr>
                      <th scope="col">Rodzaj usługi</th>
                      <th scope="col">Cena</th>
                      <th scope="col">Czas trwania</th>
                    </tr>
                  </thread>
                  <tbody>
                  <?php $ceny = new WP_Query( array( 'post_type' => 'cennik_uslug', 'orderby' => 'post_id', 'orderby' => 'DSC') ); ?>
                  <?php while( $ceny->have_posts() ) : $ceny->the_post(); ?>
                    <tr>
                      <td><?php the_title(); ?></td>
                      <td><?php the_field('cena_za_usluge'); ?> zł</td>
                      <td><?php the_field('czas_trwania'); ?></td>
                    </tr>
                  <?php endwhile; wp_reset_postdata(); ?>
                  
                  </tbody>
                </table>
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- container -->
      </article>
  
    </section>
<?php
get_footer();
