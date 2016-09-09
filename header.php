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
<script src="https://use.fontawesome.com/d95a83ce12.js"></script>

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>

<div class="wrapper clearfix">
<header>
  <div class="nav-wrapper">
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/heyross/img/maranaLogo.svg">
      </a>
    </h1>

    <?php if( is_front_page() || is_page('process') || is_page('about') || is_page('contact')  ): ?>
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
    <div class="socialBtns">
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
    </div>
    </div>
  </div>

</header><!--/.header-->


  
</div>
