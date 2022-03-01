<?php

function respuestaPositiva(){
	echo '<h3>Modificado con exito</h3><br>
	<button type="button" class="btn btn-info" data-dismiss="modal">Aceptar</button>';
}

function respuestaPositivaOv(){
	echo '<h3>Modificado con exito</h3><br>
	<a href="overview.php" class="btn btn-info">Aceptar</a>';
}

function respuestaPositivaEx(){
	echo '<h3>Agregado con exito</h3><br>
	<a href="extra.php" class="btn btn-info">Aceptar</a>';
}

function respuestaPositivaRsv($reserva){
	echo '<h3>Modificado con exito</h3><br>
	<a href="reserve.php?rsv='.$reserva.'" class="btn btn-info">Aceptar</a>';
}

function respuestaNegativaRsv(){
	echo '<h3>No se ha realizado ningun cambio</h3><br>
	<button type="button" class="btn btn-info" data-dismiss="modal">Aceptar</button>';
}

function respuestaMedia(){
	echo '<h3>Modificadas algunas fechas</h3><p>Algunas fechas ya habian sido modificadas con anterioridad. Revise la <a href="../pages/overview.php" type="btn btn-link">Vision general</a><br>
	<button type="button" class="btn btn-info" data-dismiss="modal">Aceptar</button>';
}

function respuestaNegativa(){
	echo '<h3>Cambio no realizado</h3><p>Revise en <a href="overview.php" type="btn btn-link">Vision general</a> que los cambios solicitados no hayan sido gestionados con anterioridad. Caso contrario intente nuevamente</p><br>
	<button type="button" class="btn btn-info" data-dismiss="modal">Aceptar</button>';
}

function dateDiff($start, $end) {
	$start_ts = strtotime($start);
	$end_ts = strtotime($end);
	$diff = $end_ts - $start_ts;
    $diff_dias = round($diff / 86400) + 1;
    return $diff_dias;
}

function sinDatosRsv(){
	echo 'No hay datos para mostar segun el filtro elegido (ver titulo del cuadro)';
}

function sinDatos(){
	echo 'No hay datos para mostar';
}


?>
