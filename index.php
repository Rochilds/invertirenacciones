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

<!-- Que vas a lograr con esta guia -->

<section class="benefits-section">
  <div class="container benefits-container">

    <h2 class="benefits-title">¿Qué vas a lograr con esta guía?</h2>

    <div class="benefits-content">
      <!-- Lista de beneficios -->
      <ul class="benefits-list">
        <li>
          <span class="benefit-icon">
            <img
              src="<?php echo get_template_directory_uri(); ?>/img/icon-mindset.png"
              alt="Mentalidad Buffett"
            >
          </span>
          <p class="benefit-text">
            Invertir con la mentalidad de Warren Buffett, incluso si estás empezando
          </p>
        </li>
        <li>
          <span class="benefit-icon">
            <img
              src="<?php echo get_template_directory_uri(); ?>/img/icon-strategy.png"
              alt="Estrategia de detección"
            >
          </span>
          <p class="benefit-text">
            Crear una estrategia para detectar acciones con potencial real
          </p>
        </li>
        <li>
          <span class="benefit-icon">
            <img
              src="<?php echo get_template_directory_uri(); ?>/img/icon-emotions.png"
              alt="Errores emocionales"
            >
          </span>
          <p class="benefit-text">
            Evitar los errores emocionales que arruinan decisiones
          </p>
        </li>
        <li>
          <span class="benefit-icon">
            <img
              src="<?php echo get_template_directory_uri(); ?>/img/icon-crisis.png"
              alt="Aprovechar crisis"
            >
          </span>
          <p class="benefit-text">
            Aprovechar las crisis como oportunidad (sin entrar en pánico)
          </p>
        </li>
      </ul>

      <!-- Imagen lateral -->
      <div class="benefits-image">
        <img
          src="<?php echo get_template_directory_uri(); ?>/img/hero-phone2.png"
          alt="Portada Cómo empezar a invertir en acciones"
          loading="lazy"
        >
      </div>
    </div>

    <!-- Badge inferior -->
    <div class="benefits-badge">
      <span class="badge-icon">
        <img
          src="<?php echo get_template_directory_uri(); ?>/img/icon-check.png"
          alt="Check"
        >
      </span>
      <span class="badge-text">+1.500 personas ya lo descargaron</span>
    </div>

  </div>
</section> 

<!-- Este ebboo es para vos -->

<section class="audience2-section">
  <div class="container audience2-container">

    <h2 class="audience2-title">Este eBook es para vos?</h2>

    <ul class="audience2-list">
      <li>
        <span class="audience2-icon">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/icon-check-circle.png"
            alt="Check"
          >
        </span>
        Si querés que tu plata trabaje por vos, pero no sabés por dónde empezar
      </li>
      <li>
        <span class="audience2-icon">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/icon-check-circle.png"
            alt="Check"
          >
        </span>
        Si te gustaría invertir como los grandes, pero con una guía clara y en español.
      </li>
      <li>
        <span class="audience2-icon">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/icon-check-circle.png"
            alt="Check"
          >
        </span>
        Si buscás libertad financiera sin caer en promesas vacías.
      </li>
      <li>
        <span class="audience2-icon">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/icon-check-circle.png"
            alt="Check"
          >
        </span>
        Si te frena el miedo, la confusión o la sobreinformación.
      </li>
      <li>
        <span class="audience2-icon">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/icon-check-circle.png"
            alt="Check"
          >
        </span>
        Si querés aprender a invertir paso a paso, desde cero.
      </li>
    </ul>

    <p class="audience2-note">
      <span class="audience2-lightbulb">
        <img
          src="<?php echo get_template_directory_uri(); ?>/img/icon-lightbulb.png"
          alt="Idea"
        >
      </span>
      Miles de personas ya lo descargaron. ¿Y vos?
    </p>

    <a
      href="https://2spq2i-f3.myshopify.com/checkouts/cn/Z2NwLXVzLWVhc3QxOjAxSlpYSlJYMjJFS1JIOVg5QzlQUFJKNjRF?preview_theme_id=180368081214"
      class="audience2-cta"
      target="_blank" rel="noopener noreferrer"
      onclick="fbq('trackCustom','LP_ClickBuy');"
    >
      DESCARGAR AHORA Y EMPEZAR HOY
    </a>

  </div>
</section>




</main>

<?php
get_footer();
?>







