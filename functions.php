<?php
function nirvana_burdick_enqueue_styles() {

  $parent_style = 'nirvanas';
  wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
  wp_enqueue_style('nirvana_burdick',
    get_stylesheet_directory_uri() . '/css/style.css',
    array($parent_style), 
    wp_get_theme()->get('Version')
  );
}

add_action('wp_enqueue_scripts', 'nirvana_burdick_enqueue_styles');

function hero_widgets_init() {
  register_sidebar( array(
    'name' => 'Hero area',
    'id' => 'hero-image-widget',
    'before_widget' => '<div id="%1$s" class="hero-iamge">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ) );
}

add_action('widgets_init', 'hero_widgets_init');

function footer_bottom_widgets_init() {
  register_sidebar( array(
    'name' => 'Footer bottom',
    'id' => 'footer-bottom-widget',
    'before_widget' => '<div id="%1$s" class="footer-bottom">',
    'after_widget' => '</div>',
  ) );
}


add_action('widgets_init', 'footer_bottom_widgets_init');
