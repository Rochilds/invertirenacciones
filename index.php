<?php
/**
 * index.php
 * Plantilla principal – muestra toda la landing
 */

get_header();
?>

<main>

 <section class="hero-section">
  <div class="hero-content">
    <h1 class="hero-title">
      INVERTIR SIN MIEDO<br>
      SÍ ES POSIBLE.
    </h1>
    <p class="hero-subtitle">
      Descubrí el paso a paso para empezar a invertir en acciones desde cero,  
      con claridad, seguridad y sin depender de nadie.
    </p>
    <div class="hero-badge">
      <span>+1.500</span>
      <small>personas ya lo descargaron</small>
    </div>
    <a
      href="https://2spq2i-f3.myshopify.com/checkouts/cn/Z2NwLXVzLWVhc3QxOjAxSlpYSlJYMjJFS1JIOVg5QzlQUFJKNjRF?preview_theme_id=180368081214"
      class="hero-cta"
      target="_blank" rel="noopener noreferrer"
      onclick="fbq('trackCustom','LP_ClickBuy');"
    >
      QUIERO ACCEDER AL EBOOK AHORA
    </a>
  </div>
  <div class="hero-image">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/hero-phone.png"
      alt="Ebook Cómo invertir en Wall Street"
      loading="lazy"
    >
  </div>
</section>


</main>

<?php
get_footer();
?>







