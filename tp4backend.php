<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

//Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.
    $numeros = [2,4,6,8,10,12,14,16,18,20];
    print "1)";
      foreach ($numeros as $valor) {
      print "<p>$valor<p/>";
      }
      print "<pre>\n";

    print "2)";
      $valores = ["Pedro", "Ana", 34 , 1];
      print "<pre>";
      print_r ($valores);
      print "<pre>";

    print "3)";

      print "<pre>";

    $Datos = [
            "Nombre"=>"Pedro",
            "Apellido"=>"Torres",
            "Dirección"=>"Av. Mayor 3703",
            "Teléfono"=>1122334455];

      print ($Datos["Nombre"]);
      print "<pre>";
      print ($Datos ["Apellido"]);
      print "<pre>";
      print ($Datos ["Dirección"]);
      print "<pre>";
      print ($Datos ["Teléfono"]);
      print "<pre>";

    print "4)";
    print "<pre>";
    $ciudad = [ "Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
    foreach ($ciudad as $C => $cd) {
      print "<pre>";
      print("La ciudad con el indice $C tiene el nombre $cd");
      print "<pre>";
    }
    print "<pre>";

  print "5)";
  print "<pre>";
  $city = [ "MD" => "Madrid", "BCL" => "Barcelona", "LD" => "Londres", "NY" => "New York", "LA" => "Los Ángeles", "CCG" => "Chicago"];
  foreach ($city as $A => $B) {
    print "<pre>";
    print("El indice de $B es $A");
    print "<pre>";
  }
 ?>
  </body>
</html>
