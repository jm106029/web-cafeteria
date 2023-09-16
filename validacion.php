<?php
  $us=$_POST['usuario'];
  $contra=$_POST['contrasena'];
  include("conexion.php");
  $sql="SELECT id_usuario FROM usuarios WHERE usuario='$us' AND psw='$contra'";
  $datos=mysqli_query($conexion,$sql);
  if(mysqli_num_rows($datos)>0){
    $registros=mysqli_fetch_array($datos);
    session_start();
    $_SESSION['id_usuario']=$registros['id_usuario'];
    header("location:administrador/");
  }else{
    header("location:login.php?ban=1");
  }
?>