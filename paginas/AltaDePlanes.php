
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

    <form action="../controllers/insertarPlanes.php" class="form_planes" method="post" enctype="multipart/form-data">
        <h2 class="form_title">Crear Planes</h2>

        <div class="form_conteiner">

            <div class="form_group">
                <input type="text" class="form_input" name="nombre" placeholder=" ">
                <label for="nombre"  class="form_label">Nombre</label>
                <span class="form_line"></span>
            </div>
    
            <div class="form_group">
                 <input type="text" class="form_input" name="precio" placeholder=" ">
                <label for="Apellido" class="form_label">Precio</label>
                <span class="form_line"></span>
            </div>
    
            <div class="form_group">
                <input type="text" class="form_input" name="descripcion" placeholder=" ">
                <label for="dni" class="form_label">descripciones</label>
                <span class="form_line"></span>
            </div>
            
            <div class="form_group">
                <input type="file"  class="form_input"name="imagen">
                <label for="Email" class="form_label">foto</label>
                 <span class="form_line"></span>
            </div>
            
            
            <input type="submit" value="Agregar" class="form_submit">
        </div>
      
         

    </form>
    <script src="../main.js"></script>
</body>
</html>