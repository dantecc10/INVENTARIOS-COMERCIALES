<?php
session_start();
if (!empty($_POST['InicioSesión'])) {
    if (!empty($_POST['usuario']) and !empty($_POST['contraseña'])) {
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        $sql = $conexión->query("SELECT * FROM `estudiantes_tercero` WHERE `Usuario`='$usuario' AND `Contraseña`='$contraseña'");
        if ($datos = $sql->fetch_object()) {
            $_SESSION['ID'] = $datos->ID;
            $_SESSION['Nombre'] = $datos->Nombre;
            $_SESSION['Apellidos'] = $datos->Apellidos;
            $_SESSION['Usuario'] = $datos->Usuario;
            $_SESSION['Calificación'] = $datos->Calificación;
            header("location: ../Exámenes/ExamenHSE.php");
        } else {
            echo "<div>Acceso denegado<div>";
        }
    } else {
        echo "Campos vacíos";
    }
}
