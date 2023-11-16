<?php

function comunicados_register() {

    $labels = array(
        'name' => _x('Comunicados', 'post type general name'),
        'singular_name' => _x('canciones', 'post type singular name'),
        'add_new' => _x('Agregar comunicados', 'slideshow_two item'),
        'add_new_item' => __('Agregar comunicados'),
        'edit_item' => __('Editar comunicados'),
        'new_item' => __('Nuevo comunicados'),
        'view_item' => __('Ver el comunicados'),
        'search_items' => __('Buscar comunicados'),
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
        'menu_icon'  => 'dashicons-megaphone',
        'hierarchical' => false,
        'menu_position' => null,
        'supports'=> array( 'title','thumbnail', 'excerpt', 'editor'), //Modificar tipo de contenido de post
        'rewrite' => array('slug' => 'comunicados', 'with_front' => false)
    ); 

    register_post_type( 'comunicados' , $args );
}
    add_action('init', 'comunicados_register');

    /*categorías personalizadas, taxonomía de categoría separada para que no se funcione con categorías
    de post*/
    function categoria_comunicados() {

        register_taxonomy(
            'categoria-comunicados',
            'comunicados',
            array(
                'label' => __( 'Categoria' ),
                'rewrite' => array( 'slug' => 'categoria-comunicados' ),
                'hierarchical' => true, //Herencia categorías y sub categorías
                // Allow automatic creation of taxonomy columns on associated post-types table?
                'show_admin_column'   => true,
                // Show in quick edit panel?
                'show_in_quick_edit'  => true,
            )
        );
    }
    add_action( 'init', 'categoria_comunicados' );
