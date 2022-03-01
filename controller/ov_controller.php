<?php

require ("../function/function.php");

include ('controller_funciones.php');

$consultas = new consultas();

// Lo que sigue solo es para agrupar los meses
$meses = array();
$este_mes = date('Y-m-d', strtotime(date('Y').'-'.date('F').'-01'));
for ($i=0; $i <= 12; $i++) {
	$frase = '+'.$i.' month';
	$meses[0][$i] = date("F", strtotime($este_mes.$frase));
	if ($i == 0) {
		$meses[1][$i] = date("Y-m-d", strtotime($frase));
	}else {
		$meses[1][$i] = date("Y-m-d", strtotime($este_mes.$frase));	
	}
	
}
for ($i=0; $i < 12; $i++) { 
	$numero = dateDiff($meses[1][$i], $meses[1][$i+1])-2;
	$frase = '+'.$numero.' day';
	$meses[2][$i] = date("Y-m-d", strtotime($meses[1][$i].$frase));
}


// Lo que sigue es para manejar las fechas en el vista del overview
if (isset($_SESSION['ov_fechas'])) {
	if (isset($_POST['ov_date'])) {
		$fecha1 = date("Y-m-d", strtotime($_POST['checkin']));
		$fecha2 = date("Y-m-d", strtotime($_POST['checkout']));
		$_SESSION['ov_fechas'] = array('fechaini' => $fecha1, 'fechafin' => $fecha2);
	}else{
		$fecha1 = $_SESSION['ov_fechas']['fechaini'];
		$fecha2 = $_SESSION['ov_fechas']['fechafin'];
	}
}else{
	$fecha1 = date('Y-m-d');
	$fecha2 = strtotime('+30 day', strtotime($fecha1));
	$fecha2 = date('Y-m-d', $fecha2);
	$_SESSION['ov_fechas'] = array('fechaini' => $fecha1, 'fechafin' => $fecha2);
}

$query_overview = $consultas->search_ov($fecha1, $fecha2);

$filas = array();

$i = 0;

while($paso = mysql_fetch_array($query_overview)){
	$filas['id'][$i] = $paso['id'];
	$filas['apartid'][$i] = $paso['apartid'];
	$filas['fecha'][$i] = $paso['fecha'];
	$filas['cantidad'][$i] = $paso['cantidad'];
	$filas['tstandard'][$i] = $paso['tstandard'];
	$filas['cerrado'][$i] = $paso['cerrado'];
	$filas['minimo'][$i] = $paso['minimo'];
	$filas['maximo'][$i] = $paso['maximo'];
	$filas['noin'][$i] = $paso['noin'];
	$filas['noout'][$i] = $paso['noout'];
	$i++;
}
// Creacion del array con la info

$qty_dias = 0;
for ($i = 0; $i < count($filas['fecha']); $i++){
	if ($filas['apartid'][$i] == 1){
    	$qty_dias++;
	}
}
// Determinacion de la cantidad de dias

$qty_filas = count($filas['fecha']);

$titulos_columnas = array_keys($filas);

$qty_deptos = max($filas['apartid']);

$search_overview = $consultas->search_aparts();



$i = 1;
while($paso = mysql_fetch_array($search_overview)){
	$tipos_de_deptos[$i] = $paso['nombre_es'];
	$i++;
}

if (isset($_POST['actualizacion_grupal'])) {
	foreach ($filas['id'] as $i) {
		if (isset($_POST[$i])) {
			$array_id = $_POST[$i];
			$id = $i;
			$columna1 = $titulos_columnas[3];
			$element1 = $array_id[$columna1];
			$columna2 = $titulos_columnas[4];
			$element2 = $array_id[$columna2];
			$columna3 = $titulos_columnas[5];
			$element3 = $array_id[$columna3];
			$columna4 = $titulos_columnas[6];
			$element4 = $array_id[$columna4];
			$columna5 = $titulos_columnas[7];
			$element5 = $array_id[$columna5];
			$columna6 = $titulos_columnas[8];
			$element6 = $array_id[$columna6];
			$columna7 = $titulos_columnas[9];
			$element7 = $array_id[$columna7];
			$consultar_modelo = $consultas->set_grupal($columna1, $element1, $columna2, $element2, $columna3, $element3, $columna4, $element4, $columna5, $element5, $columna6, $element6, $columna7, $element7, $id);
		}
	}
	// header('Location: ../pages/overview.php');
	respuestaPositivaOv();
}
?>