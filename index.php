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
      DESCARGA AHORA Y EMPiEZA HOY
    </a>

  </div>
</section> 


<!-- seccion testimonio -->

<section class="testimonials2-section">
  <div class="container testimonials2-container">

    <h2 class="testimonials2-title">Lo que dicen quienes ya lo leyeron</h2>
    <p class="testimonials2-subtitle">
      Más de 1.500 personas ya descargaron esta guía. Estas son algunas de sus experiencias reales:
    </p>

    <div class="testimonials2-grid">
      <!-- Testimonio 1 -->
      <div class="testimonial2-card">
        <div class="testimonial2-quote">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/icon-quote.png"
            alt="Comillas"
          >
        </div>
        <p class="testimonial2-text">
          “Este ebook me cambió totalmente la visión. Pensaba que invertir era solo para ricos. Ahora entiendo cómo hacerlo desde cero.”
        </p>
        <div class="testimonial2-author">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/face-carolina.jpg"
            alt="Carolina M."
            class="testimonial2-photo"
          >
          <div>
            <p class="testimonial2-name">Carolina M.</p>
            <p class="testimonial2-location">Buenos Aires</p>
          </div>
        </div>
      </div>

      <!-- Testimonio 2 -->
      <div class="testimonial2-card">
        <div class="testimonial2-quote">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/icon-quote.png"
            alt="Comillas"
          >
        </div>
        <p class="testimonial2-text">
          “La comparación entre Buffett y el "lobo" de Wall Street te hace pensar distinto. Es lo que necesitaba para cambiar mi mentalidad.”
        </p>
        <div class="testimonial2-author">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/face-juan.jpg"
            alt="Juan P."
            class="testimonial2-photo"
          >
          <div>
            <p class="testimonial2-name">Juan P.</p>
            <p class="testimonial2-location">Mendoza</p>
          </div>
        </div>
      </div>

      <!-- Testimonio 3 -->
      <div class="testimonial2-card">
        <div class="testimonial2-quote">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/icon-quote.png"
            alt="Comillas"
          >
        </div>
        <p class="testimonial2-text">
          “¡Me encantó! Todo super claro, ideal si estás comenzando. Ahora invierto en acciones con mucha más seguridad.”
        </p>
        <div class="testimonial2-author">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/face-florencia.jpg"
            alt="Florencia R."
            class="testimonial2-photo"
          >
          <div>
            <p class="testimonial2-name">Florencia R.</p>
            <p class="testimonial2-location">Rosario</p>
          </div>
        </div>
      </div>
    </div>

    <a
      href="https://2spq2i-f3.myshopify.com/checkouts/..."
      class="testimonials2-cta"
      target="_blank" rel="noopener noreferrer"
      onclick="fbq('trackCustom','LP_ClickBuy');"
    >
      Quiero mi Ebook ahora
    </a>

  </div>
</section> 

<!-- seccion compras  --> 

<section class="trust-section">
  <div class="trust-content container">
    <h2 class="trust-title">
      <img src="<?php echo get_template_directory_uri(); ?>/img/icon-shield.png" alt="Seguridad" class="trust-title-icon">
      Tu compra es segura, rápida y sin riesgo
    </h2>

    <ul class="trust-list">
      <li class="trust-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-mail.png" alt="" class="trust-icon">
        <div>
          <h3>Entrega inmediata</h3>
          <p>Recibís el eBook al instante en tu correo.</p>
        </div>
      </li>
      <li class="trust-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-lock.png" alt="" class="trust-icon">
        <div>
          <h3>Pago 100% protegido</h3>
          <p>Usamos plataformas verificadas con cifrado seguro.</p>
        </div>
      </li>
      <li class="trust-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-handshake.png" alt="" class="trust-icon">
        <div>
          <h3>Soporte humano</h3>
          <p>Te respondemos por WhatsApp o correo si necesitas ayuda.</p>
        </div>
      </li>
      <li class="trust-item">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-check.png" alt="" class="trust-icon">
        <div>
          <h3>Garantía 7 días</h3>
          <p>Si no te aporta valor, te devolvemos el 100%. Sin vueltas.</p>
        </div>
      </li>
    </ul>

    <div class="trust-cta">
      <a href="https://2spq2i-f3.myshopify.com/checkouts/…" class="btn-trust">
        Descargá ahora con confianza
      </a>
      <p class="trust-note">
        Miles ya confiaron. Vos también podés empezar hoy sin preocuparte.
      </p>
    </div>
  </div>

  <div class="trust-image">
    <img src="<?php echo get_template_directory_uri(); ?>/img/person-trust.png" alt="Cliente satisfecho">
  </div>
</section> 

<!-- seccion Final  --> 

<section class="final-cta">
  <div class="final-cta-content container">
    <h2 class="final-cta-title">
      Estás a un clic de invertir con claridad y seguridad
    </h2>
    <p class="final-cta-subtitle">
      No postergues más tu libertad financiera. Esta guía es el primer paso para empezar a invertir de forma simple, segura y sin depender de nadie.
    </p>

    <ul class="final-cta-features">
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-check-green.png" alt="" class="feature-icon">
        <span>Garantía 7 días</span>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-book-blue.png" alt="" class="feature-icon">
        <span>Guía paso a paso</span>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-users-blue.png" alt="" class="feature-icon">
        <span>+1.500 personas ya lo usan</span>
      </li>
    </ul>

    <a
      href="https://2spq2i-f3.myshopify.com/checkouts/…" 
      class="btn-final-cta"
      onclick="fbq('trackCustom','LP_ClickBuy');"
      target="_blank"
      rel="noopener noreferrer"
    >
      Quiero acceder al Ebook ahora
    </a>
  </div>
</section>








</main>

<?php
get_footer();
?>







