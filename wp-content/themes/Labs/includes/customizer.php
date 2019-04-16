<?php
class MgCustomizer
{
  public static function customize_discover($wp_customize)
  {
    $wp_customize->add_panel('panel-home', [
      'title' => __('Home Page'),
      'Description' => __('Home customization')
    ]);
    $wp_customize->add_section('section-discover', [
      'panel' => 'panel-home',
      'title' => __('Discover section'),
      'description' => __('Customize the discover section text')
    ]);
    $wp_customize->add_setting('discover-title', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_setting('discover-content-1', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_setting('discover-content-2', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_control('discover-title-control', [
      'section' => 'section-discover',
      'settings' => 'discover-title',
      'label' => __('Discover title'),
      'type' => 'textarea'
    ]);
    $wp_customize->add_control('discover-content-control-1', [
      'section' => 'section-discover',
      'settings' => 'discover-content-1',
      'label' => __('Discover content'),
      'type' => 'textarea'
    ]);
    $wp_customize->add_control('discover-content-control-2', [
      'section' => 'section-discover',
      'settings' => 'discover-content-2',
      'label' => __('Discover content'),
      'type' => 'textarea'
    ]);
  }
  public static function customize_youtube($wp_customize)
  {
    $wp_customize->add_section('section-youtube', [
      'panel' => 'panel-home',
      'title' => __('Youtube video'),
      'description' => __('Customize the youtube video')
    ]);
    $wp_customize->add_setting('youtube', [
      'type' => 'theme_mod',
      'default' => 'JgHfx2v9zOU',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_control('youtube-control', [
      'section' => 'section-youtube',
      'settings' => 'youtube',
      'label' => __('Youtube id'),
      'type' => 'textarea'
    ]);
  }
  public static function customize_carousel($wp_customize)
  {
    $wp_customize->add_section('section-carousel', [
      'panel' => 'panel-home',
      'title' => __('Carousel'),
      'description' => __('Customize the carousel')
    ]);
    $wp_customize->add_setting('carousel-1', [
      'type' => 'theme_mod'
    ]);
    $wp_customize->add_setting('carousel-2', [
      'type' => 'theme_mod'
    ]);
    $wp_customize->add_setting('carousel-3', [
      'type' => 'theme_mod'
    ]);
    $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'carousel-control-1',
          array(
              'label'      => __( 'Image 1', 'theme_name' ),
              'section'    => 'section-carousel',
              'settings'   => 'carousel-1' 
          )
      )
  );
    $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'carousel-control-2',
          array(
              'label'      => __( 'Image 2', 'theme_name' ),
              'section'    => 'section-carousel',
              'settings'   => 'carousel-2' 
          )
      )
  );
    $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'carousel-control-3',
          array(
              'label'      => __( 'Image 3', 'theme_name' ),
              'section'    => 'section-carousel',
              'settings'   => 'carousel-3' 
          )
      )
  );
  }
}
add_action('customize_register', [MgCustomizer::class, 'customize_carousel']);
add_action('customize_register', [MgCustomizer::class, 'customize_discover']);
add_action('customize_register', [MgCustomizer::class, 'customize_youtube']);