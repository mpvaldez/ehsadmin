<?php

require ("../function/function.php");

include ('controller_funciones.php');

$consultas = new consultas();

if (isset($_POST['actualizacion_individual'])){
	$columna = $_POST['columna'];
	$element = $_POST['element'];
	$fecha1 = date("Y-m-d", strtotime($_POST['checkin']));
	$fecha2 = date("Y-m-d", strtotime($_POST['checkout']));
	$dif_dias = dateDiff($fecha1, $fecha2);
	$habitacion = $_POST['unit'];
	$repeticiones = 0;
	$consultar_modelo = 0;
	foreach ($habitacion as $unidad){
		$consultar_modelo += $consultas->set_individual($columna,$element,$fecha1,$fecha2,$unidad);
		$repeticiones++;
	}
	$filas_consultadas = $dif_dias * $repeticiones;
	
	if ($_POST['actualizacion_individual'] == 'desde_ov') {
		header('Location: ../pages/overview.php');
	}else {
		if ($consultar_modelo == 0){
		respuestaNegativa();
		}else if ($consultar_modelo == $filas_consultadas){
			respuestaPositiva();
		}else {
			respuestaMedia();
		}
	}
}
//Para obtener los tipos de aparts
$search_indiv = $consultas->search_aparts();
$i = 1;
while($paso = mysql_fetch_array($search_indiv)){
	$tipos_de_deptos[$i] = $paso['nombre_es'];
	$i++;
}
?>