<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link href="https://fonts.googleapis.com/css?family=Taviraj:300,400,600" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<script src="https://use.fontawesome.com/d95a83ce12.js"></script>


  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>

<div class="wrapper clearfix">

<header class="clearfix">
  <div class="nav-wrapper clearfix">

    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/heyross/img/maranaLogo.svg">
      </a>
    </h1>
    

    <?php if( !is_page(array('kitchen', 'bathroom', 'living-room','bedroom', 'walk-in-closets', 'libraries', 'powder-rooms', 'wine-rooms', 'portfolio')) ): ?>
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>

    <?php else : ?>

      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'secondary'
      )); ?>

    <?php endif ?>

    <div class="consultation">
      <p>Book Consultation</p>
    <!-- <div class="socialBtns">
      <ul>
        <li>
          <a href=""><i class="fa fa-facebook" aria-hidden="true"></a></i>
        </li>
        <li>
          <a href=""><i class="fa fa-instagram" aria-hidden="true"></a></i>
        </li>
        <li>
          <a href=""><i class="fa fa-houzz" aria-hidden="true"></i></a></i>
        </li>
      </ul>
    </div> -->
    </div>
  </div>
  <!--  -->
  <div class="nav-wrapper-mobile clearfix">

      <h1>
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/heyross/img/maranaLogo.svg">
        </a>
      </h1>
      <div class="hamMenu">
        <div class="nav">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
      </div>
      <!--  -->
  </div>
  <!--  -->
  <div class="nav-container-mobile">
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
  <!--  -->
  <div class="nav-container-mobile-bottom">
    <div class="icon">
      <ul>
        <li>
          <a href="tel:4162593445"><i class="fa fa-phone" aria-hidden="true"></a></i>
        </li>
        <li>
          <a href="<?php bloginfo( 'url' ); ?>/contact/"><i class="fa fa-envelope-o" aria-hidden="true"></a></i>
        </li>
        <li>
          <a href="<?php bloginfo( 'url' ); ?>/maps-mobile"><i class="fa fa-map-marker" aria-hidden="true"></i></a></i>
        </li>
      </ul>
    </div>
    <div class="consult"><p>Book a consultation</p></div>
    <!-- <div class="social">
      <ul>
        <li>
          <a href=""><i class="fa fa-facebook" aria-hidden="true"></a></i>
        </li>
        <li>
          <a href=""><i class="fa fa-instagram" aria-hidden="true"></a></i>
        </li>
        <li>
          <a href=""><i class="fa fa-houzz" aria-hidden="true"></i></a></i>
        </li>
      </ul>
    </div> -->
  </div>
  <!--  -->
  </div>
</header>

</div>
<!--  -->

