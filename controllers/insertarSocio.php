<?php
require __DIR__ . '/../controllers/conn/conn.php';


$contrasenia=$_POST['contrasenia'];
$nombre= $_POST['nombre'];
$usuario=$_POST['usuario'];
$apeliido=$_POST['apellido'];
$dni=$_POST['dni'];
$correo=$_POST['email'];

$query = $db->prepare('INSERT INTO usuario ( Usuario, contrasenia, adminis, nombre, apellido, dni , correo) VALUES ( :usuario,:contra,0,:nombre,:apelli,:dn,:corre);');
$query->execute([
    ':usuario' => $usuario,
    ':contra' =>$contrasenia,
    ':nombre' =>$nombre,
    ':apelli'=>$apeliido,
    ':dn'=>$dni,
    ':corre'=>$correo,

    
]);

header('location:../index.html');


?>