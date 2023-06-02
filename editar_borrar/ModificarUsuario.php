<?php
require __DIR__ . '/../controllers/conn/conn.php';


$query = $db->prepare('SELECT * FROM usuario WHERE id_usuario=:id_socio');
$query->execute([
    ':id_socio' => $_GET["id"]
]);

$socio= $query->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/estiloMenu.css">
</head>
<body>

    <?php include("../menu.php") ;?>
    <form action="../controllers/editar.Socios.php" class="form"  method="post">
        <h2 class="form_title">Crear un usuario</h2>

        <div class="form_conteiner">
            <?php foreach($socio as $usuario) { ?>
                <input type="text" readonly=»readonly» name="idsocio" value="<?php echo $usuario->id_usuario?>">
                 

            <div class="form_group">
                <input type="text" class="form_input" name="nombre" value=" <?php echo $usuario->nombre?>">
                <label for="nombre"  class="form_label">Nombre</label>
                <span class="form_line"></span>
            </div>
    
            <div class="form_group">
                 <input type="text" class="form_input" name="apellido" value="<?php echo $usuario->apellido?> ">
                <label for="Apellido" class="form_label">Apellido</label>
                <span class="form_line"></span>
            </div>
    
            <div class="form_group">
                <input type="text" class="form_input" name="dni" value="<?php echo $usuario->dni?> ">
                <label for="dni" class="form_label">DNI</label>
                <span class="form_line"></span>
            </div>
            
            <div class="form_group">
                <input type="text" class="form_input" name="email" value=" <?php echo $usuario->correo?>">
                <label for="Email" class="form_label">Email</label>
                 <span class="form_line"></span>
            </div>
            
            <div class="form_group">
                <input type="text" class="form_input" name="usuario" value="<?php echo $usuario->Usuario?> ">
                <label for="usuario" class="form_label">Usuario</label>
                 <span class="form_line"></span>
            </div>
            
                <div class="form_group">
                <input type="text" class="form_input" name="contrasenia" value="<?php echo $usuario->contrasenia?> ">
                <label for="Contraseña" class="form_label">Contraseña</label>
                 <span class="form_line"></span>
            </div>
            
            <div class="form_group">
                <input type="text" class="form_input" name="admin" value="<?php echo $usuario->adminis?> ">
                <label for="Administrador" class="form_label">Administrador</label>
                <span class="form_line"></span>
            </div>
            
            
            <?php }?>
            <input type="submit" value="Guardar" class="form_submit">
        </div>    
          

    </form>
    <script src="../main.js"></script>
</body>
</html>