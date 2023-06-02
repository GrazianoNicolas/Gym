<?php
require __DIR__ . ' ./mostrarPlanes.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>


</head>
<body>
  <h1 class=" text-center m-5">Planes Deportivos </h1>
<div class="container ">
<div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <?php foreach($planes as $planes) { ?>
          <div class=" col-xl-4  col-xxl-3 col-md-6">
                <div class="card m-2 p-0" style="width: 18rem;">
                    <img src="../img/basico.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php  echo ($planes->nombre);?></h5>
                        <p class="card-text"><?php  echo ($planes->descripcion);?></p>
                        <h6 class="card-title"><?php  echo ($planes->precio);?>
                        <a href="../controllers/vincularPlanUsua.php?planDepor=<?php echo ($planes->id_planesDeportivo)?>" class="btn btn-primary">agregar</a>
                    </div>
                </div>
           </div>
        <?php }?>
    </div>
    </div>





  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>  
</body>
</html>