<?php
/**
 * M001 - Header
 * 
 * This module displays the logo and the main menu.
 * 
 * @package design-document/modules
 */

$cover_image = get_template_directory_uri() . '/assets/img/web_cover.png';

?>

<section class="page-header">
    <div class="page-header__img-wrap">
        <img src="<?php echo esc_url( $cover_image ); ?>" alt="logo">
    </div>
    <?php echo wp_nav_menu( ['menu' => 'primary'] ); ?>
</section>