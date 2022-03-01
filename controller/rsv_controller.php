<?php

require ("../function/function.php");

include ('controller_funciones.php');

$consultas = new consultas();

$filtros_vista = array('idrsv' => 'ID de reserva',
					  'fecha_rsv' => 'Fecha de reserva',
					  'titular' => 'Nombre del pasajero',
					  'checkin' => 'Fecha de checkin',
					  'checkout' => 'Fecha de checkout',
					  'estado' => 'Estado de la reserva',
					  'tipo_apart' => 'Tipo de Habitacion',
					  'cant_apart' => 'Cantidad',
					  'tarifa_noche' => 'Tarifa por noche',
					  'total' => 'Total',
					  'medio_pago' => 'Medio de Pago',
					  'email' => 'Direccion de email',
					  'telefono' => 'Telefono',
					  'solicitudes' => 'Solicitudes / Comentarios',
					  'deposito' => 'Deposito',);

if (isset($_POST['modif_reserva'])) {
	$reserva = $_POST['idrsv'];
	$cambios = 0;
	foreach ($_POST as $key => $value) {
		if ($key == 'modif_reserva') {
			continue;
		}else{
			$cambios += $consultas->set_rsv($key, $value, $reserva);
		}
	}
	if ($cambios > 0) {
		respuestaPositivaRsv($reserva);	
	}else{
		respuestaNegativaRsv();
	}

/*	foreach ($_POST as $key => $value) {
		echo $key.' / '.$value.'<br>';
	}
*/
}else{
	if ($process == 'general') {
		// Con recepcion de datos mediante POST
		if (isset($_POST['inicia_filtro'])) {
			if ($_POST['fecha1'] != 0 && $_POST['fecha2'] != 0) {
				$filtro = $_POST['filtro_fecha'];
				$element1 = date('Y-m-d', strtotime($_POST['fecha1']));
				$element2 = date('Y-m-d', strtotime($_POST['fecha2']));
			}else if ($_POST['nombre'] != '') {
				$filtro = $_POST['filtro_nombre'];
				$element1 = $_POST['nombre'];
				$element2 = $_POST['nombre'];
			}else if ($_POST['id_reserva'] != 0) {
				$filtro = $_POST['filtro_id'];
				$element1 = $_POST['id_reserva'];
				$element2 = $_POST['id_reserva'];
			}else if ($_POST['estado_reserva'] == 1 || $_POST['estado_reserva'] == 2 || $_POST['estado_reserva'] == 3) {
				$filtro = $_POST['filtro_estado'];
				$element1 = $_POST['estado_reserva'];
				$element2 = $_POST['estado_reserva'];
			}else {
				$element1 = date('Y-m-d', strtotime('-30 day', strtotime(date('Y-m-d'))));
				$element2 = strtotime('+30 day', strtotime($element1));
				$element2 = date('Y-m-d', $element2);
				$filtro = 'fecha_rsv';		
			}
			$filtro_vista = $filtros_vista[$filtro];

		// Sin recepcion de datos mediante POST
		}else if (isset($ejecucion)) {
			$element1 = date('Y-m-d');
			$element2 = strtotime('+0 day', strtotime($element1));
			$element2 = date('Y-m-d', $element2);
			if ($ejecucion == 'dashboard') {
				$filtro = 'fecha_rsv';
			}else if ($ejecucion == 'checkin') {
				$filtro = 'checkin';
			}else if ($ejecucion == 'checkout') {
				$filtro = 'checkout';
			}
			$filtro_vista = $filtros_vista[$filtro];
			
			// Para cuadros indicativos en el dashboard
			if ($ejecucion == 'dashboard') {
				$cuadros = array('verde' => 'checkin' , 'rojo' => 'checkout' , 'amarillo' => 'fecha_rsv');
				$numero_en_cuadro = array();
				foreach ($cuadros as $key => $value) {
					$numero_en_cuadro[$key] = $consultas->conteo_para_dashboard($cuadros[$key], $element1);
				}
			}

		}else {
			$element1 = date('Y-m-d', strtotime('-30 day', strtotime(date('Y-m-d'))));
			$element2 = strtotime('+30 day', strtotime($element1));
			$element2 = date('Y-m-d', $element2);
			$filtro = 'fecha_rsv';
			$filtro_vista = $filtros_vista[$filtro];
		}


		$query_rsv = $consultas->search_rsv($filtro, $element1, $element2);

	}else if ($process == 'rsv_individual') {
		$filtro = 'idrsv';
		$query_rsv = $consultas->search_rsv($filtro, $reserva, $reserva);
	}

	$filas = array();

	$i = 0;

	while($paso = mysql_fetch_array($query_rsv)){
		$filas['id'][$i] = $paso['id'];
		$filas['idrsv'][$i] = $paso['idrsv'];
		$filas['fecha_rsv'][$i] = $paso['fecha_rsv'];
		$filas['titular'][$i] = $paso['titular'];
		$filas['checkin'][$i] = $paso['checkin'];
		$filas['checkout'][$i] = $paso['checkout'];
		$filas['tipo_apart'][$i] = $paso['tipo_apart'];
		$filas['cant_apart'][$i] = $paso['cant_apart'];
		$filas['tarifa_noche'][$i] = $paso['tarifa_noche'];
		$filas['impuestos'][$i] = $paso['impuestos'];
		$filas['total'][$i] = $paso['total'];
		$filas['medio_pago'][$i] = $paso['medio_pago'];
		$filas['email'][$i] = $paso['email'];
		$filas['telefono'][$i] = $paso['telefono'];
		$filas['solicitudes'][$i] = $paso['solicitudes'];
		$filas['tipo_tarjeta'][$i] = $paso['tipo_tarjeta'];
		$filas['titular_tarjeta'][$i] = $paso['titular_tarjeta'];
		$filas['numero_tarjeta'][$i] = $paso['numero_tarjeta'];
		$filas['caducidad_tarjeta'][$i] = $paso['caducidad_tarjeta'];
		$filas['codigo_seguridad'][$i] = $paso['codigo_seguridad'];
		$filas['estado'][$i] = $paso['estado'];
		$filas['deposito'][$i] = $paso['deposito'];
		$i++;
	}

	$titulos_columnas = array_keys($filas);

	if (isset($filas['id'])) {
		$qty_rsv = count($filas['id']);

		// Convencion de estados de reserva
		$rsv_estado = array(1 => array('Confirmada', 'success'),
							2 => array('Pendiente', 'warning'),
							3 => array('Cancelada', 'danger'));

		// Para Pagina de reservas y dashboard
		$titulos_reservas = array(0, 1, 3, 20, 4, 5, 10);

		// Para Pagina de checkin
		$titulos_checkin = array(0, 1, 2, 3, 13, 5, 8, 10);

		// Para Pagina de checkout
		$titulos_checkout = array(0, 1, 2, 3, 4, 8, 10);

		// Para Pagina de reserva individual
		$titulos_indiv_persona = array(0, 1, 2, 3, 4, 5, 12, 13);
		$titulos_indiv_tarifa = array(0, 8, 21, 10, 11);
		$titulos_indiv_otros = array(0, 20, 14);
		$titulos_reserva_individual = array($titulos_indiv_persona, $titulos_indiv_tarifa, $titulos_indiv_otros);
	}
}


?>