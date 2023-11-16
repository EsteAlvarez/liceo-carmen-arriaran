<?php
function css_carmen_arriaran(){
    //Registrar estilos
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', 'all');
    wp_register_style('estilos', get_template_directory_uri() . '/assets/librerias/css/estilos.css', 'all');
    wp_register_style('iconos', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css', 'all'); //Iconos Bootstrap
    
    
    //Encolar estilos
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('estilos');
    wp_enqueue_style('iconos');
}

add_action('wp_enqueue_scripts', 'css_carmen_arriaran');