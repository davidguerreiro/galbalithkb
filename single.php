<?php
/**
 * Template used to display single post content
 * 
 * @package design-document
 */

 
 get_header();

 get_template_part( 'modules/m006', 'post-single-header' );
 
 get_template_part( 'modules/m007', 'post-single-content' );

 get_footer();