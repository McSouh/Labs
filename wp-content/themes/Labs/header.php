<!DOCTYPE html>
<html lang="en">

<head>
  <title>Labs - Design Studio</title>
  <meta charset="UTF-8">
  <meta name="description" content="Labs - Design Studio">
  <meta name="keywords" content="lab, onepage, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" rel="shortcut icon" />

  <?php wp_head() ?>


</head>

<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
      <h2>Loading.....</h2>
    </div>
  </div>


  <!-- Header section -->
  <header class="header-section">
    <div class="logo">
    <!-- Logo -->
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
    
      <?php
        // https://developer.wordpress.org/reference/functions/wp_nav_menu/
                wp_nav_menu([
                  // 'menu' => 'main-menu',
                  'menu_class' => 'menu-list',
                  'theme_location' => 'main-menu',
                  'container' => ''
                ]);
                ?>
    </nav>
  </header>
  <!-- Header section end -->

  <!-- FIN HEADER
    ============================================ -->
    <?php 
  if(!is_front_page()){
      ?>
        <div class="page-top-section">
            <div class="overlay"></div>
            <div class="container text-right">
            <div class="page-info">
                <h2><?= $post->post_title; ?></h2>
                <div class="page-links">
                <a href="<?= get_home_url(); ?>">Home</a>
                <span><?= $post->post_title; ?></span>
                </div>
            </div>
            </div>
        </div>
      <?php
  }
  
  
  ?>
    