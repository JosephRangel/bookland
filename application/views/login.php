<?php header('Access-Control-Allow-Origin: *'); ?>
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
   </head>

   <body class="teal lighten-2">



 <div class="container" style="margin-top:90px;">
   <div class="row">
     <div class="col s12 m6 offset-m3">


   <div class="card-panel z-depth-5">
   <h4 class="center">Inicio de sesión</h4>
   <?php
 $success_msg= $this->session->flashdata('success_msg');
 $error_msg= $this->session->flashdata('error_msg');

     if($success_msg){
       ?>
       <div class="alert alert-success">
         <?php echo $success_msg; ?>
       </div>
     <?php
     }
     if($error_msg){
       ?>
       <div class="alert alert-danger">
         <?php echo $error_msg; ?>
       </div>
       <?php
     }
     ?>
<div class="row">
 <form class="col s12 m12" role="form" method="post" action="<?php echo base_url('user/login_user'); ?>">
   <div class="row">
     <div class="input-field col s12 m12">
       <i class="mdi-action-account-circle prefix"></i>
       <input id="icon_prefix" type="text" class="validate" name="user_email" required="true">
       <label for="icon_prefix">E-mail</label>
     </div>
       <div class="input-field col s12 m12">
       <i class="fa fa-unlock-alt prefix"></i>
       <input id="icon_password" type="password" class="validate" name="user_password" value="" required="true">
       <label for="icon_password">Password</label>
     </div>
   </div>
   <button class="btn waves-effect waves-light center" type="submit"  name="register">Sign In
      <i class="fa fa-sign-in right"></i>
    </button>
 </form>
</div><!--row-->

 <center><b>¿Ya estás registrado?</b> <br></b><a href="<?php echo base_url('user/registration'); ?>">Registrarme</a></center><!--for centered text-->
 <center><b></b> <br></b><a href="<?php echo base_url('user/index'); ?>">Página principal</a></center><!--for centered text-->
</div><!--card-->

</div><!--col-->
 </div><!--row-->
 </div><!--conatiner-->



     <!--Import jQuery before materialize.js-->
     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url();?>/assets/js/materialize.min.js"></script>


      <script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 ga('create', 'UA-60673008-2', 'auto');
 ga('send', 'pageview');
</script>



   </body>
 </html>
