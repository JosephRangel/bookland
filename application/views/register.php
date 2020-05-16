 <!DOCTYPE html>
  <html>
    <head>
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>/assets/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="<?php echo base_url();?>/assets/font-awesome-4.3.0/css/font-awesome.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
      <!--<link rel="shortcut icon" href="favicon (6).ico" type="image/x-icon">-
      <link rel="icon" href="favicon (6).ico" type="image/x-icon">-->
      <meta property="og:title" content="Bookland" />
      <meta property="og:description" content="Buscador de libros" />
      <meta property="og:image" content="http://www.bookland.com.mx/assets/images/imagen-url.png" />      
      <meta property="og:url" content="http://www.bookland.com.mx/" /
    </head>

    <body class="teal lighten-2">



	<div class="container" style="margin-top:90px;">
		<div class="row">
			<div class="col s12 m6 offset-m3">


		<div class="card-panel z-depth-5">
		<h4 class="center">Registro</h4>
    <?php
    $error_msg=$this->session->flashdata('error_msg');
    if($error_msg){
      echo $error_msg;
    }
     ?>
<div class="row">
  <form class="col s12 m12" role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
    <div class="row">
      <div class="input-field col s12 m12">
        <i class="mdi-action-account-circle prefix"></i>
        <input id="icon_prefix" type="text" class="validate" name="user_name" autofocus required="true">
        <label for="icon_prefix">Usuario</label>
      </div>

      <div class="input-field col s12 m12">
        <i class="mdi-communication-email prefix"></i>
        <input id="icon_email" type="email" class="validate" name="user_email" autofocus required="true">
        <label for="icon_email">Email</label>
      </div>

      <div class="input-field col s12 m12">
        <i class="mdi-social-group prefix"></i>
         <select name="user_type" autofocus required="true">
           <option value="1">Lector</option>
           <option value="2">Empresa</option>
           <option value="3">Escritor</option>
         </select>
         <label for="icon_select">Elige un perfil</label>
       </div>

        <div class="input-field col s12 m12">
        <i class="fa fa-unlock-alt prefix"></i>
        <input id="icon_password" type="password" class="validate" name="user_password" value="" autofocus required="true">
        <label for="icon_password">Password</label>
      </div>
    </div>
    <button class="btn waves-effect waves-light center" type="submit"  name="register">Sign Up
       <i class="fa fa-sign-in right"></i>
     </button>
  </form>

</div><!--row-->
  <center><b>¿Ya estás registrado?</b> <br></b><a href="<?php echo base_url('user/login_view'); ?>">iniciar sesion</a></center><!--for centered text-->
  <center><b></b> <br></b><a href="<?php echo base_url('user/index'); ?>">Página principal</a></center><!--for centered text-->
</div><!--card-->

</div><!--col-->
  </div><!--row-->
	</div><!--conatiner-->



      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>/assets/js/materialize.min.js"></script>


			 <script>

       $(document).ready(function() {
         $('select').material_select();
       });

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-60673008-2', 'auto');
  ga('send', 'pageview');
</script>



    </body>
  </html>
