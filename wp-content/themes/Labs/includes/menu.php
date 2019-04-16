<?php
/**
 * Fonction qui ajoute un menu au thème.
 *
 * @return void
 */
function register_main_menu()
{
  register_nav_menu('main-menu', 'Main menu in header.');
}
 add_action('after_setup_theme', 'register_main_menu');

/**
 * Fonction qui ajoute la classe active au lien du menu actif
 *
 * @param [type] $classes
 * @param [type] $item
 * @return void
 */
function special_nav_class(array $classes, $item){
    if( in_array('current-menu-item', $classes) ){
        $classes[] = 'active';
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

  
