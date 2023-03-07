<?php

    include("conexion.php");

    $correo = $_POST['correo'];
    $password = $_POST['pass'];

    $sql = "SELECT * FROM usuario WHERE Correo = '$correo'";

    $resultado = mysqli_query($conexion, $sql);

    while ($row = mysqli_fetch_array($resultado)) {
        $correoBD = $row['Correo'];
        $passwordBD = $row['Contraseña'];
    }

    if ($correo == $correoBD && $password == $passwordBD) {
        echo "Has ingresado al sistema";
    } else {
        echo "Error al ingresar al sistema";
    }

?>