<?php


function init_template()
{
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'init_template');

function assets()
{
  wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', '', '4.5.3', 'all');

  wp_register_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', '', '1.0', 'all');

  wp_enqueue_style('style', get_stylesheet_uri(), array('bootstrap', 'montserrat'), '1.0', 'all');


  wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', ' ',  '1.16.1', true);

  wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js', array('jquery', 'popper'), '4.5.3', 'all');

  wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/index.js', '', '1.0', true);

}




add_action('wp_enqueue_scripts', 'assets');
