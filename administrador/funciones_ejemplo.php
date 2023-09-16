<?php

function Menu_ejemplo(){
	switch($_GET['opr']){
		case 1: 
		    Ejemplo();
		    break;

			case 2: //muestra las calificaciones de alumno
				Visualiza_calificaciones();
				break;
        }
}


function Ejemplo(){
echo "<div align=center >Relacion de alumnos</div>";

   print '
   <li><a href="javascript:Procesar(1,2,2)">Carlos hernadez hernadez</a></li>
   <li><a href="javascript:Procesar(2,2,2)">Miguel Ramirez Cruz</a></li>
   <li><a href="javascript:Procesar(3,2,2)">Jose Cruz Ruiz</a></li>';

   print '<div id="etiqueta2"></div>';

}
function Visualiza_calificaciones(){
$Datos=array(array('Carlos hernadez hernadez','90','100','100'),
array('Miguel Ramirez Cruz','90','90','90'),
array('Jose Cruz Ruiz','80','85','80'));


print'

<table border="6">
	<tr>
	<td width="100" align="center" border="6">No.de control</td>
	<td width="300" align="center" border="6">materia</td>
	<td width="150" align="center" border="6">calificacion</td>
	</tr>

	<tr>
	<td width="100" align="center" border="6">1</td>
	<td width="300" align="center" border="6">calculo</td>
	<td width="150" align="center" border="6">'.$Datos[$_GET['id']-1][1].'</td>
	</tr>


	<tr>
	<td width="100" align="center" border="6">2</td>
	<td width="300" align="center" border="6">M discretas</td>
	<td width="150" align="center" border="6">'.$Datos[$_GET['id']-1][2].'</td>
	</tr>


	<tr>
	<td width="100" align="center" border="6">3</td>
	<td width="300" align="center" border="6">Taller de etica</td>
	<td width="150" align="center" border="6">'.$Datos[$_GET['id']-1][3].'</td>
	</tr>
</table>

';
}
