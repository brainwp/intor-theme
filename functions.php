<?php

require_once (get_stylesheet_directory() . '/admin/admin_options.php');
require_once (get_stylesheet_directory() . '/includes/class_remove_acentos.php');
require_once (get_stylesheet_directory() . '/includes/class_breadcrumb.php');
require_once (get_stylesheet_directory() . '/includes/custom_medicos.php');
require_once (get_stylesheet_directory() . '/custom-vocesabia.php');

// Função do Carousel na Unha.
function load_caroufredsel() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery-intor', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
	wp_enqueue_script('jquery-intor');	
	wp_register_script( 'caroufredsel', get_stylesheet_directory_uri() . '/js/jquery.carouFredSel-6.1.0-packed.js' );
	wp_enqueue_script( 'caroufredsel' );
    wp_enqueue_script( 'caroufredsel_pre', get_stylesheet_directory_uri() . '/js/caroufredsel_pre.js' );
    wp_enqueue_script( 'mobile-nav', get_stylesheet_directory_uri() . '/js/mobile_nav.js', array('jquery-intor') );
}
add_action( 'wp_enqueue_scripts', 'load_caroufredsel' );

//wp_deregister_script('jquery');

if(!is_admin()) {
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js' );
	wp_enqueue_script( 'jquery' );
}

register_nav_menu( 'um', __( 'Primeiro Menu Rodape', 'twentyeleven' ) );
register_nav_menu( 'dois', __( 'Segundo Menu Rodape', 'twentyeleven' ) );
register_nav_menu( 'tres', __( 'Terceiro Menu Rodape', 'twentyeleven' ) );

// Função para imprimir o nome do menu
function echo_name_menu( $location ) {
    if( empty($location) ) return false;

    $locations = get_nav_menu_locations();
    if( ! isset( $locations[$location] ) ) return false;

    $menu_obj = get_term( $locations[$location], 'nav_menu' );

    return /*$menu_obj*/;
}

/* Adiciona Excerpt as Pages */
function my_init() {
  add_post_type_support('page', array('excerpt'));
}
add_action('init', 'my_init');


/* Remove o Continue Reading no child theme do TwentyTen */
class Transformation_Text_Wrangler {
function reading_more($translation, $text, $domain) {
$translations = &get_translations_for_domain( $domain );
if ( $text == 'Continue reading <span class="meta-nav">&rarr;</span>' ) {
return $translations->translate( '' );
}
return $translation;
}
}
add_filter('gettext', array('Transformation_Text_Wrangler', 'reading_more'), 10, 4);


/* Muda o limite do the_excerpt no child theme do TwentyTen. Use echo excerpt( 50 ); */
function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return nl2br($excerpt);
    }

add_image_size( 'thumb-reblogando', 80, 60 );
add_image_size( 'thumb-medicos', 150, 150 );
add_image_size( 'noticias-home', 310, 120, true );

/** Adiciona metabox Link **/
$prefix = 'br_';

$meta_box = array(
    'id' => 'my-meta-box',
    'title' => 'Link Re-Blogando',
    'page' => 'post',
    'context' => 'side',
    'priority' => 'high',
    'fields' => array(
        array(
            'name' => 'URL',
            'desc' => '<p style="color:#bfbfbf; font-size=9px">Adicione a URL para a not&iacute;cia que deseja re-blogar</p>',
            'id' => $prefix . 'text',
            'type' => 'text',
            'std' => ''
        ),

    )
);

add_action('admin_menu', 'mytheme_add_box');

// Add meta box
function mytheme_add_box() {
    global $meta_box;

    add_meta_box($meta_box['id'], $meta_box['title'], 'mytheme_show_box', $meta_box['page'], $meta_box['context'], $meta_box['priority']);
}

// Callback function to show fields in meta box
function mytheme_show_box() {
    global $meta_box, $post;

// Use nonce for verification
echo '<input type="hidden" name="mytheme_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';

echo '<table class="form-table">';

foreach ($meta_box['fields'] as $field) {
     // get current post meta data
     $meta = get_post_meta($post->ID, $field['id'], true);

     echo '<tr>',
                '<th style="width:10%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
                '<td>';
        switch ($field['type']) {
            case 'text':
                echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:99%" />', '<br />', $field['desc'];
                break;
        }
        echo     '<td>',
            '</tr>';
    }
    echo '</table>';
}

add_action('save_post', 'mytheme_save_data');

// Save data from meta box
function mytheme_save_data($post_id) {
    global $meta_box;

    // verify nonce
    if (!wp_verify_nonce($_POST['mytheme_meta_box_nonce'], basename(__FILE__))) {
        return $post_id;
    }

    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }

    // check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return $post_id;
        }
    } elseif (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }

    foreach ($meta_box['fields'] as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];

        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    }
}

if ( function_exists('register_sidebar') )
    register_sidebar( array(
   'name' => __( 'Linguas'),
   'id' => 'linguas',
   'description' => __( 'Widget destinado a Traducao', 'twentyeleven' ),
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget' => "</aside>",
   'before_title' => '<h3 class="widget-title">',
   'after_title' => '</h3>',
   ) );

/** Remove metabox dos posts **/
function remove_post_custom_fields() {
	remove_meta_box( 'postcustom' , 'post' , 'normal' );
	remove_meta_box( 'postexcerpt', 'post', 'normal' );
	remove_meta_box( 'trackbacksdiv', 'post', 'normal' );
	remove_meta_box( 'revisionsdiv', 'post', 'normal' );
	remove_meta_box( 'tagsdiv-post_tag', 'post', 'normal' );
	remove_meta_box( 'slugdiv', 'post', 'normal' );
	remove_meta_box( 'authordiv', 'post', 'normal' );
}
add_action( 'admin_menu' , 'remove_post_custom_fields' );

/** Remove widgets do admin **/
function example_remove_dashboard_widgets() {
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );

} 

// Hook into the 'wp_dashboard_setup' action to register our function
add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets' );

// Cria Widget no Admin
function my_custom_dashboard_widgets() {  
global $wp_meta_boxes;  
  
wp_add_dashboard_widget('custom_help_widget', 'Seja Bem Vindo', 'custom_dashboard_help');  
}  
  
function custom_dashboard_help() {  
echo get_option('mo_text_saud');  
}  
  
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function id_por_slug( $slug ) {
    $page = get_page_by_path( $slug );
    if ( $page ) {
        return $page->ID;
    } else {
        return null;
    }
}

// Função de Post Thumbnail como Background
function thumbnail_bg ( $tamanho = 'thumbnail' ) {
	global $post;
    $get_post_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $tamanho, false, '' );
    echo 'style="background: url('.$get_post_thumbnail[0].' )"';
}



?>