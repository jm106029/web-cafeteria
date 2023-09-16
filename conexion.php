<?php
   $servidor="localhost";
   $usuario="root";
   $psw="";
   $bd="cafeteriatec";
   $conexion=mysqli_connect($servidor,$usuario,$psw,$bd);
   if (!$conexion){
   	  die("Falló la conexión ".mysqli_connect_error());
   }
?>