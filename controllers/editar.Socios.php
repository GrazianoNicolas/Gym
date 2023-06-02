<?php



require __DIR__ . '/conn/conn.php';
$id=$_POST["idsocio"];
$contrasenia=$_POST['contrasenia'];
$nombr= $_POST['nombre'];
$usuario=$_POST['usuario'];
$apellido=$_POST['apellido'];
$dni=intval($_POST['dni']);
$correoee=$_POST['email'];
$admini=boolval($_POST['admin']);


$query = $db->prepare('UPDATE usuario SET  nombre=:nombre,Usuario=:Usuario,contrasenia=:contrasenia,adminis=:adminis,apellido=:apellido,dni=:dni WHERE id_usuario=:id_usuario');

$query->execute([

    ':nombre' =>$nombr,
    ':Usuario' => $usuario,
    ':contrasenia'=>$contrasenia,
    ':adminis'=>$admini,
    ':apellido'=>$apellido,
    ':dni'=>$dni,
    ':id_usuario'=>$id,
  
    
]);
header('location: ../paginas/tabla.php');

?>