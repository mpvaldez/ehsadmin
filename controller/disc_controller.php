<?php

require ("../function/function.php");

include ('controller_funciones.php');

$consultas = new consultas();

if (isset($_POST['promo_standard'])) {
	$nombre = $_POST['nombre'];
	$politica = $_POST['politica'];
	$porcent = $_POST['porcent'];
	$inicio = date("Y-m-d", strtotime($_POST['inicio']));
	$fin = date("Y-m-d", strtotime($_POST['fin']));
	$habitacion = $_POST['unit'];
	$minimonts = $_POST['minimonts'];

	// Para conocer el ultimo idpromo
	$ultimo_id = $consultas->search_promociones();
	$i = 0;
	while($paso = mysql_fetch_array($ultimo_id)){
		$idpromo = $paso['idpromo'];
		$i++;
	}
	$idpromo = $idpromo + 1;

	echo $nombre." ".$porcent." ".$inicio." ".$fin;

	respuestaPositiva();
}


//Para obtener los tipos de aparts
$search_indiv = $consultas->search_aparts();
$i = 1;
while($paso = mysql_fetch_array($search_indiv)){
	$tipos_de_deptos[$i] = $paso['nombre_es'];
	$i++;
}
?>