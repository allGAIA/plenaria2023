<?php 
    include "Controladores/conexion.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style_tabla.css">

    <script src="https://kit.fontawesome.com/46f8b2561d.js" crossorigin="anonymous"></script>

    <title>Heladitos Gourmet</title>
</head>
<body>

    <header> 
    
        <div class= "encabezado">
            <img src="img/Foto.png" alt="" class="foto" >
            <h1 class="titulo">Heladitos Gourmet</h1>
        </div>
    
    </header>

    <h1 class="text-center p-3">Tabla</h1>
        
    <div class="container-fluid row">
        <form action="" method="post" class= "col-4 p-3">
            <h3 class="text-center">Registro de paletas</h3>
            <div class="form-group">
                <label for="sabor">Sabor</label>
                <input type="text" id="sabor" name="sabor">            
            </div>

            <div class="form-group">
                <label for="Costo">Costo</label>
                <input type="number" id="Costo" name="Costo">            
            </div>

            <div class="form-group">
                <label for="Precio">Precio</label>
                <input type="number" id="Precio" name="Precio">            
            </div>

            <div class="form-group">
                <label for="Precio_m">Precio al mayoreo</label>
                <input type="number" id="Precio_m" name="Precio_m">            
            </div>

            <button type="submit" class="btn btn-primary">Registar</button>
        </form>

        <div class="col-8">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Sabor</th>
                    <th scope="col">Costo</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Precio al Mayoreo</th>
                    <th class="text-center">Aciones</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                    <th></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="text-center">
                        <a href="" class="btn btn-warning"><img src="img/edit-icon.png" alt=""></a>
                        <a href="" class="btn btn-danger"><img src="img/trash-can-icon.png" alt=""></a>
                    </td>
                    </tr>
      
                </tbody>

                <?php foreach($myQuery as $clave => $valor): ?>
                    <tr>
                        <td><?= $valor['sabor']; ?></td>
                        <td><?= $valor['Costo']; ?></td>
                        <td><?= $valor['Precio']; ?></td>
                        <td><?= $valor['Precio_m']; ?></td>
                    </tr>
                <?php endforeach; ?>

            </table>
        </div>

    </div>
    
</body>
</html>