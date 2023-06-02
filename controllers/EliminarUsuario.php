<?php

require __DIR__ . '/../controllers/conn/conn.php';

$query = $db->prepare('DELETE FROM usuario WHERE id_usuario=:id_socio');
$query->execute([
    ':id_socio' => $_GET["id"]
]);

$socio= $query->fetch(PDO::FETCH_OBJ);
 
header('location:../paginas/tabla.php');



?>