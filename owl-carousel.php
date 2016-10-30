<?php
/*
Plugin Name: mmbeta Owl Carousel
Plugin URI: http://owlgraphic.com/owlcarousel/
Description: Wordpress Plugin integrating Owl Carousel
Author: Thomas Strothjohann
Version: 1.0
Author URI: http://codereporter.de
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
  die;
}

/**
 * Enqueue scripts and styles.
 */
function owl_scripts() {
  wp_enqueue_style( 'owl-carousel', plugins_url( 'owl.carousel.css', __FILE__ ) );
  wp_enqueue_style( 'owl-carousel-theme', plugins_url( 'owl.theme.css', __FILE__ ) );
  wp_enqueue_script( 'owl-carousel-js', plugins_url( 'owl.carousel.min.js', __FILE__ ) , array( 'jquery' ), '20161030', true );
}
add_action( 'wp_enqueue_scripts', 'owl_scripts' );