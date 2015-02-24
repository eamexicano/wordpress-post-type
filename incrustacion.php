<?php
/*
Plugin Name: incrustar
Plugin URI: blog.eamexicano.com
Description: Permite incrustar un url externa como parte del contenido del blog 
Version: 0.1.0
Author:  eamexicano
Author URI: www.eamexicano.com
License: GPLv2
*/

function crear_publicacion_personalizada() {
  $etiquetas = array(
    'name' => __( 'Incrustar' ),
    'singular_name' => __( 'Incrustar' ),
    'add_new' => __( 'Nueva incrustación' ),
    'add_new_item' => __( 'Agregar Incrustación' ),    
    'edit_item' => __( 'Editar Incrustación' ),
    'new_item' => __( 'Nueva Incrustación' ),
    'view_item' => __( 'Ver Incrustaciones' ),
    'search_items' => __( 'Buscar incrustaciones' ),
    'not_found' => __('No se encontraron incrustaciones'),
    'not_found_in_trash' => __('No se encontraron incrustaciones en la basura'), 
    'menu_name' => __("Incrustar")
  );
  
  $parametros = array(
    'labels' => $etiquetas,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'menu_position' => 25,
    'hierarchical' => false, 
    'capability_type' => 'post',
    'supports' => array('title', 'author', 'revisions'),
    'can_export' => true, 
    'has_archive' => true,
    'rewrite' => array('slug' => 'incrustacion', 'with_front' => true)
  );

  register_post_type('incrustacion', $parametros);
}

add_action('init', 'crear_publicacion_personalizada');
add_action( 'pre_get_posts', 'mostrar_incrustaciones_en_la_pagina_principal' );

function mostrar_incrustaciones_en_la_pagina_principal( $query ) {
	if ( is_home() && $query->is_main_query()) {
	  		$query->set( 'post_type', array( 'post',  'incrustacion') ); 
	}  	
       return $query;
}
?>