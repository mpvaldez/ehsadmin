<?php 

require ("connection.php");

class consultas extends data_base{

	public function insert_anio($apart, $fecha, $cantidad, $tarifa, $minimo, $maximo, $noin, $noout, $cerrado){
		$this->conectar();
		$this->consulta("INSERT INTO stock (apartid,fecha,cantidad,tstandard,minimo,maximo,noin,noout,cerrado) VALUES ('".$apart."','".$fecha."','".$cantidad."','".$tarifa."','".$minimo."','".$maximo."','".$noin."','".$noout."','".$cerrado."')");
		$this->desconectar();
	}
}

$consultas = new consultas();

$a = '2017-01-01';
$z = '2017-12-31';
$apart = '3';
$cantidad = '5';
$tarifa = '743.80';
$minimo = '0';
$maximo = '0';
$noin = '0';
$noout = '0';
$cerrado = '0';
for($i=$a;$i<=$z;$i = date("Y-m-d", strtotime($i ."+ 1 days"))){
    $consultas->insert_anio($apart, $i, $cantidad, $tarifa, $minimo, $maximo, $noin, $noout, $cerrado);
}