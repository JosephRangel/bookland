<?php
$user_id=$this->session->userdata('user_id');

if(!$user_id){

  redirect('user/login_view');
}

 ?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
            <nav class="teal lighten-2>
                    <div class="nav-wrapper">
                      <a href="#" data-activates="mobile-demo" class="button-collapse show-on-large"><i class="small material-icons">menu</i></a>
                      <ul class="side-nav white " id="mobile-demo">
                        <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">person </i>Perfil</a></li>
                        <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">notifications</i> Noticias</a></li>
                        <li class="white"><a href="<?php echo base_url('user/user_logout');?>" class="waves-effect waves-blue"><i class="material-icons">close</i> Cerrar sesión</a></li>
                      </ul>
                    </div>
                  </nav>

                  <div style="width:98%;padding:15%15px10px;">
                      <h5 class="center-align">Gracias por ser parte de Bookland</h5>
                      <h1 class="center-align">Pronto podrás disfrutar de todos nuestros servicios</h1>
                      <h5 class="center-align">Para saber más consulta nuestra página de inicio</h5>
                    </div>

      <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
      <script src="<?php echo base_url();?>/assets/js/materialize.min.js"></script>
      <script src="<?php echo base_url();?>/assets/js/script.js"></script>
    </body>
  </html>
