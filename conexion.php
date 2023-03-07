<?php

    //Datos de conexión
    $hostDB='localhost';
    $nameDB='paletas';
    $userDB='root';
    $passwordDB='Lernjergui-97';

    //Configuración de conexión
    $conexion = mysqli_connect($hostDB,$userDB,$passwordDB,$nameDB);

    if ($conexion) {
        echo "Estás conectado";
    } else {
        echo "No estás conectado";
    }

?>