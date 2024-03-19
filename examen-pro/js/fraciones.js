function asignarTexto(elemento, texto) {
  let elementoHTML = document.getElementById(elemento);
  elementoHTML.innerHTML = texto;
}

// Definir la clase Fraccion
class Fraccion {
  constructor(numerador, denominador) {
    this.numerador = numerador;
    this.denominador = denominador;
  }

  // Método para generar una fracción aleatoria
  static generarFraccionAleatoria() {
    var numerador = Fraccion.generarNumeroAleatorio(1, 5);
    var denominador = Fraccion.generarNumeroAleatorio(1, 10);
    return new Fraccion(numerador, denominador);
  }

  // Método para generar números aleatorios en un rango dado
  static generarNumeroAleatorio(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }

  // Método para mostrar la fracción en el DOM
  mostrar(elementoId) {
    var elementoHTML = document.getElementById(elementoId);
    if (elementoHTML) {
      elementoHTML.innerHTML = `<div class="numerador">${this.numerador}</div><div class="denominador">${this.denominador}</div>`;
    }
  }
}

// Función para asignar texto a un elemento HTML por su ID
function asignarTexto(id, texto) {
  var elementoHTML = document.getElementById(id);
  if (elementoHTML) {
    elementoHTML.textContent = texto;
  }
}

asignarTexto("f2", "Número de divisiones:");
asignarTexto(
  "f3",
  'Ingresa el número de divisiones y haz clic en "Dividir" para marcar la línea numérica.'
);

var startX = 50;
var startY = 100;
var endX = 450;
var endY = 100;

var canvas = document.getElementById("myCanvas");
var context = canvas.getContext("2d");

class Linea {
  constructor(startX, startY, endX, endY) {
    this.startX = startX;
    this.startY = startY;
    this.endX = endX;
    this.endY = endY;

    this.canvas = canvas;
    this.context = context;

    this.dibujarLinea();
  }

  dibujarLinea() {
    this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    this.context.beginPath();
    this.context.moveTo(this.startX, this.startY);
    this.context.lineTo(this.endX, this.endY);
    this.context.strokeStyle = "black";
    this.context.lineWidth = 2;
    this.context.stroke();
  }
}

class Division {
  constructor(startX, startY, endX, endY, context) {
    this.startX = startX;
    this.startY = startY;
    this.endX = endX;
    this.endY = endY;
    this.context = context;
  }

  dibujar() {
    this.context.beginPath();
    this.context.moveTo(this.startX, this.startY);
    this.context.lineTo(this.endX, this.endY);
    this.context.strokeStyle = "red";
    this.context.stroke();
  }
}

class Indicador {
  constructor(x, y, radio) {
    this.x = x;
    this.y = y;
    this.radio = radio;

    this.canvas = canvas;
    this.context = context;

    this.dibujarIndicador();
  }

  dibujarIndicador() {
    this.context.beginPath();
    this.context.arc(this.x, this.y, this.radio, 0, 2 * Math.PI);
    this.context.fillStyle = "black";
    this.context.fill();
  }
}

var linea;
var indicador;
var division;

// Función para manejar el evento del botón "Dividir"
var divisiones = []; // Array para almacenar las divisiones

canvas.addEventListener("click", function (event) {
  var rect = canvas.getBoundingClientRect();
  var mouseX = event.clientX - rect.left;
  var mouseY = event.clientY - rect.top;

  // Limitar el movimiento del indicador dentro de los límites de la línea
  if (mouseX < startX) {
    mouseX = startX;
  } else if (mouseX > endX) {
    mouseX = endX;
  }

  indicador.x = mouseX;
  indicador.y = startY; // Asegúrate de que el indicador se mantenga en la misma altura que la línea

  // Limpiar y redibujar la línea y el indicador
  linea.dibujarLinea();
  indicador.dibujarIndicador();

  // Redibujar las divisiones si existen
  for (var i = 0; i < divisiones.length; i++) {
    divisiones[i].dibujar();
  }
});

// Función para manejar el evento del botón "Dividir"
function mouseEvent() {
  var numerador = parseInt(document.getElementById("Numero").value);

  if (!isNaN(numerador) && numerador > 0) {
    var divisionWidth = (endX - startX) / numerador;

    // Dibujar las divisiones
    for (var i = 1; i < numerador; i++) {
      var divisionStartX = startX + i * divisionWidth;
      var divisionStartY = startY - 5; // Ajustar la posición vertical de la división
      var divisionEndX = divisionStartX;
      var divisionEndY = endY + 5; // Ajustar la posición vertical de la división

      var division = new Division(
        divisionStartX,
        divisionStartY,
        divisionEndX,
        divisionEndY,
        context
      );
      division.dibujar();

      divisiones.push(division); // Agregar la división al array
    }

    // Dibujar el indicador después de las divisiones
    indicador = new Indicador(50, 100, 5); // Crear una nueva instancia de Indicador
    indicador.dibujarIndicador();
  } else {
    alert("Ingresa un número válido para el número de divisiones.");
  }
}
var numerador; // Declarar la variable numerador a nivel global
var fraccion; // Declarar la variable fraccion a nivel global

// Declara la variable fraccion a nivel global
var fraccion;

document.addEventListener("DOMContentLoaded", function () {
  linea = new Linea(startX, startY, endX, endY); // Crear una instancia de Linea

  // Mostrar el título y el texto del párrafo
  asignarTexto("title", "Ejercicio de fracciones en la línea recta");

  // Crear una instancia de Fraccion y mostrarla
  fraccion = Fraccion.generarFraccionAleatoria(); // Asignar el valor a la variable global fraccion
  fraccion.mostrar("f1");

  // Mostrar el texto del párrafo
  asignarTexto(
    "p",
    `Mueve el punto ${fraccion.numerador}/${fraccion.denominador} en la recta numérica.`
  );
});

// Función para manejar el evento del botón "Comprobar"
function Comprobar() {
  // Calcular la posición actual del indicador en la línea
  var posicionIndicador = (indicador.x - startX) / (endX - startX);

  // Calcular la fracción correspondiente a la posición del indicador
  var fraccionCalculada = Math.round(posicionIndicador * fraccion.denominador);

  // Comprobar si la fracción calculada es igual a la fracción dada
  if (fraccionCalculada === fraccion.numerador) {
    // La posición del indicador es correcta
    alert("¡Bien hecho! La posición del numerador es correcta.");
  } else {
    // La posición del indicador es incorrecta
    alert(
      "Lo siento, la posición del numerador es incorrecta. Inténtalo de nuevo."
    );
  }
}
