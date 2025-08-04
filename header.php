<?php
/**
 * header.php
 * Cabecera de tu tema con SEO optimizado d
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <meta name="facebook-domain-verification" content="uktr8jy9n0wjkledxwvc2cxft4ozh2" />

  <!-- Título dinámico -->
  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <!-- Descripción -->
  <?php
    if ( is_singular() ) {
      // Para posts/páginas: usa excerpt o campo personalizado
      if ( $desc = get_post_meta( get_queried_object_id(), 'meta_description', true ) ) {
        $description = $desc;
      } else {
        $description = wp_strip_all_tags( get_the_excerpt() );
      }
    } else {
      // Para home/archivos: usa tagline del sitio
      $description = get_bloginfo( 'description' );
    }
  ?>
  <meta name="description" content="<?php echo esc_attr( $description ); ?>">

  <!-- Canonical -->
  <link rel="canonical"
        href="<?php echo esc_url( home_url( add_query_arg( null, null ) ) ); ?>">

  <!-- Open Graph -->
  <meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
  <meta property="og:title" content="<?php wp_title( '', true ); ?>">
  <meta property="og:description" content="<?php echo esc_attr( $description ); ?>">
  <meta property="og:type" content="<?php echo is_singular() ? 'article' : 'website'; ?>">
  <meta property="og:url" content="<?php echo esc_url( get_permalink() ); ?>">
  <meta property="og:image"
        content="<?php
          if ( has_post_thumbnail() ) {
            echo esc_url( get_the_post_thumbnail_url( null, 'large' ) );
          } else {
            echo esc_url( get_template_directory_uri() . '/img/og-default.jpg' );
          }
        ?>">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php wp_title( '', true ); ?>">
  <meta name="twitter:description" content="<?php echo esc_attr( $description ); ?>">
  <meta name="twitter:image"
        content="<?php
          if ( has_post_thumbnail() ) {
            echo esc_url( get_the_post_thumbnail_url( null, 'large' ) );
          } else {
            echo esc_url( get_template_directory_uri() . '/img/og-default.jpg' );
          }
        ?>">

  <script type="application/ld+json">
    {
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebSite",
      "url": "https://invertirenacciones.digital/",
      "name": "Invertir en Acciones como Warren Buffet",
      "description": "Descubre estrategias simples para multiplicar tu dinero. Con mi eBook “Cómo invertir en Wall Street” dominas el mercado y das el primer paso hoy mismo.",
      "publisher": {
        "@type": "Organization",
        "name": "Invertir en Acciones como Warren Buffet",
        "logo": {
          "@type": "ImageObject",
          "url": "https://invertirenacciones.digital/wp-content/uploads/2025/07/img-1.png"
        }
      }
    },
    {
      "@type": "Book",
      "name": "Cómo invertir en Wall Street",
      "author": {
        "@type": "Person",
        "name": "Santiago R.T"
      },
      "image": "https://invertirenacciones.digital/wp-content/uploads/2025/07/img-1.png",
      "description": "Descubre estrategias simples para multiplicar tu dinero. Con mi eBook “Cómo invertir en Wall Street” dominas el mercado y das el primer paso hoy mismo.",
      "publisher": {
        "@type": "Organization",
        "name": "Invertir en Acciones como Warren Buffet"
      },
      "inLanguage": "es",
      "datePublished": "2025-07-15"
    },
    {
      "@type": "Offer",
      "url": "https://2spq2i-f3.myshopify.com/checkouts/cn/Z2NwLXVzLWVhc3QxOjAxSlpYSlJYMjJFS1JIOVg5QzlQUFJKNjRF?preview_theme_id=180368081214",
      "price": "15999.00",
      "priceCurrency": "ARS",
      "availability": "https://schema.org/InStock",
      "itemOffered": {
        "@type": "Book",
        "name": "Cómo invertir en Wall Street"
      }
    }
  ]
}







 <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

