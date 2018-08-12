<?php
/**
 * Main PHP theme functions file
 * 
 * @package design-document
 */

 // add featured images support.
 add_theme_support( 'post-thumbnails' );

 /**
  * Extra code file
  */
  include get_template_directory() . '/inc/extras.php';
  