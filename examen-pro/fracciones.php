<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fracciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../examen-pro/css/style.css">
</head>
<body >
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary " data-bs-theme="dark" style="text-align: center;">
        <div class="container-fluid" style="text-align: center;">
          <a class="navbar-brand" href="#">Fracciones en la línea recta</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            </li >
            </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-primary" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="p-3">
                <h1 id="title" style="position: center; text-align: center; background-color: rgb(192, 165, 218); border-radius: 65%;" class=""></h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="p-3">         
            <p id="p">
            </p>
        </div>
        <div>
            <p id="f3"></p>
        </div>
        <div class="p-3">
          <div id="f1"></div>
            <p id="f2"><div id="f1"></div> </p>
            <input type="text" required id="Numero">
            <button id="btn" class="btn btn-primary " type="button" onclick="mouseEvent()">Dividir</button>
        </div>    
        <div >
          <canvas id="myCanvas" width="500" height="200"></canvas>
          <div>
            <button id="btnComprobar" class="btn btn-primary " type="button" onclick="Comprobar()">Comprobar</button>
          </div>
          <div class="p-3">
            <button class="btn btn-primary " type="button" onclick="location.reload()">ReStart</button>
          </div>
        </div>
        <div id="mensaje" class="mensaje-oculto">
          <span class="cerrar-mensaje" onclick="cerrarMensaje()">&times;</span>
          Por favor, ingresa un número válido mayor que cero.
      </div>
    </div>
    <script src="../examen-pro/js/fraciones.js"></script>
</body>
</html>


