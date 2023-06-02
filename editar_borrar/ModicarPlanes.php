
<?php
require __DIR__ . '/../controllers/conn/conn.php';


$query = $db->prepare('SELECT * FROM planes_deportivo WHERE id_planesDeportivo=:id_planes');
$query->execute([
    ':id_planes' => $_GET["id"]
]);

$planes= $query->fetchAll(PDO::FETCH_OBJ);
?>
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

    <form action="../controllers/editar.planes.php" class="form_planes" method="post" enctype="multipart/form-data">
        <h2 class="form_title">Crear Planes</h2>
        <?php foreach($planes as $plan) { ?>
        <div class="form_conteiner">
        <input type="text" readonly=»readonly» name="id_planes" value="<?php echo $plan->id_planesDeportivo?>">
            <div class="form_group">
                <input type="text" class="form_input" name="nombre" value="<?php echo $plan->nombre?>" placeholder=" ">
                <label for="nombre"  class="form_label">Nombre</label>
                <span class="form_line"></span>
            </div>
    
            <div class="form_group">
                 <input type="text" class="form_input" name="precio" value="<?php echo $plan->precio?>" placeholder=" ">
                <label for="Apellido" class="form_label">Precio</label>
                <span class="form_line"></span>
            </div>
    
            <div class="form_group">
                <input type="text" class="form_input" name="descripcion" value="<?php echo $plan->descripcion?>" placeholder=" ">
                <label for="dni" class="form_label">descripciones</label>
                <span class="form_line"></span>
            </div>           
            <?php }?>      
            
            <input type="submit" value="Agregar" class="form_submit">
        </div>
      
         

    </form>
    <script src="../main.js"></script>
</body>
</html>