<?php
/**
 *  Template Name: O mnie
 */

$tytul_sekcji_o_mnie      = get_field('tytul_sekcji_o_mnie');
$tresc_sekcji_o_mnie      = get_field('tresc_sekcji_o_mnie');
$tytul_sekcji_szkolenia   = get_field('tytul_sekcji_szkolenia');
$tytul_sekcji_konferencje = get_field('tytul_sekcji_konferencje');


get_header();
?>

	<section id="o-mnie">
    <article>
      <div class="container clearfix">
        <div class="row justify-content-center">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="section-header">
              <i class="far fa-user-circle"></i>
              <h2 class="page-title"><?php echo $tytul_sekcji_o_mnie; ?></h2>
            </div><!-- section-header -->
            
            <p><?php echo $tresc_sekcji_o_mnie ?></p>
              <div class="section-header">
                <i class="fas fa-graduation-cap"></i>
                <h3><?php echo $tytul_sekcji_szkolenia ?></h3>
              </div> <!-- section header -->
              
              <table class="table" id="tabelka-szkolenia">
                <thread>
                  <tr>
                    <th scope="col">Kategoria szkolenia</th>
                    <th scope="col">Tytuł szkolenia</th>
                  </tr>
                </thread>
                <tbody>
                  <?php $szkolenia = new WP_Query( array( 'post_type' => 'szkolenia', 'orderby' => 'post_id', 'orderby' => 'ASC') ); ?>
                  <?php while( $szkolenia->have_posts() ) : $szkolenia->the_post(); ?>
                    <tr>
                      <th scope="row"><?php the_field('kategoria_szkolenia'); ?></th>
                      <td><?php the_title(); ?></td>
                    </tr>
                  <?php endwhile; wp_reset_postdata(); ?>
                  
                </tbody>
              </table>

              
              <!-- Arteterapia Unordered List-->
              <div class="section-header" id="konferencje">
                <i class="fas fa-chalkboard"></i>
                <h3><?php echo $tytul_sekcji_konferencje ?></h3>
              </div>
              <table class="table" id="tabelka-konferencje">
                <thread>
                  <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Rodzaj konferencji</th>
                  </tr>
                </thread>
                <tbody>
                  <?php $konferencje = new WP_Query( array( 'post_type' => 'konferencje', 'orderby' => 'post_id', 'orderby' => 'DSC') ); ?>
                  <?php while( $konferencje->have_posts() ) : $konferencje->the_post(); ?>
                    <tr>
                      <th scope="row"><?php the_field('data_konferencji'); ?></th>
                      <td><?php the_title(); ?></td>
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
