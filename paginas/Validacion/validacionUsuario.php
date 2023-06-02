<?php
include("../altaDeUsuario.php") 
/*
if(isset($_POST['submit'])){
    if(empty($nombre)){
        echo"<p class= 'error'>*Agrega tu nombre</p>";
    }if(strlen($usuario)>6){
        echo"<p class= 'error'>*El nombre es muy corto tiene que tener mas de 6 caracteres</p>";
    }
    if(empty($apeliido)){
        echo"<p class= 'error'>*Agrega tu Apellido</p>";
    }
    if(empty($dni)){
        echo"<p class= 'error'>*Agrega tu dni</p>";
    }elseif(! is_numeric($dni)){
        echo"<p class= 'error'>*Error el DNI tiene que ser numero </p>";
    }
} */


$contrasenia=$_POST['contrasenia'];
$nombr= $_POST['nombre'];
$usuario=$_POST['usuario'];
$apeliido=$_POST['apellido'];
$dni=$_POST['dni'];
$correoee=$_POST['email'];
?>