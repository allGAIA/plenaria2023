<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $sabor = isset($_REQUEST['sabor'])? $_REQUEST['sabor'] : null;
    $Costo = isset($_REQUEST['Costo'])? $_REQUEST['Costo'] : null;
    $Precio = isset($_REQUEST['Precio'])? $_REQUEST['Precio'] : null;
    $Precio_m = isset($_REQUEST['Precio_m'])? $_REQUEST['Precio_m'] : null;

    //Datos de conexion
$hostDB='localhost';
$nameDB='heladitos';
$userDB='root';
$passwordDB='';

//Configuracion de conexion
$hostPDO = "mysql:host=$hostDB;dbname=$nameDB;";
$myConexion = new PDO($hostPDO, $userDB, $passwordDB);

// preparar INSERT
$myInsert = $myConexion->prepare('INSERT INTO paletas (sabor, Costo, Precio, Precio_m)
                                   VALUE (:sabor, :Costo,:Precio, :Precio_m)');

$myInsert ->execute(
    array(
        'sabor' => $sabor,
        'Costo' => $Costo,
        'Precio' => $Precio
        'Precio_M' => $Precio_m
    )
);
}
?>