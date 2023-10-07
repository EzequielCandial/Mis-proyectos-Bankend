<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
  print "<p>Ejercicio1</p>\n";
for ($i=1; $i <=100 ; $i++) {
  print "<p>$i</p>\n";
}

  print "<p>Ejercicio2</p>\n";
for ($i=100; $i >=1 ; $i--) {
print "<p>$i</p>\n";
}

print "<p>Ejercicio3</p>\n";
for ($i=0; $i <=100 ; $i+=2) {
print "<p>$i</p>\n";
}

print "<p>Ejercicio4</p>\n";
for ($i=1; $i <=100 ; $i+=2) {
print "<p>$i</p>\n";
}

print "<p>Ejercicio5</p>\n";
$suma=0;
for ($i=1; $i <=20 ; $i++) {
  $suma = $suma + $i;
}
print $suma;

print "<p>Ejercicio6</p>\n";
$suma=0;
for ($i=0; $i <=20 ; $i+=2) {
  $suma = $suma + $i;
}
print $suma;
?>

  </body>
</html>
