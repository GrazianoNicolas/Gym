
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Contacto</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/estiloMenu.css">
</head>
<body>
<?php include("../menu.php") ;?>

    <form action="../controllers/insertarPlanes.php" class="form_planes" method="post" enctype="multipart/form-data">
        <h2 class="form_title">Contactanos</h2>

        <div class="form_conteiner">

            <div class="form_group">
                <input type="text" class="form_input" name="nombre" placeholder=" ">
                <label for="nombre"  class="form_label">Correo</label>
                <span class="form_line"></span>
            </div>
    
            <div class="form_group">
            <textarea class="form_input"placeholder=" " rows="3"></textarea>
                <label for="Apellido" class="form_label">Descripcion</label>
                <span class="form_line"></span>
            </div>
    
            
            
            
            <input type="submit" value="Enviar" class="form_submit">
        </div>
      
         

    </form>
    <script src="../main.js"></script>
</body>
</html>