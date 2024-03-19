
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Recta numérica</title>

<style>
    body {

        background-color: #b3d6ee;
    }
    #videoContainer {
        text-align: center;
        margin: 0 auto;
    }
    
    #cont {
        text-align: justify;
        
    }
    
    #imagen {
        max-width: 50%;
        display: block;
        margin: 0 auto;
    }
    #textoAdicional{
        text-align: justify;
        margin-left: 2%;
    }
    #cont{
        margin-left: 2%;
    }

</style>
</head>
<body>
    <div id="tituloContainer" margin-left: 2%;>
        <h1>Fracciones en la línea recta </h1> <!-- Añadido un título antes del contenedor -->
    </div>
    
<div id="videoContainer">
    <!-- Aquí se insertará el video mediante JavaScript -->
   <script src="../examen-pro/js/script.js"></script>
</div>
<div id="cont">
    <p>Representar fracciones en la recta numérica <br><br>
    Para ubicar fracciones en la recta numérica se divide la unidad (entero) en segmentos iguales,
    como indica el denominador, y se ubica la fracción según indica el numerador.</p>

    <img src="../examen-pro/imagenes/recta1.png" alt="Tu imagen" > 
</div>
<div id="textoAdicional">
    <p>¿Cómo ubicar fracciones que no son unitarias?<br><br>
    Para ubicar fracciones que no son unitarias en la recta numérica se realiza el mismo procedimiento anterior, es decir,
     se divide el entero en partes iguales según lo que indique el denominador de la fracción. Luego, se ubica la
     fracción en el segmento que está señalado en el numerador.<br><br>
     ¿Cómo representamos en la recta numérica fracciones con distinto denominador?<br><br>
     Representaremos:<br><br>
     1/2 y 2/3<br><br>
     1° Dividimos la recta de 0 a 1 en tantos intervalos como nos indique el producto de los denominadores de las fracciones. <br>En este caso serán 6 intervalos, ya que 2 • 3 = 6
     2° Ubicamos ambas fracciones en la recta:<br><br>
     Para ubicar  
     1/2 multiplicamos su numerados por el denominador de la otra fracción:
     1 * 3 =3<br><br>
     Entonces consideramos 3 de los intervalos de la recta.<br><br>
     Para ubicar 2/3 multiplicamos su numerador por el denominador de la otra fracción:<br> 
     2 * 2 = 4<br>
    Entonces consideramos 4 de los intervalos de la recta.
     </p>
     <img src="../examen-pro/imagenes/recta2.png" alt="Tu imagen" > 
</div>
<script>
//Definición de la clase Video
class Video {
    constructor(src, width, height) {
        this.src = src;
        this.width = width;
        this.height = height;
    }

    // Método para agregar el video al contenedor
    agregarVideo(contenedor) {
        const videoElement = document.createElement('video');
        videoElement.src = this.src;
        videoElement.width = this.width;
        videoElement.height = this.height;
        videoElement.controls = true;
        contenedor.appendChild(videoElement);
    }
}

// Crear una instancia de la clase Video
const miVideo = new Video('mi_video.mp4');

// Agregar el video al contenedor
const contenedor = document.getElementById('videoContainer');
miVideo.agregarVideo(contenedor);
</script>
</body>
</html>
