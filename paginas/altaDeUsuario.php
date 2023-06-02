


<!DOCTYPE html>
<html lang="en">
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
    

    <form action="../controllers/insertarSocio.php" class="form" method="post">
        <h2 class="form_title">Crear un usuario</h2>

        <div class="form_conteiner">

            <div class="form_group">
                <input type="text" class="form_input" name="nombre" placeholder=" " >
                <label for="nombre"  class="form_label">Nombre</label>
                <span class="form_line"></span>
            </div>
    
            <div class="form_group">
                 <input type="text" class="form_input" name="apellido" placeholder=" ">
                <label for="Apellido" class="form_label">Apellido</label>
                <span class="form_line"></span>
            </div>
    
            <div class="form_group">
                <input type="text" class="form_input"name="dni" placeholder=" ">
                <label for="dni" class="form_label">DNI</label>
                <span class="form_line"></span>
            </div>
            
            <div class="form_group">
                <input type="text" class="form_input" name="email" placeholder=" ">
                <label for="Email" class="form_label">Email</label>
                 <span class="form_line"></span>
            </div>
            
            <div class="form_group">
                <input type="text" class="form_input" name="usuario"placeholder=" "  >
                <label for="usuario" class="form_label">Usuario</label>
                 <span class="form_line"></span>
            </div>
            
                <div class="form_group">
                <input type="text" class="form_input" name="contrasenia" placeholder=" ">
                <label for="Contraseña" class="form_label">Contraseña</label>
                 <span class="form_line"></span>
            </div>
            
            
            
            <input type="submit" value="Agregar" class="form_submit" name="submit">
        </div>
        
    </form>
   <script src="../main.js"></script>
</body>
</html>