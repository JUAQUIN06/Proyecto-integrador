<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "reserva_mesa";

$conexion =  new mysqli($host,$user,$pass,$db);

if(!$conexion){
  echo "Conexion fallida";
}

?>