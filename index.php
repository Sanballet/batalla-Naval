<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
       
        <link rel="stylesheet" href="estilo2.css" type="text/css" />
        <title>BattleShip Game</title>
    </head>
    <body>
        
<?php
         $nombre =$_POST["nombre"]; 
         $apellido =$_POST["apellido"];
         $edad =$_POST["edad"];

         echo "<center>Nombre: ".$nombre.", ".$apellido.", <br> Edad: ".$edad." <br>Esta listo tu registro.<center><br>";
    ?>

<?php        
$casilla="____";
$casilla1="____";
echo "<center>";   
echo "<h1>Tablero de Batalla Naval <h1>";
echo "<table border = 1>";

  for ($a=1; $a <=5 ; $a++) {
      echo "<tr>";
      for ($i=1; $i <=5 ; $i++) { 
          echo "<td>$casilla</td>";
          echo "<td>$casilla1</td>";
      }
      echo "</tr>";
      for ($i=1; $i <=5 ; $i++) { 
          echo "<td>$casilla1</td>";
          echo "<td>$casilla</td>";
      }
  }
echo "</table>";
echo "</center>";
?> 
        
        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="board">
                    </div>
                </div>
                <div class="col">
                    <div id="boardAttack">
                    </div>
                </div>
            </div>
            <h4>Tus naves:</h4>
            <div id="ships" class="row">
                <div class="col"> 
                    <div>
                        <span>Acorazado</span></br>
                        <span>Tamaño: 3</span>
                    </div>
                    <div class="position"></div>
                </div>
                <div class="col"> 
                    <div>
                        <span>Submarino</span></br>
                        <span>Tamaño: 1</span>
                    </div>
                    <div class="position"></div>
                </div>
                <div class="col"> 
                    <div>
                        <span>Destructor</span></br>
                        <span>Tamaño: 1</span>
                    </div>
                    <div class="position"></div>
                </div>           
            </div>
            <div class="row">
                <button id="button" onclick="startGame()">Empezar juego</button>
            </div>
        </div>
        <script type="text/javascript" src="logica.js"></script>
    </body>
</html>