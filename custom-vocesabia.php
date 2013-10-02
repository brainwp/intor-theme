<?php
/**
 * Adicionamos uma ação no inicio do carregamento do WordPress
 * através da função add_action( 'init' )
 */
add_action( 'init', 'create_post_type_vocesabia' );

/**
 * Esta é a função que é chamada pelo add_action()
 */
function create_post_type_vocesabia() {

/**
* Labels customizados para o tipo de post vocesabia
*/
    $labels = array(
	    'name' => _x('Você Sabia?', 'post type general name'),
	    'singular_name' => _x('Item', 'post type singular name'),
	    'add_new' => _x('Novo Item', 'item'),
	    'add_new_item' => __('Novo Item'),
	    'edit_item' => __('Editar Item'),
	    'new_item' => __('Novo Item'),
	    'all_items' => __('Todos Itens'),
	    'view_item' => __('Ver Item'),
	    'search_items' => __('Procurar Itens'),
	    'not_found' =>  __('Nenhum item encontrado'),
	    'not_found_in_trash' => __('Nenhum item encontrado no lixo'),
	    'parent_item_colon' => '',
	    'menu_name' => 'Você Sabia?'
    );
    
/**
* Registamos o tipo de post vocesabia através desta função
* passando-lhe os labels e parâmetros de controlo.
*/
    register_post_type( 'vocesabia', array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'has_archive' => 'vocesabia',
	    'rewrite' => array(
		 'slug' => 'vs',
		 'with_front' => false,
	    ),
	    'capability_type' => 'post',
	    'has_archive' => true,
	    'hierarchical' => true,
	    'menu_position' => null,
	    'supports' => array('title','editor')
	    )
    );
}
?>