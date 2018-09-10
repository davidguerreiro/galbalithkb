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

 foreach ( $post_types as $post_type_name ) {
     $post_type = get_post_type_object( $post_type_name );
 }

?>

<section class="data-list">
    <?php
        foreach ( $post_types as $post_type_name ) {
            $post_type = get_post_type_object( $post_type_name );
            include( locate_template( 'template-parts/parent-data-list-item.php' ) );
        }
    ?>
</section>