<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
 <h1> EJERCICIOS</h1>
 <?php
 //EJERCICIO 1
 $a=0;
 $b=4;
 if ($a<$b) {
     echo "La variable b es un numero positivo";
     echo "<br>";
 }

 //EJERCICIO 2

$a=5;
$b=12;
if ($a>1 & $a<10) {
   echo "Es mayor a 1 y menor a 10 ";
   echo "<br>";
 }

 //EJERCICIO 3
 if ($b>10 || $b<2) {
   echo "Cumple la condicion";
   echo "<br>";
 }


//Ejercicio 4
$a=4;
$b=4;
if ($a>$b) {
  echo "La variable a es mayor que la variable b";
  echo '<br>';
} elseif ($a<$b) {
  echo "La variable a es menor que la variable b";
  echo '<br>';
} else {
echo "La variable a es igual la variable b";
}

  ?>



  </body>
</html>
