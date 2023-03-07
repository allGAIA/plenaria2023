<?php 
    //Datos de conexión
    $hostDB='localhost';
    $nameDB='paletas';
    $userDB='root';
    $passwordDB='Lernjergui-97';

     //Configuración de conexión
    $hostPDO = "mysql:host=$hostDB;dbname=$nameDB;";
    $myConexion = new PDO($hostPDO, $userDB, $passwordDB);

    //Query de bd-
    $myQuery = $myConexion->prepare('SELECT * FROM paletas;');

    //Ejecutar Query
     $myQuery->execute();  
?>