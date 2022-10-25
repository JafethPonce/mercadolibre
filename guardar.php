<?php
require_once 'bd_conexion.php';
# Inicia Código de REGISTRAR

if (isset($_POST['enviar'])) 
{  
  $nombre=$_POST['nombre'];
  $apellidos=$_POST['apellidos'];
  $correo=$_POST['email'];
  $password=$_POST['password'];
  
  

$sql=$cnnPDO->prepare("INSERT INTO registro (nombres, apellidos, email, psw) VALUES (:nombre,:apellidos,:correo, :password)");
    
    $sql->bindParam(':nombre',$nombre); 
    $sql->bindParam(':apellidos',$apellidos);
    $sql->bindParam(':correo',$correo);
    $sql->bindParam(':password',$password);
    




$sql->execute();

unset($sql);
unset($cnnPDO);
header("location:login.php");

}

?>  

