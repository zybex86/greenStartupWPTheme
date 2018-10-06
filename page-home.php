<?php
/**
 *  Template Name: Home Page
 */

 /* =============================
    Variables
    ============================= */

$tekst_cytatu             = get_field('tekst_cytatu');
$zrodlo_cytatu            = get_field('zrodlo_cytatu');
$zdjecie_wlasciciela      = get_field('zdjecie_wlasciciela');
$krotkie_bio_tytul        = get_field('krotkie_bio_tytul');
$krotkie_bio_tekst        = get_field('krotkie_bio_tekst');

get_header();
?>

	<!-- HERO -->
  <section id="hero">
    <article>
      <div class="container clearfix">
        <div class="row">
          
          
          <div class="col-lg-7 hero-text">
            <blockquote class="blockquote text-right">
              <p class="mb-0"><?php echo $tekst_cytatu; ?></p>
              <footer class="blockquote-footer"><?php echo $zrodlo_cytatu; ?></footer>
            </blockquote>
            
          </div><!-- col -->
          <div class="col-lg-5 text-center mx-auto">
            <div>
            <img src="<?php echo $zdjecie_wlasciciela['url']; ?>" alt="<?php echo $zdjecie_wlasciciela['alt']; ?>" class="logo img-fluid">
            </div>
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- container -->
    </article>

  </section><!-- HERO -->

<!-- Misja -->
<section id="misjaMain">
  <article>
    <div class="container clearfix">
      <div class="row justify-content-center">
        <div class="col-sm-8 col-sm-offset-2">
      <div class="section-header">
        <i class="fas fa-handshake"></i>
        <h2 class="page-title"><?php echo $krotkie_bio_tytul; ?></h2>
    </div><!-- section-header -->
    <p class="lead text-center"><?php echo $krotkie_bio_tekst; ?></p>
        </div><!-- col -->
      </div><!-- row -->
    </div><!-- container -->
  </article>

</section><!-- HERO -->

<?php
get_footer();
