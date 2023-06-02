<?php
require __DIR__ . ' /../editar_borrar/mostrar.php';
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
            <th scope="col">Apellido</th>
            <th scope="col">Email</th>
            <th scope="col">Usuario</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($socio as $socio) {?>
            <tr>
            <th scope="row"><?php echo ($socio->id_usuario)?></th>
            <td><?php echo ($socio->nombre)?></td>
            <td><?php echo ($socio->apellido)?></td>
            <td><?php echo ($socio->correo)?></td>
            <td><?php echo ($socio->Usuario)?></td>
            <td>
                <a href="../controllers/EliminarUsuario.php?id=<?php echo ($socio->id_usuario)?>"><img src="../img/eliminar.png" alt="editar"></a>
                <a href="../editar_borrar/ModificarUsuario.php?id=<?php echo ($socio->id_usuario)?>"><img src="../img/editar.png" alt="eliminar"></a>
            </td>

            </tr>
            <?php }?>
        </tbody>
        </table>
    </div>
   <script src="../main.js"></script>
</body>
</html>