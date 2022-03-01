<?php

include ('controller_funciones.php');

$meses = array();
$este_mes = date('Y-m-d', strtotime('2016-'.date('F').'-01'));
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
?>