<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
    box-sizing: border-box;	
 }

.recta {
    display: block;
    width: 600px;
    height: 2px;
    background-color: black;
    position: relative;
    margin: 100px auto;
    box-shadow:0px 0px 10px 1px #25e21e;

}

.marcador {
    width: 1px;
    height: 10px;
    background-color: black;
    position: absolute;
    top: -5px;
}

.numero {
    position: absolute;
    top: 20px;
    text-align: center;
    font-size: 20px;
}

h1{
    color: rgba(red, green, rgb(53, 53, 192), alpha);
    text-align: center;
    font-family:fantasy;
    line-height: normal;
    font-weight: 50;
    width: 100;
    background-color: rgb(93, 93, 230);
    border-radius: 50px;
}

h3{
    text-align: center;
    display: block;
    color: rgb(34, 34, 224);
    font-family: monospace;
}

.send{
    color: #25e21e;
    background-color: rgb(32, 11, 151);
    margin: 40px 60px;
    padding: 10px 60px;
    border-radius: 2em;
    transition: all 1.3s;
}

.send:hover{
    color: #25e21e;
    background-color: rgb(32, 11, 151);
    margin: 40px 60px;
    padding: 30px 60px;
    border-radius: 3em rgba(173, 9, 214, 0.781);
    box-shadow: 0px 0px 10px #19af14;
    transition: all 1.3ms;

}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Recta Numérica Ejercicios</title>
    <style>
        
    </style>
</head>
<body>

<?php

class EjercicioRecta {
    private $numero_aleatorio;

    public function __construct() {
        $this->numero_aleatorio = rand(1, 7);
        //echo "Número aleatorio: " . $this->numero_aleatorio;
       
    }

    public function mostrarEjercicio() {
        switch ($this->numero_aleatorio) {
            case 1:
                echo '
                <br>
                <h1>ejercicio 1</h1>
                <h3>Cual de las siguientes opciones es la correcta</h3>
                
                <div class="recta">
                <div class="marcador" style="left: 0;"></div>
                <div class="numero" style="left: 0;">0</div>
        
                <div class="marcador" style="left: 20px;"></div>
                <div class="marcador" style="left: 40px;"></div>
                <div class="marcador" style="left: 60px;"></div>
                <div class="marcador" style="left: 80px;"></div>
        
                <div class="marcador" style="left: 100px;"></div>
                <div class="marcador" style="left: 99px;"></div>
                <div class="numero" style="left: 100px;">1</div>
        
                <div class="marcador" style="left: 120px;"></div>
                <div class="marcador" style="left: 140px;"></div>
                <div class="marcador" style="left: 160px;"></div>
                <div class="marcador" style="left: 180px; color: red;"></div>
                <div class="numero" style="left: 170px; color: red;"><strong>|?|</strong></div>
        
        
                <div class="marcador" style="left: 200px;"></div>
                <div class="numero" style="left: 200px;">2</div>
            </div>
        
            <br>
                 <form action="rectaTodo.php" method="post">
        
                    <div class="container text-center">
                        <div class="row align-items-start">
                          <div class="col">
                            <input type="radio" id="radio" name="radio1" value="incorrect">1 1/2</input> <br>
                          </div>
                          <div class="col">
                            <input type="radio" id="radio" name="radio1" value="correct"> 1 4/5</input>  <br>
                          </div>
                          <div class="col">
                            <input type="radio" id="radio" name="radio1" value="incorrect"> 1 1/2</input>   <br>
                          </div>
                        </div>
                        <input class="send" type="submit" value="Enviar">
                      </div>
                 <br>
                 </form>';

        break;
            case 2:
                echo'<br><h1>ejercicio 2</h1>
                <h3>Cual de las siguientes opciones es la correcta</h3>
                
                <div class="recta">
                <div class="marcador" style="left: 0;"></div>
                <div class="numero" style="left: 0;">0</div>
            
                <div class="marcador" style="left: 100px;"></div>
                <div class="marcador" style="left: 200px;"></div>
                <div class="numero" style="left: 200px;">1</div>
            
            
                <div class="marcador" style="left: 299px;"></div>
                <div class="marcador" style="left: 300px;"></div>
                <div class="numero" style="left: 290px; color: red;">|?|</div>
            
                <div class="marcador" style="left: 399px;"></div>
                <div class="marcador" style="left: 400px;"></div>
                <div class="numero" style="left: 400px ">2</div>
            
                <div class="numero" style="left: 180px; "></div>
            </div>
            
                 <br>
                     <form action="rectaTodo.php" method="post">
            
                        <div class="container text-center">
                            <div class="row align-items-start">
                              <div class="col">
                                <input type="radio" id="radio" name="radio1" value="correct"> <strong>1</strong> 1/2</input> <br>
                              </div>
                              <div class="col">
                                <input type="radio" id="radio" name="radio1" value="incorrect"> <strong>1</strong> 1/3</input>  <br>
                              </div>
                              <div class="col">
                                <input type="radio" id="radio" name="radio1" value="incorrect"> <strong>2</strong> 1/3</input><br>
                              </div>
                            </div>
                            <input class="send" type="submit" value="Enviar">
                          </div>
                     <br>
                     </form>';
                
        break;
            case 3:
                echo'<br><h1>ejercicio 3</h1>
                <h3>Cual de las siguientes opciones es la correcta</h3>
                
                <div class="recta">
                <div class="marcador" style="left: 0;"></div>
                <div class="numero" style="left: 0;">0</div>
        
                <div class="marcador" style="left: 33px;"></div>
                <div class="marcador" style="left: 66px;"></div>
                <div class="marcador" style="left: 99px;"></div>
        
                <div class="marcador" style="left: 100px;"></div>
                <div class="numero" style="left: 100px;">1</div>
        
                <div class="marcador" style="left: 133px;"></div>
                <div class="marcador" style="left: 166px;"></div>
                <div class="marcador" style="left: 199px;"></div>
                
        
        
                <div class="marcador" style="left: 200px;"></div>
                <div class="numero" style="left: 200px;">2</div>
                <div class="marcador" style="left: 233px;"></div>
                <div class="numero" style="left: 233px;">|?|</div>
                <div class="marcador" style="left: 266px;"></div>
                <div class="marcador" style="left: 299px;"></div>
                <div class="numero" style="left: 300px;">3</div>
        
                <div class="numero" style="left: 180px; color: red;"></div>
            </div>
        
                
                 <br>
                 <form action="rectaTodo.php" method="post">
        
                    <div class="container text-center">
                        <div class="row align-items-start">
                          <div class="col">
                            <input type="radio" id="radio" name="radio1" value="incorrect">1 1/3</input> <br>
                          </div>
                          <div class="col">
                            <input type="radio" id="radio" name="radio1" value="incorrect"> 2 7/3</input>  <br>
                          </div>
                          <div class="col">
                            <input type="radio" id="radio" name="radio1" value="correct"> <strong>2</strong> 1/3</input><br>
                          </div>
                        </div>
                        <input class="send" type="submit" value="Enviar">
                      </div>
                 <br>
                 </form>';
        break;
            case 4:
                echo'<br><h1>ejercicio 4</h1>
                <h3>Cual de las siguientes opciones es la correcta</h3>
                
                <div class="recta">
                <div class="marcador" style="left: 0;"></div>
                <div class="marcador" style="left: 1px;"></div>
                <div class="numero" style="left: 0;">0</div>
        
                <div class="marcador" style="left: 40px;"></div>
                <div class="marcador" style="left: 80px;"></div>
                <div class="marcador" style="left: 120px;"></div>
        
                <div class="marcador" style="left: 160px;"></div>
                <div class="marcador" style="left: 199px;"></div>
                <div class="marcador" style="left: 200px;"></div>
                <div class="numero" style="left: 200px;">1</div>
        
                <div class="marcador" style="left: 240px;"></div>
                <div class="marcador" style="left: 280px;"></div>
                <div class="marcador" style="left: 320px;"></div>
                
        
        
                <div class="marcador" style="left: 360px;"></div>
                <div class="numero" style="left: 360px;">|?|</div>
        
                <div class="marcador" style="left: 399px;"></div>
                <div class="marcador" style="left: 200px;"></div>
                <div class="numero" style="left: 400px;">2</div>
            </div>
            
                 <br>
                 <form action="rectaTodo.php" method="post">
        
                    <div class="container text-center">
                        <div class="row align-items-start">
                          <div class="col">
                            <input type="radio" id="radio" name="radio1" value="correct"><strong>1</strong> 4/5</input> <br>
                          </div>
                          <div class="col">
                            <input type="radio" id="radio" name="radio1" value="incorrect"><strong>4/5</strong></input>  <br>
                          </div>
                          <div class="col">
                            <input type="radio" id="radio" name="radio1" value="incorrect"> <strong>1</strong> 1/5</input><br>
                          </div>
                        </div>
                        <input class="send" type="submit" value="Enviar">
                      </div>
                 <br>
                 </form>';
        break;
            case 5:
                echo'<br><h1>ejercicio 5</h1>
                <h3>Cual de las siguientes opciones es la correcta</h3>
                
                <div class="recta">
                <div class="marcador" style="left: 0;"></div>
                <div class="marcador" style="left: 1px;"></div>
                <div class="numero" style="left: 0;">0</div>
        
                <div class="marcador" style="left: 66px;"></div>
                <div class="marcador" style="left: 133px;"></div>
                <div class="marcador" style="left: 199px;"></div>
        
                
                <div class="marcador" style="left: 200px;"></div>
                <div class="numero" style="left: 190px;">1</div>
        
                <div class="marcador" style="left: 266px;"></div>
                <div class="marcador" style="left: 332px;"></div>
                <div class="marcador" style="left: 399px;"></div>
                
        
        
                <div class="marcador" style="left: 400px;"></div>
                <div class="numero" style="left: 390px;">2</div>
        
                <div class="marcador" style="left: 466px;"></div>
                <div class="marcador" style="left: 532px;"></div>
                <div class="numero" style="left: 525px; color: red;">|?|</div>
                <div class="marcador" style="left: 599px;"></div>
                <div class="numero" style="left: 600px;">3</div>
            </div>
        
                 
                 
                
        
                 <br>
                 <form action="rectaTodo.php" method="post">
        
                    <div class="container text-center">
                        <div class="row align-items-start">
                          <div class="col">
                            <input type="radio" id="radio" name="radio1" value="incorrect"><strong>2</strong> 7/3</input> <br>
                          </div>
                          <div class="col">
                            <input type="radio" id="radio" name="radio1" value="correct"><strong>2</strong> 2/3</input>  <br>
                          </div>
                          <div class="col">
                            <input type="radio" id="radio" name="radio1" value="incorrect"> <strong>2</strong> 1/3</input><br>
                          </div>
                        </div>
                        <input class="send" type="submit" value="Enviar">
                      </div>
                 <br>
                 </form>';
        break;
            case 6:
                $this->mostrarEjercicioComun();
                break;

            case 7:
                echo'
                <h1><br>ejercicio 7</h1>
                    <h3>¿Que fraccion impropia corresponde con la recta numerica?</h3>
                    
                    <div class="recta">
                        <div class="recta">
                            <div class="marcador" style="left: 0;"></div>
                            <div class="marcador" style="left: 1px;"></div>
                            <div class="numero" style="left: 0;">0</div>
                    
                            <div class="marcador" style="left: 66px;"></div>
                            <div class="marcador" style="left: 133px;"></div>
                            <div class="marcador" style="left: 199px;"></div>
                    
                    
                            <div class="marcador" style="left: 266px;"></div>
                            <div class="marcador" style="left: 332px;"></div>
                            <div class="marcador" style="left: 399px;"></div>
                            
                    
                    
                            <div class="marcador" style="left: 462px;"></div>
                            <div class="marcador" style="left: 528px;"></div>
                            <div class="marcador" style="left: 599px;"></div>
                            <div class="numero" style="left: 525px; color: red;">|?|</div>
                            <div class="marcador" style="left: 599px;"></div>
                            <div class="numero" style="left: 600px;">1</div>
                </div>
            
                     
                     <br>
                     <form action="rectaTodo.php" method="post">
            
                        <div class="container text-center">
                            <div class="row align-items-start">
                              <div class="col">
                                <input type="radio" id="radio" name="radio1" value="incorrect"> 7/9</input> <br>
                              </div>
                              <div class="col">
                                <input type="radio" id="radio" name="radio1" value="incorrect"> 9/9</input>  <br>
                              </div>
                              <div class="col">
                                <input type="radio" id="radio" name="radio1" value="correct"> 8/9</input><br>
                              </div>
                            </div>
                            <input class="send" type="submit" value="Enviar">
                          </div>
                     <br>
                     </form>';
            default:
                echo 'Tienes suerte, no hay ejercicio extra para ti';
                break;
        }
    }

    private function mostrarEjercicioComun() {
        echo '<br><h1></h1>
        <h1>ejercicio 6</h1>
            <h3>¿Que fraccion impropia corresponde con la recta numerica?</h3>
            
            <div class="recta">
            <div class="marcador" style="left: 0;"></div>
            <div class="marcador" style="left: 1px;"></div>
            <div class="numero" style="left: 0;">0</div>
    
            <div class="marcador" style="left: 150px;"></div>
            <div class="marcador" style="left: 299px;"></div>
            <div class="marcador" style="left: 300px;"></div>
            <div class="numero" style="left: 290px;">1</div>
    
            <div class="marcador" style="left: 450px;"></div>
            <div class="numero" style="left: 440px; color: red;">|?|</div>
            <div class="marcador" style="left: 599px;"></div>
            <div class="marcador" style="left: 600px;"></div>
            <div class="numero" style="left: 590px;">2</div>
        </div>
    
            
        
             <br>
             <form action="rectaTodo.php" method="post">
    
                <div class="container text-center">
                    <div class="row align-items-start">
                      <div class="col">
                        <input type="radio" id="radio" name="radio1" value="incorrect"> 7/3</input> <br>
                      </div>
                      <div class="col">
                        <input type="radio" id="radio" name="radio1" value="incorrect"> 2/3</input>  <br>
                      </div>
                      <div class="col">
                        <input type="radio" id="radio" name="radio1" value="correct"> 3/2</input><br>
                      </div>
                    </div>
                    <input class="send" type="submit" value="Enviar">
                  </div>
             <br>
             </form>';
    }
}

$ejercicio = new EjercicioRecta();
$ejercicio->mostrarEjercicio();

?>
<br>
<?php

$radio1 ='';
if ($_SERVER["REQUEST_METHOD"] == "POST"){

   $radio1 = (isset($_POST['radio1']))?  $_POST['radio1'] : "";  // radio button value
   //print_r($radio1);    // returns string

   //$radio = $_POST['radio1'];
   $resultado = 'correct';
   if ($radio1 != $resultado) {
      echo '<script> 
      alert("Respuesta incorrecta, ¡Te veo en extraordinarios!");
      window.location="./account.php";
      </script>';
      
   }else{
      echo  "<script> 
      alert('felicidades has pasado correctamente el  ejercicio, tienes: 10');
      window.location = './account.php';
      </script>;
      ";

   }
}

?>
</body>
</html>