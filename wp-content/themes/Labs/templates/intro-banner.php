  <!-- Intro Section -->
  <div class="hero-section">
    <div class="hero-content">
      <div class="hero-center">
        <img src="<?php echo get_template_directory_uri(); ?>/img/big-logo.png" alt="">
        <p><?= get_bloginfo('description') ?></p>
      </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">

        <?php if(get_theme_mod('carousel-1')){ ?>
      <div class="item  hero-item" data-bg="<?= get_theme_mod('carousel-1') ?>"></div>
        <?php } ?>
        <?php if(get_theme_mod('carousel-2')){ ?>
      <div class="item  hero-item" data-bg="<?= get_theme_mod('carousel-2') ?>"></div>
        <?php } ?>
        <?php if(get_theme_mod('carousel-3')){ ?>
      <div class="item  hero-item" data-bg="<?= get_theme_mod('carousel-3') ?>"></div>
        <?php } ?>

    </div>
  </div>
  <!-- Intro Section -->