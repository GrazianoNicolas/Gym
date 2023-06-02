<?php

require __DIR__ . '/../controllers/conn/conn.php';

$query = $db->prepare('SELECT * FROM usuario ');
$query->execute();

$socio= $query->fetchAll(PDO::FETCH_OBJ);
 


/**foreach($socio as $socio) { 
    echo ("<br>");
    echo $socio->id_usuario;
    
    echo ($socio->nombre."<br> ");
    echo ($socio->apellido ."<br> ");
    echo ($socio->correo ."<br>");
    echo ($socio->Usuario ."<br> ");
 } */

?>