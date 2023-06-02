<?php
require __DIR__ . ' /../editar_borrar/mostrarPlanes.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    
    <link rel="stylesheet" href="../css/tabla.css">
    <link rel="stylesheet" href="../css/estiloMenu.css">
    
</head>
<body>

    <?php include("../menu.php") ;?>

    

    <div class="from">
         <h2 class="center">Lista de Usuarios</h2>
        <br>
            <table class="form_conteiner">
        <thead>
            <tr>
                <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($planes as $planes) {?>
            <tr>
            <th scope="row"><?php echo ($planes->id_planesDeportivo)?></th>
            <td><?php echo ($planes->nombre)?></td>
            <td><?php echo ($planes->precio)?></td>
            <td>
                <a href="../controllers/EliminarPlanes.php?id=<?php echo ($planes->id_planesDeportivo)?>"><img src="../img/eliminar.png" alt="editar"></a>
                <a href="../editar_borrar/ModicarPlanes.php?id=<?php echo ($planes->id_planesDeportivo)?>"><img src="../img/editar.png" alt="eliminar"></a>
            </td>

            </tr>
            <?php }?>
        </tbody>
        </table>
    </div>
   <script src="../main.js"></script>
</body>
</html>