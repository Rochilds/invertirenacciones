<?php
function invertir_en_acciones_enqueue_assets() {
    // carga el style.css principal del tema
    wp_enqueue_style(
        'invertir-wallstreet-style',
        get_stylesheet_uri(),     // apunta a style.css en la raíz del tema
        [],                       // sin dependencias
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'invertir_en_acciones_enqueue_assets' );
