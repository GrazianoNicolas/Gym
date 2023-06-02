<?php
try{
    $db=new PDO('mysql:dbname=gym; host=localhost; chartset=UTF-8','root','');
    

 } 
 catch(PDOException $h){
 echo "no hay conexion con la base de datos";
 echo("$h");
 }
?>