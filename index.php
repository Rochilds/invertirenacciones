<?php
/**
 * index.php
 * Plantilla principal – muestra toda la landing
 */

get_header();
?>

<main>

 <section class="hero-new">
  <div class="hero-new-content">
    <h1 class="hero-new-title">
      NO NECESITÁS SUERTE.<br>
      NECESITÁS CONOCIMIENTO.
    </h1>
    <p class="hero-new-subtitle">
      Aprendé a invertir en Wall Street con una guía clara, probada y sin tecnicismos.
    </p>
    <div class="hero-new-text">
      <p>
        Descargá este eBook y descubrí cómo empezar con confianza,  
        evitando errores comunes y aplicando estrategias que funcionan hoy.
      </p>
      <ul class="hero-new-checklist">
        <li>✔️ Ideal si nunca invertiste.</li>
      </ul>
      <p class="hero-new-badge-small">
        +1.500 personas ya lo están usando
      </p>
    </div>
    <a
      href="https://acciones.invertirenacciones.digital/checkouts/cn/hWN19Gh2vvbn7Cs19H0fTKDa"
      class="cta-button cta-button--primary hero-new-cta"
      target="_blank" rel="noopener noreferrer"
      onclick="fbq('trackCustom','LP_ClickBuy');"
    >
      ➔ QUIERO ACCEDER AL EBOOK AHORA
    </a>
  </div>
  <div class="hero-new-image">
    <img
      src="<?php echo get_template_directory_uri(); ?>/img/hero-phone-2.png"
      alt="Ebook Cómo invertir en Wall Street"
      loading="lazy"
    >
  </div>
</section>


  <!-- CAPÍTULOS -->
  <section class="chapters">
    <div class="chapters-container">
      <h2>📘 Esto es lo que vas a aprender paso a paso</h2>
      <p class="subtitle">Descubrí los principios de inversión más sólidos del mundo, explicados de forma simple y aplicable.</p>
      <ol class="chapter-list">
        <li>📌 ¿Cómo invierte Warren Buffett?</li>
        <li>📌 Establecer una filosofía de inversión sólida</li>
        <li>📌 Desarrollar una estrategia para buscar acciones</li>
        <li>📌 Calcular el valor intrínseco de un negocio</li>
        <li>📌 Tener la disciplina para decir “no”</li>
        <li>📌 Practicar el arte de la paciencia</li>
        <li>📌 Invertir significativamente en el punto de máximo pesimismo</li>
        <li>📌 ¿El Lobo de Wall Street o Warren Buffett?</li>
      </ol>
      <div class="chapter-cta">
        <div class="chapter-img">
          <img
            src="<?php echo get_template_directory_uri(); ?>/img/img-2.PNG"
            alt="Portada Cómo invertir en Wall Street"
            loading="lazy"
          >
        </div>
        <div class="chapter-button">
          <a
            href="https://acciones.invertirenacciones.digital/checkouts/cn/hWN19Gh2vvbn7Cs19H0fTKDa"
            class="ebook-features__btn"
            target="_blank"
            rel="noopener noreferrer" 
            onclick="fbq('trackCustom', 'LP_ClickBuy');"
          >
            🔥 ACCEDER AHORA - OFERTA LIMITADA
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- AUDIENCIA -->
  <section class="ebook-audience">
    <div class="container">
      <h2 class="ebook-audience__title">¿Para quién es este eBook?</h2>
      <div class="ebook-audience__separator"></div>
      <ul class="ebook-audience__list">
        <li><span class="check">✔️</span>Emprendedores que quieren hacer rendir su dinero</li>
        <li><span class="check">✔️</span>Personas que quieren empezar a invertir desde cero</li>
        <li><span class="check">✔️</span>Profesionales que buscan libertad financiera a largo plazo</li>
        <li><span class="check">✔️</span>Curiosos de las finanzas que admiran a Warren Buffett</li>
        <li><span class="check">✔️</span>Inversionistas que quieren mejorar su enfoque</li>
        <li><span class="check">✔️</span>Quienes buscan diversificar sus ahorros</li>
      </ul>
    </div>
  </section>

  <!-- TESTIMONIOS -->
  <section class="testimonios">
    <div class="testimonios-container">
      <h2>TESTIMONIOS</h2>
      <div class="testimonial">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img-8.jpeg" alt="Foto de Carolin" class="foto-testimonio">
        <p class="nombre">Carolin</p>
        <blockquote>“Siempre pensé que invertir en Wall Street era solo para expertos o gente con mucho dinero. Pero este Ebook me cambió totalmente la visión. Aprendí desde cero los principios que usa Warren Buffett, explicados de forma clara y sin vueltas.”</blockquote>
        <p class="autor">— Carolina M.</p>
      </div>
      <div class="testimonial">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img-9.jpeg" alt="Foto de Juan" class="foto-testimonio">
        <p class="nombre">Juan.</p>
        <blockquote>“Los capítulos sobre cómo desarrollar una estrategia, calcular el valor de una empresa y mantener la paciencia fueron clave para mí. Además, me encantó cómo se comparan los estilos de inversión de Buffett y el famoso ‘lobo de Wall Street’. Te hace pensar distinto.”</blockquote>
        <p class="autor">— Juan P.</p>
      </div>
      <div class="testimonial">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img-10.jpeg" alt="Foto de Cande" class="foto-testimonio">
        <p class="nombre">Cande</p>
        <blockquote>“Hoy ya no tomo decisiones impulsivas con mi dinero. Tengo una filosofía de inversión sólida y sé cómo evaluar una acción antes de comprar. Este Ebook no es solo teoría: es una guía real para invertir con inteligencia.”</blockquote>
        <p class="autor">— Candelaria</p>
      </div>
    </div>
  </section>

  <!-- CONFIANZA -->
  <section class="confianza">
    <div class="confianza-container">
      <h2>CONFIANZA Y SEGURIDAD<br>DESDE EL PRIMER CLICK</h2>
      <hr>
      <div class="confianza-items">
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/img-4.png" alt="Entrega inmediata" class="icono">
          <h3>Entrega inmediata</h3>
          <p>Lo recibís en tu correo al instante. Sin esperas ni complicaciones.</p>
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/img-5.png" alt="Compra segura" class="icono">
          <h3>Compra 100% segura</h3>
          <p>Procesamiento cifrado y métodos de pago verificados. Tu información está protegida.</p>
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/img-6.png" alt="Soporte personalizado" class="icono">
          <h3>Soporte personalizado</h3>
          <p>Te acompañamos si tenés dudas. Nuestro equipo responde por WhatsApp o correo.</p>
        </div>
      </div>
      <a
        href="https://acciones.invertirenacciones.digital/checkouts/cn/hWN19Gh2vvbn7Cs19H0fTKDa"
        class="cta-green"
        target="_blank"
        rel="noopener noreferrer" 
        onclick="fbq('trackCustom', 'LP_ClickBuy');"
      >
        CONSEGUÍ TU EBOOK AHORA
      </a>
      <p class="aclaracion">¡Sin demoras! Acceso inmediato tras la compra.</p>
    </div>
  </section>

  <!-- FAQ -->
  <section class="faq">
    <div class="faq-container">
      <div class="faq-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img-7.png" alt="Preguntas frecuentes">
      </div>
      <div class="faq-content">
        <h2>PREGUNTAS FRECUENTES</h2>
        <p><strong>¿Necesito experiencia previa para leer este ebook?</strong><br>
        No. Está pensado para principiantes que quieren dar sus primeros pasos en el mundo de las inversiones.</p>
        <p><strong>¿Qué voy a aprender exactamente?</strong><br>
        Cómo invertir paso a paso: entender acciones, ETFs y cómo aplicar los principios de Warren Buffett de forma clara y sin tecnicismos.</p>
        <p><strong>¿En qué formato se entrega?</strong><br>
        El ebook se descarga en PDF al instante tras la compra.</p>
        <p><strong>¿Lo puedo leer en celular?</strong><br>
        Sí. Compatible con cualquier dispositivo.</p>
        <p><strong>¿Cómo sé que el pago es seguro?</strong><br>
        Usamos sistemas cifrados 100% seguros.</p>
        <p><strong>¿Y si no me gusta?</strong><br>
        Te devolvemos el dinero si no aporta valor. Tenés 7 días.</p>
        <a
          href="https://acciones.invertirenacciones.digital/checkouts/cn/hWN19Gh2vvbn7Cs19H0fTKDa"
          class="cta-green"
          target="_blank"
          rel="noopener noreferrer" 
          onclick="fbq('trackCustom', 'LP_ClickBuy');"
        >
          ACCEDER AHORA A MI EBOOK
        </a>
      </div>
    </div>
  </section>

</main>

<?php
get_footer();
?>







