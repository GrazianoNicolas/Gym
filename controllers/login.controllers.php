<?php
 session_start();

require __DIR__ . '/conn/conn.php';

 
$query= $db->prepare('SELECT * FROM usuario WHERE Usuario = "'.$_POST['usuario'].'"');
$query->execute();
$usuario= $query->fetch(PDO::FETCH_OBJ);

$query= $db->prepare('SELECT COUNT(*) FROM compra WHERE fk_Usuario ="'.$usuario->id_usuario.'"');
$query->execute();
$query->bindColumn(1,$Tienecompra,PDO::PARAM_BOOL);
$query->fetch(PDO::FETCH_BOUND);
   



if($usuario->Usuario == $_POST['usuario'] && $usuario->contrasenia == $_POST['contraseña'] && $usuario->adminis==0 ){
   $_SESSION["numeroUsuario"]=$usuario->id_usuario;
   
   if($Tienecompra == null){



         header('location: ../editar_borrar/estilocard.php'); 
    }elseif($Tienecompra == 1){
       header('location: ../paginas/tabla.php');
    }


 }elseif($usuario->Usuario == $_POST['usuario'] && $usuario->contrasenia==$_POST['contraseña'] && $usuario->adminis==1){

    header('location: ../paginas/tabla.php');

}else{
 header('location:../index.html');
}

?>