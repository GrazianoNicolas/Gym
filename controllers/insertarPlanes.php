<?php
 require __DIR__ . '/conn/conn.php';

 $Nombre=$_FILES['imagen']['name'];
 $Tipo=$_FILES['imagen']['type'];
 $Tamaño=$_FILES['imagen']['size'];
 $Carpeta=$_FILES['imagen']['tmp_name'];
 
 
 if($Tipo == "image/jpeg" && $Tamaño< 50000000)
 {
     $dir_subida = '../uploads/';
     $fichero_subido = $dir_subida.$Nombre;
 
 
 if (move_uploaded_file($Carpeta, $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
    echo"<br>";
    echo "<img src='../uploads/".$Nombre."'>";
  } else {
     echo "¡Posible ataque de subida de ficheros!\n";
  }
 
 }

//viene del fomulario AltaDePlanes.php
$planes=$_POST["nombre"];
$monto=$_POST["precio"];
$descrip=$_POST["descripcion"];



$query=$db->prepare('INSERT INTO planes_deportivo ( nombre, precio, descripcion, imagen) VALUES (:nom,:prec,:descrip,:imagen);');
$query->execute([
    ':nom'=>$planes,
    ':prec'=>$monto,
    ':descrip'=>$descrip,
    ':imagen'=>$Nombre

]);


header('location:../paginas/tablaplanes.php');


?>