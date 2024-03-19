// Crear un elemento de video
const videoElement = document.createElement("video");
videoElement.src = "../examen-pro/imagenes/Presentación2.mp4"; // URL del video
videoElement.width = 500; // Ancho del video
videoElement.height = 300; // Alto del video
videoElement.controls = true; // Mostrar controles de reproducción

// Obtener el contenedor
const contenedor = document.getElementById("videoContainer");

// Agregar el video al contenedor
contenedor.appendChild(videoElement);
// Modificar el tamaño del contenedor
contenedor.style.width = "500px"; // Modificar el ancho del contenedor
contenedor.style.height = "300px"; // Modificar la altura del contenedor
