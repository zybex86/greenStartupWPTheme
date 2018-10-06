<?php
/**
 *  Template Name: Kontakt
 */
$uzytkownik_facebook      = get_field('uzytkownik_facebook');
$uzytkownik_twitter       = get_field('uzytkownik_twitter');
$uzytkownik_instagram     = get_field('uzytkownik_instagram');
$tytul_sekcji_kontakt     = get_field('tytul_sekcji_kontakt');
$nazwa_firmy              = get_field('nazwa_firmy');
$adres_firmy              = get_field('adres_firmy');
$mapa_dojazdu             = get_field('mapa_dojazdu');


get_header();
?>

	  <section id="kontakt">
    <article>
      <div class="container clearfix">
        <div class="container clearfix">
          <div class="row justify-content-center">
            <div class="col-sm-8 col-sm-offset-2">
              <div class="section-header">
                  <i class="fas fa-map-signs"></i>
                <h2 class="page-title"><?php echo $tytul_sekcji_kontakt; ?></h2>
              </div><!-- section-header -->
              <div class="text-center">
                <?php if( !empty($uzytkownik_facebook) ): ?>
                  <a href="https://www.facebook.com/<?php echo $uzytkownik_facebook; ?>" class="badge social facebook"><i class="fab fa-facebook-square"></i></a>
                <?php endif; ?>

                <?php if( !empty($uzytkownik_twitter) ): ?>
                  <a href="https://twitter.com/<?php echo $uzytkownik_twitter; ?>" class="badge social twitter"><i class="fab fa-twitter"></i></a>
                <?php endif; ?>
                
                <?php if( !empty($uzytkownik_instagram) ): ?>
                  <a href="https://www.instagram.com/<?php echo $uzytkownik_instagram; ?>" class="badge social instagram"><i class="fab fa-instagram"></i></a>
                <?php endif; ?>
                
              </div>
              <h2 class="text-center"><?php echo $nazwa_firmy; ?></h2>
              <h4 class="text-center"><?php echo $adres_firmy; ?></h4>
            </div><!-- col -->
          </div><!-- row -->
      </div><!-- container -->
    </article>

  </section>

  <section id="mapa" class="text-center">
    <img src="<?php echo $mapa_dojazdu['url']; ?>" alt="<?php echo $mapa_dojazdu['alt']; ?>" id="mapka" class="img-fluid">
  </section>
<?php
get_footer();
