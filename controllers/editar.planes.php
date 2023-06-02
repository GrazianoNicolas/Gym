<?php
require __DIR__ . '/conn/conn.php';


$query = $db->prepare('UPDATE planes_deportivo SET  nombre=:nombre, precio=:precio, descripcion = :descripcion WHERE id_planesDeportivo = :id_planes');

$query->execute([
    
    
    ':nombre' => $_POST["nombre"],
    ':precio' => $_POST["precio"],
    ':descripcion' => $_POST["descripcion"],
    ':id_planes'=>$_POST["id_planes"]
    
]);

header('location:../paginas/tablaplanes.php');

?>