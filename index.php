<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <?php

        $numRandom = rand(1,6);
        
        // Realizar una página web que muestre en pantalla un número aleatorio del uno
        // al seis, para cada visitante de la página. Mejorar la apariencia de dicho número
        // para mostrarlo con borde, que usted deberá mostrar los números de forma
        // aleatoria utilizando la función rand().
        
        echo "<h3>Numero Random</h3> \n";

        echo "<div class='number'>$numRandom</div> <br/>";
        
        
        // manera aleatoria para cada visitante de la página. Las caras de los dados son
        // Realizar una página web que muestre en pantalla una cara de un dado de
        // rand(). Descargue las caras del dado u nombre cada imagen con el número que
        // imágenes que usted deberá mostrar de forma aleatoria utilizando la función
        // representa.

        echo "<h3>Dado Random</h3> \n";

        echo "<img src='img/dado_$numRandom.png'>\n";



        ?>
    </main>
    <div class='container'>
        <?php 
        
        //Realizar una página web que cada vez que se ejecute muestre la tirada de dos
        // dados al azar y diga si ha salido una pareja de valores iguales o el mayor de los
        // valores obtenidos. Utilizar estructura de control en php.
        
        echo "<br/> <h3>Dos dados Random</h3> \n";


        $diceArray = [1,2,3,4,5,6];
        
        $dice_1 = rand(0,5);
        $dice_2 = rand(0,5);


        if($dice_1 === $dice_2){

            echo "<div style='display: flex;  gap: 10px'> 
                     <img src='img/dado_$diceArray[$dice_1].png'> 
                     <img src='img/dado_$diceArray[$dice_2].png'>  
                 </div>\n";

            echo "<p> Los valores son iguales</p>";

        }else if ($dice_1 > $dice_2){
            echo "<div style='display: flex;  gap: 10px'> 
                    <img src='img/dado_$diceArray[$dice_1].png'> 
                    <img src='img/dado_$diceArray[$dice_2].png'>  
                 </div>\n";

            echo "<p> El mayor valor es ".($dice_1 + 1)."</p>";

        }
        else {
            echo "<div style='display: flex;  gap: 10px'> 
                    <img src='img/dado_$diceArray[$dice_1].png'> 
                    <img src='img/dado_$diceArray[$dice_2].png'>  
                 </div>\n";

             echo "<p> El mayor valor es ".($dice_2 + 1)."</p>";
        }
        ?>
    </div>
</body>
</html>