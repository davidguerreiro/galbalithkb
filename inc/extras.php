<?php
/**
 * Extras file -  all CPT created here.
 * 
 * @package design-document/inc
 */

 /**
 * PHP display all errors
 * 
 * @return void
 */
function dd_php_display_all_errors() {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}


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
        'has_archive'       => true,
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
     * - Items ( Consumibles )
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

    /**
     * Glosario que engloba conceptos y definiciones varias
     * relacionadas con el juego.
     */
    $cpts['glosario'] = array(
      'public' 		    => true,
      'has_archive' 	=> true,
      'label'  		    => 'Glosario',
      'menu_icon' 	  => 'dashicons-tag',
      'menu_position' => 5,
      'supports'		  => array( 'title', 'editor', 'thumbnail' ),
    );

    foreach ( $cpts as $cpt_name => $data ) {
      register_post_type( $cpt_name, $data );
    }

    
}
add_action( 'init', 'dd_register_cpt' );


/**
 * Register taxonomies for CPTs
 * 
 * @return void
 */
function dd_create_book_tax() {

  // tipos de mecanicas.
	register_taxonomy(
		'tipos-mecanicas',
		'mecanicas',
		array(
			'label' => __( 'Tipo de Mecánica' ),
			'rewrite' => array( 'slug' => 'tipos-mecanicas' ),
			'hierarchical' => true,
		)
  );

  // tipos de personajes.
	register_taxonomy(
		'tipos-personajes',
		'personajes',
		array(
			'label' => __( 'Tipo de Personaje' ),
			'rewrite' => array( 'slug' => 'tipos-personajes' ),
			'hierarchical' => true,
		)
  );

  // regiones.
	register_taxonomy(
		'regiones',
		'mundo',
		array(
			'label' => __( 'Region' ),
			'rewrite' => array( 'slug' => 'regiones' ),
			'hierarchical' => true,
		)
  );

  // tipo de mapa
  register_taxonomy(
		'tipo-mapa',
		'mundo',
		array(
			'label' => __( 'Tipo de Mapa' ),
			'rewrite' => array( 'slug' => 'tipo-mapa' ),
			'hierarchical' => true,
		)
  );
  
  // tipos de mecanicas.
	register_taxonomy(
		'tipos-mecanicas',
		'mecanicas',
		array(
			'label' => __( 'Tipo de Mecánica' ),
			'rewrite' => array( 'slug' => 'tipos-mecanicas' ),
			'hierarchical' => true,
		)
  );

  // tipos de modulos.
	register_taxonomy(
		'tipos-modulo',
		'modulos',
		array(
			'label' => __( 'Categoría de Módulo' ),
			'rewrite' => array( 'slug' => 'tipos-modulos' ),
			'hierarchical' => true,
		)
  );
  
  // tipos de mecanicas.
	register_taxonomy(
		'tipos-objetos',
		'objetos',
		array(
			'label' => __( 'Tipo de Objeto' ),
			'rewrite' => array( 'slug' => 'tipos-objetos' ),
			'hierarchical' => true,
		)
  );

  // periodos - etapas de la historia del juego.
	register_taxonomy(
		'periodos',
		'historia',
		array(
			'label' => __( 'Periodo' ),
			'rewrite' => array( 'slug' => 'periodos' ),
			'hierarchical' => true,
		)
  );

}

add_action( 'init', 'dd_create_book_tax' );

/**
 * Custom login form in homepage.
 * 
 * @return void
 */
function dd_process_homepage_form() {
  if ( ! isset( $_POST['action'] ) || ! isset( $_POST['nonce'] ) || ! isset( $_POST['user-email'] ) || ! isset( $_POST['user-pass'] )) {
    return;
  }

  if ( $_POST['action'] !== 'login' || ! wp_verify_nonce( $_POST['nonce'], 'login' ) ) {
    return;
  }

  $status = true;
  if ( empty( $_POST['user-email'] ) || strrpos( $_POST['user-email'], '@' ) === false ){
    $status = false;
  }
  if ( empty( $_POST['user-pass'] ) ) {
    $status = false;
  }

  if ( ! $status ) {
    dd_error_redirect( 'invalid-data' );
  }

  $user_email = sanitize_email( $_POST['user-email'] );
  $args       = [
    'user_login'    => $user_email,
    'user_password' => $_POST['user-pass'],
    'remember'      => true,
  ];

  $current_user = wp_signon( $args, true );

  if ( is_wp_error( $current_user ) ) {
    dd_error_redirect( 'no-match' );
  } else {
    // set current user and cookies
    wp_set_current_user( $current_user->ID );
    wp_set_auth_cookie( $current_user->ID );
    // redirects the user to member area archive page.
    $homepage = get_page_by_title( 'Homepage' );
    wp_safe_redirect( get_permalink( $homepage->ID ) );
    exit;
  }
}

add_action( 'init', 'dd_process_homepage_form' );

/**
 * Send notification to custom form
 * 
 * @param string $id Notification id
 * @return string $not
 */
function dd_get_form_notification( $id ) {
  $not = 'An error has occur, please try again later';

  switch ( $id ) {
    case 'invalid-data' :
      $not = 'One or more fields are empty or your email address is not valid';
      break;
    case 'no-match' :
      $not = 'The user and password provided do not match our records';
      break;
  }

  return $not;
}

/**
 * Redirects user when an error ocurrs in the form
 * 
 * @param string $key Error key
 * @param string $url Url to be redirected
 * @return void
 */
function dd_error_redirect( $key, $url = null ) {
  $url = ( is_null( $url ) ) ? get_home_url() : esc_url( $url );
  $url = add_query_arg( 'error-key', $key, $url );
  wp_safe_redirect( $url );
  exit;
}

/**
 * Register menu
 * 
 * @return void
 */
function dd_register_menus() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'dd' ) );
}

add_action( 'after_setup_theme', 'dd_register_menus' );

/**
 * Remove admin login header.
 *
 * @return void
 */
function remove_admin_login_header() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');