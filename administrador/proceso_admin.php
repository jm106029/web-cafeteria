
<?php
   include('configuracion_admin.php');
   $c=new Operacion;
   $c->ConectarBD();
    switch ($_GET['opr']) {
    	case 1://Visualiza  lista de alumnos
        case 2: //muestra las calificaciones de alumno
    		$c->Control();
    		break;
    }

?>