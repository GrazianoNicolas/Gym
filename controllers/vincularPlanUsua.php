<?php 
session_start();

 require __DIR__ . '/conn/conn.php';
 $fecha_actual = date("Y-m-d");

$fecha_fin=date("Y-m-d",strtotime($fecha_actual."+ 1 month"));

$query=$db->prepare('INSERT INTO compra (fecha_ini, fecha_fin, fk_Usuario, fk_planes_deportivo) VALUES (:fecha_ini,:fecha_fin,:usuario,:deporte)');

$query->execute([
   ':fecha_ini' =>$fecha_actual,
   ':fecha_fin'=>$fecha_fin,
   ':deporte'=>$_GET["planDepor"],
   ':usuario'=>$_SESSION["numeroUsuario"],
]);


?>