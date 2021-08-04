<?php

    include("conexion.php");

    $nombre_contacto = trim($_POST['nombre_contacto']);
    $correo_contacto = trim($_POST['correo_contacto']);
    $telefono_contacto = trim($_POST['telefono_contacto']);
    $comentario_contacto = trim($_POST['comentario_contacto']);
    date_default_timezone_set("America/Costa_Rica");
    $fecha_registro = date("Y-m-d H:i:s");

    $sql = "CALL insert_contacto ('$nombre_contacto','$correo_contacto','$telefono_contacto','$comentario_contacto','$fecha_registro')";

    mysqli_query($conexion, $sql);
    //header("Location: ../index.php");
?>