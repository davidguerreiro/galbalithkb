<?php
/**
 * M004 - This module displays a parent list of items
 * to navigate throught.
 * 
 * This module displays the logo and the main menu.
 * 
 * @package design-document/modules
 */
 
 $args = [
     'public'   => true,
     '_builtin' => false,
 ];

 $post_types = get_post_types( $args );

 // var_dump( $post_types );
 // die( 'herethere' );

?>

<section class="data-list">
    
</section>