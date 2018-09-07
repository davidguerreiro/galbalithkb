<?php
/**
 * Home Template
 * 
 * Template Name: Home
 * 
 * This page displays the home page for logged in users
 * 
 * @package design-document/templates
 */

 get_header();
 
 include( locate_template( 'modules/m002-hero.php' ) );

 include( locate_template( 'modules/m003-search-form.php' ) );

 include( locate_template( 'modules/m004-data-list-parent.php' ) );

 get_footer();