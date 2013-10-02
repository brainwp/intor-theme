<?php

/**
 * Adicionamos uma acção no inicio do carregamento do WordPress
 * através da função add_action( 'init' )
 */
add_action( 'init', 'create_post_type_medicos' );

/**
 * Esta é a função que é chamada pelo add_action()
 */
function create_post_type_medicos() {

    /**
     * Labels customizados para o tipo de post
     * 
     */
    $labels = array(
	    'name' => _x('Médicos', 'post type general name'),
	    'singular_name' => _x('Médico', 'post type singular name'),
	    'add_new' => _x('Adicionar Médico', 'medico'),
	    'add_new_item' => __('Novo Médico'),
	    'edit_item' => __('Editar Médico'),
	    'new_item' => __('Novo Médico'),
	    'all_items' => __('Editar Médicos'),
	    'view_item' => __('Ver Médico'),
	    'search_items' => __('Procurar Médicos'),
	    'not_found' =>  __('Nenhum Médico encontrado'),
	    'not_found_in_trash' => __('Nenhum Médico encontrado no lixo'),
	    'parent_item_colon' => '',
	    'menu_name' => 'Medicos'
    );
    
    /**
     * Registamos o tipo de post medicos através desta função
     * passando-lhe os labels e parâmetros de controlo.
     */
    register_post_type( 'medicos', array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'has_archive' => 'medicos',
	    'rewrite' => array(
		 'slug' => 'medico',
		 'with_front' => false,
	    ),
	    'capability_type' => 'post',
	    'has_archive' => true,
	    'hierarchical' => true,
	    'menu_position' => null,
	    'supports' => array('title','editor','thumbnail')
	    )
    );
    
}