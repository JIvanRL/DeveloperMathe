<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update password</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
  <script src="js/script3.js"></script>
<style>
html, body, .container {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.custom-shadow {
    border: 1px solid #ccc; /* Define un borde alrededor del contenedor */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); /* Agrega sombreado */
    border-radius: 5px; /* Opcional: Agrega bordes redondeados */
    max-width: 500px; /* Define el ancho máximo del contenedor */
    height: 500px;
    margin-left: auto;
    margin-right: auto;
}
.input-icon-container {
            position: relative;
        }
        .input-icon-container .password-toggle {
            position: absolute;
            right: 10px;
            top: 10px;
            cursor: pointer;
        }
</style>
</head>
<body>

<div class="container custom-shadow">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel p-4">
                <h2 class="p-4">Cambio de Contraseña</h2>
                <form id="changePasswordForm" action="passwordUpdate.php?q=change_password" method="post">
                    <!-- Campo oculto para el token -->
                    <input type="hidden" name="token" id="token" value="">
                    <!-- <div class="form-group">
                        <div class="input-icon-container">
                        <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Contraseña antigua" required>
                        <i class="fas fa-eye password-toggle" onclick="togglePasswordVisibility('old_password')"></i>  
                        </div>                                       
                    </div> -->
                    <div class="form-group">
                        <div class="input-icon-container">
                        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Nueva Contraseña" required>
                        <i class="fas fa-eye password-toggle" onclick="togglePasswordVisibility('new_password')"></i> 
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="input-icon-container">
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Nueva Contraseña" required>
                        <i class="fas fa-eye password-toggle" onclick="togglePasswordVisibility('confirm_password')"></i> 
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Cambiar Contraseña</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="responseModal" tabindex="-1" role="dialog" aria-labelledby="responseModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="responseModalLabel">Respuesta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="responseModalBody">
        <!-- El mensaje se insertará aquí -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
 </div>
</div>
<script>
    function togglePasswordVisibility(inputId) {
            var input = document.getElementById(inputId);
            if (input.type === "password") {
                input.type = "text";
            } else {
                input.type = "password";
            }
        }
</script>
</body>
</html>
