<?php

function noticias_register() {

    $labels = array(
        'name' => _x('Noticias', 'post type general name'),
        'singular_name' => _x('canciones', 'post type singular name'),
        'add_new' => _x('Agregar noticias', 'slideshow_two item'),
        'add_new_item' => __('Agregar noticias'),
        'edit_item' => __('Editar noticias'),
        'new_item' => __('Nuevo noticias'),
        'view_item' => __('Ver el noticias'),
        'search_items' => __('Buscar noticias'),
        'not_found' =>  __('No se encontraron'),
        'not_found_in_trash' => __('No se encontraron en la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
		'exclude_from_search' => false,
        'capability_type' => 'post', //puede cambiar por 'page'
        'menu_icon'  => 'dashicons-welcome-widgets-menus',
        'hierarchical' => false,
        'menu_position' => null,
        'supports'=> array( 'title','thumbnail', 'excerpt', 'editor'), //Modificar tipo de contenido de post
        'rewrite' => array('slug' => 'noticias', 'with_front' => false)
    ); 

    register_post_type( 'noticias' , $args );
}
    add_action('init', 'noticias_register');

    /*categorías personalizadas, taxonomía de categoría separada para que no se funcione con categorías
    de post*/
    function categoria_noticias() {

        register_taxonomy(
            'categoria-noticias',
            'noticias',
            array(
                'label' => __( 'Categoria' ),
                'rewrite' => array( 'slug' => 'categoria-noticias' ),
                'hierarchical' => true, //Herencia categorías y sub categorías
                // Allow automatic creation of taxonomy columns on associated post-types table?
                'show_admin_column'   => true,
                // Show in quick edit panel?
                'show_in_quick_edit'  => true,
            )
        );
    }
    add_action( 'init', 'categoria_noticias' );
