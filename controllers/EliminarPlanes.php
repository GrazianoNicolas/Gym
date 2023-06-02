<?php

require __DIR__ . '/../controllers/conn/conn.php';

$query = $db->prepare('DELETE FROM planes_deportivo WHERE id_planesDeportivo=:id_planesDeportivo');
$query->execute([
    ':id_planesDeportivo' => $_GET["id"]
]);

$socio= $query->fetch(PDO::FETCH_OBJ);
 
header('location:../paginas/tablaplanes.php');



?>