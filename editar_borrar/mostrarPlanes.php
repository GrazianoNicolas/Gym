<?php

require __DIR__ . '/../controllers/conn/conn.php';

$query = $db->prepare('SELECT * FROM planes_deportivo ');
$query->execute();

$planes= $query->fetchAll(PDO::FETCH_OBJ);
 


/**foreach($planes as $plan) { 
    echo ("<br>");
    echo $socio->id_usuario;
    
  <?php  echo ($plan->nombre."<br> ");?>
 <?php   echo ($plan->apellido ."<br> ");?>
  <?php  echo ($plan->correo ."<br>");?>
  <?php  echo ($plan->Usuario ."<br> ");?>
 } */

?>