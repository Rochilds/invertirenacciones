<?php
/**
 * Registrar y encolar assets del tema
 */
function invertir_en_acciones_assets() {
    // Carga style.css del tema
    wp_enqueue_style(
        'invertir-en-acciones-style',           // Handle único
        get_stylesheet_uri(),                   // Apunta a style.css en la raíz del tema
        array(),                                // Dependencias
        wp_get_theme()->get('Version')          // Versión obtenida del style.css
    );
}
// Enganchar al hook adecuado
add_action( 'wp_enqueue_scripts', 'invertir_en_acciones_assets' );


