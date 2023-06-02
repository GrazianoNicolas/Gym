<?php
 require __DIR__ . '/conn/conn.php';

$query=$db->prepare('SELECT * FROM socio');
$query->execute();

$socios= $query->fetchAll(PDO::FETCH_OBJ);


?>