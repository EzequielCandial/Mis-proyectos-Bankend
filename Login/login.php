<?php
$usuario = $_POST ["usuario"];
$contrasenia = $_POST ["pass"];

$ckusuario= "admin";
$ckpass= 1234;

if ($usuario==$ckusuario & $contrasenia==$ckpass) {
  header ("location:https://www.google.com.ar/");
} else {
  echo "Incorrecto";
  header ("location:login.html");
}
 ?>
