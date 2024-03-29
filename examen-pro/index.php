<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
 
<head> 
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Examen Online</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/font.css">
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <script src="js/script2.js.js"></script>
  <?php if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
  }
  ?>
  <script>
    function validateForm() {
      var y = document.forms["form"]["name"].value;
      var letters = /^[A-Za-z]+$/;
      if (y == null || y == "") {
        Swal.fire({
          icon: 'question',
          text: 'El nombre no debe estar vacio'
        });
        return false;
      }

      var z = document.forms["form"]["college"].value;
      if (z == null || z == "") {
        Swal.fire({
          icon: 'question',
          text: 'La institución educativa no debe estar vacio'
        });
        return false;
      }
    
      var x = document.forms["form"]["email"].value;
      var atpos = x.indexOf("@");
      var dotpos = x.lastIndexOf(".");
      if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
        Swal.fire({
          icon: 'question',
          text: 'Correo inválido'
        });
        return false;
      }
      var a = document.forms["form"]["password"].value;
      if (a == null || a == "") {
        Swal.fire({
          icon: 'question',
          text: 'La contraseña debe ser obligatorio'
        });
        return false;
      }
      if (a.length < 5 || a.length > 25) {
        Swal.fire({
          icon: 'question', 
          text: 'La contraseña debe tener una extensión entre 5 y 25 caracteres'
        });
        return false;
      }
      var b = document.forms["form"]["cpassword"].value;
      if (a != b) {
        Swal.fire({
          icon: 'question', 
          text: 'Las contraseñas no coinciden'
        });
        return false;
      }
    }
  </script>
   
</head>   
  
<body>  
  <div class="header">
    <div class="row">
      <div class="col-lg-6">
        <span class="logo">Examen Online</span>
      </div>
      <div class="col-md-2 col-md-offset-4">
        <a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Ingresar</b></span></a>
      </div>
      <!--sign in modal start-->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog" style="background-color:blue; top: 150px;">
          <div class="modal-content title1">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title title1"><span style="color:black; position: relative;  left: 45%;">Ingresar</span></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                <fieldset>
 
 
                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="email"></label>
                    <div class="col-md-6">
                      <input id="email" name="email" placeholder="Ingresa tu correo electrónico" class="form-control input-md" type="email" required>

                    </div>
                  </div>
 

                  <!-- Password input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="password"></label>
                    <div class="col-md-6">
                      <input id="password" name="password" placeholder="Ingresa tu contraseña" class="form-control input-md" type="password" required>

                    </div>
                  </div>
 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Ingresar</button>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#passwordRecoveryModal">Cambiar contraseña</button>
              </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--sign in modal closed-->
 
    </div><!--header row closed-->
  </div>
<<<<<<< HEAD
 <!-- Password Recovery Modal start -->
=======
  <!-- Password Recovery Modal start -->
  <!-- hola mundo, en comentario -->
>>>>>>> 5cfb9ad50a39d8a0b61e5b1dba876317d63f39ab
<div class="modal fade" id="passwordRecoveryModal">
 <div class="modal-dialog" style="background-color:blue; top: 150px;">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:black; position: relative; left: 45%;">Recuperar Contraseña</span></h4>
      </div>
      <div class="modal-body">
        <div id="modalMessage"></div> <!-- Agrega este div para mostrar el mensaje -->
        <form id="recoverForm" class="form-horizontal" action="javascript:void(0);" method="POST">
          <fieldset>
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="recover_email"></label>
              <div class="col-md-6">
                <input id="recover_email" name="recover_email" placeholder="Ingresa tu correo electrónico" class="form-control input-md" type="email">
              </div>
            </div>
            <!-- Submit Button -->
            <div class="form-group">
                 <div class="col-md-6 col-md-offset-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                 </div>
            </div>
          </fieldset>
        </form>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
 </div>
</div>
<!-- Password Recovery Modal closed -->

 
  <div class="bg1">
    <div class="row">
 
      <div class="col-md-7"></div>
      <div class="col-md-4 panel">
        <!-- sign in form begins -->
        <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
          <fieldset>
 
 
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="name"></label>
              <div class="col-md-12">
                <input id="name" name="name" placeholder="Ingresa tu nombre" class="form-control input-md" type="text">
              </div>
            </div>
 
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="gender"></label>
              <div class="col-md-12">
                <select id="gender" name="gender" placeholder="Ingresa tu género" class="form-control input-md">
                  <option value="Male">Género</option>
                  <option value="M">Hombre</option>
                  <option value="F">Mujer</option>
                </select>
              </div>
            </div>
 
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="name"></label>
              <div class="col-md-12">
                <input id="college" name="college" placeholder="Ingresa tu institución educativa" class="form-control input-md" type="text">

              </div>
            </div>
 
 
           <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label title1" for="email"></label>
              <div class="col-md-12">
                <input id="email" name="email" placeholder="Ingresa tu correo electrónico" class="form-control input-md" type="email">

              </div>
            </div>
 
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="mob"></label>
              <div class="col-md-12">
                <input id="mob" name="mob" placeholder="Ingresa tu número celular" class="form-control input-md" type="number">

              </div>
            </div>
 
 
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="password"></label>
              <div class="col-md-12">
                <input id="password" name="password" placeholder="Ingresa tu contraseña" class="form-control input-md" type="password">

              </div>
            </div>
 
            <div class="form-group">
              <label class="col-md-12control-label" for="cpassword"></label>
              <div class="col-md-12">
                <input id="cpassword" name="cpassword" placeholder="Confirma tu contraseña" class="form-control input-md" type="password">

              </div>
            </div>
            <?php if (@$_GET['q7']) {
              echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
            } ?>
            <!-- Button -->
            <div class="form-group">
              <label class="col-md-12 control-label" for=""></label>
              <div class="col-md-12">
                <input type="submit" class="sub btn btn-primary" value="Registrarse" class="btn btn-primary" />
              </div>
            </div>
 
          </fieldset>
        </form>
      </div><!--col-md-6 end-->
    </div>
  </div>
  </div><!--container end-->
 
  <!--Footer start-->
  <div class="row footer" style="position: relative;">
    <div class="col-md-3 box">
      <a style="position: relative; top: -635px; left: 180px;" href="" target="_blank">¿Quienes Somos?</a>
    </div>
    <div class="col-md-3 box">
      <a style="position: relative; top: -635px; left: -10px;" href="#" data-toggle="modal" data-target="#login">Acceso Administrador</a>
    </div>
    <div class="col-md-3 box">
      <a style="position: relative; top: -635px; left: -200px; " href="#" data-toggle="modal" data-target="#developers">Desarrolladores</a>
    </div>
    <div class="col-md-3 box">
      <a style="position: relative; top: -635px; left: -410px;" href="feedback.php">Observaciones</a>
    </div>
    <div class="col-md-3 box">
      <a style="position: relative; top: -670px; left: 750px;" href="https://www.google.com.mx/maps/place/BUAP:+Estadio+Ol%C3%ADmpico/@18.9986556,-98.205132,15z/data=!4m15!1m8!3m7!1s0x85cfbf5e12520371:0x471e3afdf138fca5!2sCd+Universitaria,+72592+Heroica+Puebla+de+Zaragoza,+Pue.!3b1!8m2!3d19.0014265!4d-98.2010885!16s%2Fg%2F1tfcnpbw!3m5!1s0x85cfbf67a87395e3:0x56ee1d75fcea295c!8m2!3d18.9972206!4d-98.197287!16s%2Fm%2F0h95fj3?entry=ttu" target="_blank">Mapa del sitio</a>
    </div>
  </div>
  <!-- Modal For Developers-->
  <div class="modal fade title1" id="developers">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" style="font-family:'typo' "><span style="color:black; margin-left: 230px;">Desarrolladores</span></h4>
        </div>

        <div class="modal-body">
          <p>
          <div class="row">
            <div class="col-md-4">
              <img src="image/avatar.jpg" width=100 height=100 alt="Sunny Prakash Tiwari" class="img-rounded">
            </div>
            <div class="col-md-5">
              <a href="../examen/perfil.php" style="color:#202020; font-family:'typo' ; font-size:18px" title="Accede a mi sitio web">Miguel Angel Potrero Iletl</a>
              <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+52 221 148 8369</h4>
              <h4 style="font-family:'typo' ">migueliletl333@gmail.com</h4>
              <h4 style="font-family:'typo' ">Universidad Tecnologica de Puebla</h4>
            </div>
          </div>
          </p>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
 
  <!--Modal for admin login-->
  <div class="modal fade" id="login">
    <div class="modal-dialog" style="top: 150px;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title"><span style="color:blue; position: relative;  left: 45%; font-family:'typo';">Ingresar</span></h4>
        </div>
        <div class="modal-body title1">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <form role="form" method="post" action="admin.php?q=index.php">
                <div class="form-group">
                  <input type="text" name="uname" maxlength="21" placeholder="Usuario Admin" class="form-control" />
                </div>
                <div class="form-group">
                  <input type="password" name="password" maxlength="15" placeholder="Contraseña Admin" class="form-control" />
                </div>
                <div class="form-group" align="center">
                  <input type="submit" name="login" value="Ingresar" class="btn btn-success" />
                </div>
              </form>
            </div>
            <div class="col-md-3"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--footer end-->
 
</body>  
   
</html>  

<!-- hola mundo -->
