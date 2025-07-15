<?php
function invertir_en_acciones_assets() {
  // Carga style.css del tema
  wp_enqueue_style( 

    add_action( 'wp_enqueue_scripts', function(){
    var_dump( get_stylesheet_uri() );
}, 20 );

    'invertir-en-acciones-style',
    get_stylesheet_uri(),               // apunta a style.css en la raíz
    array(),                           // sin dependencias
    wp_get_theme()->get('Version')     // usa la versión del theme
  );
}
add_action( 'wp_enqueue_scripts', 'invertir_en_acciones_assets' );

