<?php

include ("../config/conexion.php");

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$fecha = $_POST['fecha'];
$celular = $_POST['celular'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$password = sha1($_POST['password']);
$estado = $_POST['estado'];
$tipo = $_POST['tipo'];

$sql = "INSERT INTO usuario(nombres, apellidos, numero, fecha, email, direccion, password, estado_usuario, cargo_idc ) VALUES ('$nombres','$apellidos','$celular','$fecha','$email', '$direccion', '$password', '$estado','$tipo')";
$resultado = mysqli_query($conexion, $sql);

if ($resultado === TRUE) {
    header("location:../iniciar-sesion.php");
} else {
    echo "Datos NO insertados";
}


?>
