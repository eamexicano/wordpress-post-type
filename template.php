<?php
/*
Plugin Name: Nombre del tipo de publicación
Plugin URI: www.example.com
Description: Descripción del tipo de publicación
Version: 0.1.0
Author:  Tu nombre
Author URI: www.example.org
License: MIT
*/

function crear_publicacion_personalizada() {
  $etiquetas = array(
    'name' => __( '{}' ),
    'singular_name' => __( '{}' ),
    'add_new' => __( 'Nueva {}' ),
    'add_new_item' => __( 'Agregar {}' ),
    'edit_item' => __( 'Editar {}' ),
    'new_item' => __( 'Nueva {}' ),
    'view_item' => __( 'Ver {}' ),
    'search_items' => __( 'Buscar {}' ),
    'not_found' => __('No se encontraron {}'),
    'not_found_in_trash' => __('No se encontraron {} en la basura'), 
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
    'rewrite' => array('slug' => '{}', 'with_front' => true)
  );

  register_post_type('{}', $parametros);
}

add_action('init', 'crear_publicacion_personalizada');
add_action( 'pre_get_posts', 'mostrar_en_la_pagina_principal' );

function mostrar_en_la_pagina_principal( $query ) {
	if ( is_home() && $query->is_main_query()) {
	  		$query->set( 'post_type', array( 'post',  'incrustacion') ); 
	}  	
       return $query;
}
?>