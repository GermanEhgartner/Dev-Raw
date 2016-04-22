<?php include('includes/header-home.php'); ?>


<!-- PORTAFOLIO -->
<section id="portfolio" class="container portfolio clearfix m-top" role="main" >
{{#proyecto}}
<article class='span{{width}}' style='background:url("{{img}}");height:350px;'>

<a href='{{link}}' title='Desarrollador web WordPress y velocidad de carga de la web'>
  <div class='overlay'><div class='diamante'></div>
    <div class='titulo-pf'>{{cliente}}<br />
    <span class='uppercase color-oscuro'>{{desarrollo}}</span>
    <br /><br/<span class='iconfont-linkss logo subtitle-font-size color-oscuro'>
    </span>
    </div>
  </div>
</a>
</article>
   


{{/proyecto}}
</section>
<!-- PORTAFOLIO -->
<div class="container">
  <div class="row-fluid">
    <a href="www.websrwa.com/sobre-mi.php" title="Más sobre German Ehgartner - Diseñador web en Argentina" class="span4 m-top btn-animacion iconfont-user"><span>Sobre mi</span></a>
    <a href="www.websrwa.com/contacto.php" title="Enviar email a German Ehgartner - Diseñador web" class="span4 m-top btn-animacion iconfont-mail btn-action"><span>Contacto</span></a>
    <a href="curriculum.php" title="Curriculum German Ehgartner - Formación, habilidades y experiencia" class="span4 m-top btn-animacion iconfont-study"><span>Curriculum</span></a> 
  </div>
</div>

<section id="about" class="colophon container clearfix">
  <div class="row-fluid">
    <article class="span12 ac m-top">
      <h5 class="bold small border-b uppercase">Colofón</h5>
      <br />
    <p>Este sitio web ha sido diseñado gracias al paquete <a href="http://www.adobe.com/es/products/creativecloud.php" title="Adobe Creative Suite" target="_blank">Adobe Creative Suite</a> y codeado a mano con <a href="http://www.sublimetext.com.php" title="Sublime Text 3" target="_blank">Sublime Text 3</a> en <a href="http://www.w3.org/html/logo.php" title="HTML 5" target="_blank">HTML5</a> y <a href="http://www.w3.org/Style/CSS.php" title="CSS3" target="_blank">CSS3</a> con el framework <a href="http://getbootstrap.com.php" title="Bootstrap">Bootstrap</a> y preprocesado con <a href="http://thesassway.com.php" title="SASS preprocessor" target="_blank">SASS</a> - <a href="http://compass-style.org.php" title="Compass">Compass</a> con el apoyo de <a href="http://mhs.github.io/scout-app.php" title="Scout app" target="_blank">Scout</a> en un MacBook Pro de Apple.</p>
    <br />
    <p>La web está diseñada siguiendo las últimas tendencias en <a href="http://alistapart.com/article/responsive-web-design" title="responsive web design">diseño web responsive</a> y mobile first actuales, y por tanto se adapta perfectamente a cualquier dispositivo en el que se visualice, disminuyendo en todo lo posible el tiempo de carga para dispositivos móviles. La fuente escogida ha sido <a href="http://www.fonts.com/font/mark-simonson-studio/proxima-nova" title="Proxima Nova font" target="_blank">Proxima Nova</a> en todas sus variantes, implementada por cortesía de <a href="http://www.fontsquirrel.com.php" title="Font Squirrel" target="_blank">Font Squirrel</a>. Por último, me gustaría hacer una mención muy especial a Mary Lou de <a href="http://tympanus.net/codrops.php" title="Codrops">Codrops</a> y por supuesto a toda la comunidad que hace posible la magia de <a href="http://WordPress.org.php" title="Basado en WordPress" target="_blank">WordPress</a>.</p>
    <br />
    <p>Mi más sincera gratitud a todas las personas que ayudan a mantener y mejorar todas estas excelentes herramientas, servicios y metodologías de trabajo.</p>
    </article>
  </div><!--row-fluid-->
</section>

<!-- Franja contacto -->
<section class="franja-contacto m-top">
  <div class="container">
    <div class="row-fluid">
      <span class="span4 ocultar-mobile"></span>
      <a href="contacto.php" title="Contactar con German Ehgartner para servicios de diseño y desarrollo en Argentina"class="span4 btn-animacion iconfont-mail"><span>Contacto</span></a>
    </div>
  </div>
</section><a href="#home" title="Subir" class="go-top iconfont-chevron-up color-white"></a>



<?php include('includes/footer.php'); ?>
