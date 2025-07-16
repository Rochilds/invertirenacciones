<?php
/**
 * Registrar y encolar assets del tema
 */

function invertir_en_acciones_assets() {
    // Encolar style.css del tema 

    add_action( 'wp_enqueue_scripts', function() {
    echo "\n<!-- ENCOLANDO STYLE.CSS -->\n";
    wp_enqueue_style(
        'invertir-en-acciones-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );
}, 20 );

    wp_enqueue_style(
        'invertir-en-acciones-style',   // Handle único
        get_stylesheet_uri(),           // URL a style.css en la raíz del tema
        array(),                        // Sin dependencias
        wp_get_theme()->get('Version')  // Versión según style.css
    );
}

// Enganchar la función al hook correcto
add_action( 'wp_enqueue_scripts', 'invertir_en_acciones_assets' );



