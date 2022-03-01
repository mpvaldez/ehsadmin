<?php

require ("../function/function.php");

include ('controller_funciones.php');

$consultas = new consultas();

if (isset($_POST['nuevo_extra'])) {
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$unidades = $_POST['unidades'];
	$tarifa = $_POST['tarifa'];
	$imagen = $_FILES['imagen']['name'];
	$ruta = $_FILES['imagen']['tmp_name'];
	$destino = '../img/100/'.$imagen;
	copy($ruta, $destino);
	$accion = $consultas->new_extra($nombre, $destino, $descripcion, $unidades, $tarifa);
	// header('Location: ../pages/extra.php');
	 if ($accion != 0) {
		respuestaPositivaEx();
	} else {
		respuestaNegativaRsv();
	}
}

$consultar_modelo = $consultas->search_extra();

$i = 1;
while($paso = mysql_fetch_array($consultar_modelo)){
	$filas[$i]['id'] = $paso['id'];
	$filas[$i]['imagen'] = $paso['imagen'];
	$filas[$i]['nombre'] = $paso['nombre'];
	$filas[$i]['descripcion'] = $paso['descripcion'];
	$filas[$i]['unidades'] = $paso['unidades'];
	$filas[$i]['tarifa'] = $paso['tarifa'];
	$i++;
}
?>