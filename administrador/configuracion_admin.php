<?php
class Operacion{
	function ConectarBD(){
		include('../conexion.php');
	}
	function Control(){
		include('funciones_ejemplo.php');
		Menu_ejemplo();
	}
}
?>
