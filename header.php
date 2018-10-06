<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Green_Startup
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

<!-- BOOTSTRAP -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css">

<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Merriweather:400,700" rel="stylesheet">

<!-- FONT AWESOME -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'greenstartup' ); ?></a>

<div class="container">
<div class="tabelka"><div id="toTopButton"><i class="far fa-arrow-alt-circle-up"></i><span id="test"></span></div></div>
<!-- HEADER -->

<header class="site-header text-center" role="banner">
      <div class="container">
        <a href="/" id="brandLogo"><strong>D</strong>orota <strong>G</strong>radowska</a>
        <audio id="myAudio" src="<?php bloginfo('stylesheet_directory'); ?>/bensound-adaytoremember.mp3" preload="auto">
        </audio>
        <div class="tabelka"><a onClick="togglePlay()" id="music"><i class="fas fa-volume-down" id="volume"></i></a></div>
      </div>
    </header>
		<!-- NAVIGATION -->
		
		<?php
    wp_nav_menu([
      'menu'            => 'primary',
      'theme_location'  => 'menu-1',
      'container'       => false,
      'menu_id'         => false,
      'menu_class'      => 'nav nav-pills justify-content-center',
      'depth'           => 0,
      'fallback_cb'     => 'bs4navwalker::fallback',
      'walker'          => new bs4navwalker()
    ]);
  ?>

    
        