<?php
/**
 * Extras file -  all CPT created here.
 * 
 * @package design-document/inc
 */


/**
 * Register CPT
 *
 * @return void
 */
function dd_register_cpt() {

    // personajes.
    $cpts = [];
    /**
     * Mecanicas de juego.
     * 
     * Este grupo engloba todas la mecánicas de juego.
     * Se puede subdividir en los siguientes grupos :
     * 
     *  - Generales
     *  - De mundo
     *  - De combate
     */
    $cpts['mecanicas'] = array(
        'public' 		        => true,
        'label'  		        => 'Mecánicas',
        'menu_icon' 	      => 'dashicons-admin-generic',
        'menu_position'     => 5,
        'supports'		      => array( 'title', 'editor', 'thumbnail' ),
    );

    /**
     * Personajes que aparecen en el
     * videojuego.
     * 
     * Se pueden dividir en los siguientes subgrupos:
     * - Principales
     * - Secundarios
     * - Enemigos
     * - NPCs
     */
    $cpts['personajes'] = array(
      'public' 		    => true,
      'has_archive' 	=> true,
      'label'  	    	=> 'Personajes',
      'menu_icon' 	  => 'dashicons-universal-access',
      'menu_position' => 5,
      'supports'		  => array( 'title', 'editor', 'thumbnail' ),
    );

    /**
     * Zonas de las que se compone el
     * mundo del videouego.
     * 
     * En un RPG se subdividen en los continentes.
     */
    $cpts['mundo'] = array(
      'public' 		    => true,
      'has_archive' 	=> true,
      'label'  		    => 'Mundo',
      'menu_icon' 	  => 'dashicons-admin-site',
      'menu_position' => 5,
      'supports'		  => array( 'title', 'editor', 'thumbnail' ),
    );
    
    /**
     * Comprende los posts relacionados con 
     * el argumento del juego.
     */
    $cpts['historia'] = array(
      'public' 		    => true,
      'has_archive' 	=> true,
      'label'  		    => 'Historia',
      'menu_icon' 	  => 'dashicons-book-alt',
      'menu_position' => 5,
      'supports'		  => array( 'title', 'editor', 'thumbnail' ),
    );

    /**
     * Modulos que componen el juego.
     * 
     * Se subdividen en :
     * - Principales
     * - Programacion
     * - Secundarios
     */
    $cpts['modulos'] = array(
      'public' 		    => true,
      'has_archive' 	=> true,
      'label'  		    => 'Modulos',
      'menu_icon' 	  => 'dashicons-media-code',
      'menu_position' => 5,
      'supports'		  => array( 'title', 'editor', 'thumbnail' ),
    );

    /**
     * Objetos que se pueden usar durante el transcurso del
     * juego.
     * 
     * Se pueden subdividir en :
     * - Items
     * - Equipamiento ( armas, armaduras, cascos, accesorios )
     * - Objetos clave
     */
    $cpts['objetos'] = array(
      'public' 		    => true,
      'has_archive' 	=> true,
      'label'  		    => 'Objetos',
      'menu_icon' 	  => 'dashicons-carrot',
      'menu_position' => 5,
      'supports'		  => array( 'title', 'editor', 'thumbnail' ),
    );

    foreach ( $cpts as $cpt_name => $data ) {
      register_post_type( $cpt_name, $data );
    }

    
}
add_action( 'init', 'dd_register_cpt' );