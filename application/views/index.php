<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Bookland</title>
	<meta name="description" content="">
	<meta name="author" content="">
   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="<?php echo base_url();?>assets/css/base.css">
   <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
   <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vendor.css">
   <!-- script
   ================================================== -->
	<script src="<?php echo base_url();?>assets/js/modernizr.js"></script>
   <!-- favicons
	==================================================
	<link rel="icon" type="image/png" href="">
	<!-- URL image
   	================================================== -->
	  <meta property="og:title" content="Bookland" />
    <meta property="og:description" content="Buscador de libros" />
    <meta property="og:image" content="http://www.bookland.com.mx/assets/images/imagen-url.png" />
    <meta property="og:url" content="http://www.bookland.com.mx/" />

</head>
<body id="top">
	<!-- header
   ================================================== -->
   <header>
     <!-- logo
       ================================================== -->
     <div class="logo">
          <a href="<?php echo base_url('user/index'); ?>"></a>
       </div>

   	<div class="row">
	   	<nav id="main-nav-wrap">
				<ul class="main-navigation">
					<li class="current"><a class="smoothscroll" href="#intro">INICIO</a></li>
					<li><a href="<?php echo base_url('user/business'); ?>">EMPRESAS</a></li>
					<li><a href="<?php echo base_url('user/login_view'); ?>">INICIAR SESION</a></li>
					<li><a href="<?php echo base_url('user/registration'); ?>">REGISTRATE</a></li>
				</ul>
			</nav>
			<a class="menu-toggle" href="#"><span>MENU</span></a>
   	</div>
   </header> <!-- /header -->

	<!-- intro section
   ================================================== -->
   <section id="intro">
   	<div class="shadow-overlay"></div>
   	<div class="intro-content">
   		<div class="row">
   			<div class="col-twelve">
	   			<h5>Próximamente "Bookland"</h5>
	   			<h1>Encuentra aquí el libro que estás buscando</h1>
          <a class="button stroke" href="<?php echo base_url('user/registration'); ?>" >Regístrate</a>
	   		</div>
   		</div>
   	</div>
   </section> <!-- /intro -->

   <!-- about Section
   ================================================== -->
   <section id="about">
   	<div class="row section-intro">
   		<div class="col-twelve with-bottom-line">
   			<h1>Acerca de</h1>
   			<p class="lead">Bookland es una aplicación donde podrás buscar
          cualquier libro digital o físico que desees, saber si se encuentra en existencia
          al igual que ver las reseñas, puntajes y comentarios de lectores sin importar la librería
          de origen y sobre todo de manera gratuita y rápida.</p>
   		</div>
   	</div>
   </section> <!-- /about-->


   <!-- features Section
   ================================================== -->
	<section id="features">
		<div class="row section-intro">
   		<div class="col-twelve with-bottom-line">
   			<h5>Servicio para</h5>
   			<h1>Lectores</h1>
   			<p class="lead">Encuentra cualquier libro más rápido y sencillo.</p>
   		</div>
   	</div>

   	<div class="row features-content">
   		<div class="features-list block-1-3 block-s-1-2 block-tab-full group">
	      	<div class="bgrid feature">
	      		<span class="icon"><i class="icon-search"></i></span>
	            <div class="service-content">
	            	 <h3 class="h05">Buscador</h3>
		            <p>Próximamente</p>
	         	</div>

				</div> <!-- /bgrid -->
            <div class="bgrid feature">
					<span class="icon"><i class="icon-suitcase"></i></span>
	            <div class="service-content">
	            	<h3 class="h05">Almacena favoritos</h3>
                <p>Próximamente</p>
	            </div>
			   </div> <!-- /bgrid -->

         <div class="bgrid feature">
			   	       <span class="icon"><i class="icon-user"></i><i class="icon-user"></i></span>
	            <div class="service-content">
	            	 <h3 class="h05">Comunidad</h3>
                 <p>Próximamente</p>
	            </div>
          </div> <!-- /bgrid -->
            <div class="row section-intro">
   	</div>
   	</div> <!-- features-content -->
	</section> <!-- /features -->

   <!-- Team Section
   ================================================== -->
   <section id="team">
   	<div class="row">
   		<div class="col-twelve">
   			<h2 class="h01">Nuestro equipo de trabajo</h2>
   		</div>
   	</div>
      <div class="row flex-container">
         <div id="testimonial-slider" class="flexslider">
            <ul class="slides">
                 <li>
               	<div class="testimonial-author">
                    	<img src="<?php echo base_url();?>assets/images/avatars/avatar-1.jpg" alt="Author image">
                    	<div class="author-info">
                    		Ing. Cesar García
                    		<span class="position">Developer.</span>
                    	</div>
                  </div>
                  <p>Founder.</p>
             	</li> <!-- /slide -->
               <li>
               	<div class="testimonial-author">
                    	<img src="<?php echo base_url();?>assets/images/avatars/avatar-2.jpg" alt="Author image">
                    	<div class="author-info">
                    		Ing. José Rangel
                    		<span>Developer.</span>
                    	</div>
                  </div>
                  <p>Founder</p>
               </li> <!-- /slide -->
            </ul> <!-- /slides -->
         </div> <!-- /testimonial-slider -->
      </div> <!-- /flex-container -->
   </section> <!-- /team -->
   <!-- footer
   ================================================== -->
<section id="footer">
   <footer>
   	<div class="footer-main">
   		<div class="row">
	      	<div class="col-four tab-full mob-full footer-info">
              <div class="footer-logo"></div>
	            <p>Contáctese con nosotros con gusto lo atenderemos.<br>
				Correo: booklandmexico@gmail.com <br>
		    	</p>
		      </div> <!-- /footer-info -->
	      	<div class="col-two tab-1-3 mob-1-2 site-links">
	      		<h4>Menu</h4>
	      		<ul>
					<li><a href="#intro">INICIO</a></li>
					<li><a class="smoothscroll"  href="#about">ACERCA DE</a></li>
					<li><a class="smoothscroll"  href="#features">SERVICIOS</a></li>
					<li><a class="smoothscroll"  href="#team">EQUIPO</a></li>
          <li><a href="<?php echo base_url('user/business'); ?>">EMPRESAS</a></li>
          <li><a href="<?php echo base_url('user/index'); ?>">PAGINA PRINCIPAL</a></li>
          <li><a href="<?php echo base_url('user/login_view');?>">INICIAR SESION</a></li>
          <li><a href="<?php echo base_url('user/login_view');?>">REGISTRATE</a></li>
				</ul>
	      	</div> <!-- /site-links -->
	      	<div class="col-two tab-1-3 mob-1-2 social-links">
	      		<h4>Social</h4>
	      		<ul>
	      			<li><a href="#">Instagram</a></li>
					    <li><a href="#">Facebook</a></li>
				</ul>
	      	</div> <!-- /social -->
          <div class="col-four tab-1-3 mob-full footer-subscribe">
            <h4>Descarga nuestra aplicación móvil</h4>
            <p>Proximamente en AppStore y GooglePlay</p>
          </div> <!-- /subscribe -->
	      </div> <!-- /row -->
   	</div> <!-- /footer-main -->
      <div class="footer-bottom">
      	<div class="row">
      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>Preregistro Bookland 2018.</span>
		         </div>
		         <div id="go-top" style="display: block;">
		            <a class="smoothscroll" title="Ir a Inicio" href="#top"><i class="icon ion-android-arrow-up"></i></a>
		         </div>
	      	</div>
      	</div> <!-- /footer-bottom -->
      </div>
   </footer>
</section>
   <div id="preloader">
    	<div id="loader"></div>
   </div>

   <!-- Java Script -->
   <script src="<?php echo base_url();?>assets/js/jquery-1.11.3.min.js"></script>
   <script src="<?php echo base_url();?>assets/js/jquery-migrate-1.2.1.min.js"></script>
   <script src="<?php echo base_url();?>assets/js/plugins.js"></script>
   <script src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>
