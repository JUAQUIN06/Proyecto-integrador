<?php

    include_once("../config/conexion.php");
    $id = $_POST['idR'];
    $estado = $_POST['estadoN'];

    $sql = "UPDATE reserva SET 
                    estado_id_estado='".$estado."' WHERE idr =".$id."";

    if ($resultado = $conexion->query($sql)) {
        header("location: ../reserva.php");
    }
