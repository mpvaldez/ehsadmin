<?php

require ("connection.php");

class consultas extends data_base{

	public function set_individual($columna, $element, $fecha1, $fecha2, $habitacion){
		$this->conectar();
		$this->consulta("UPDATE stock
						SET ".$columna." = '".$element."'
						WHERE fecha >= '".$fecha1."'
						AND fecha <= '".$fecha2."'
						AND apartid = '".$habitacion."'");
		$filas_modificadas = mysql_affected_rows();
		$this->desconectar();
		return $filas_modificadas;
	}

	public function set_grupal($columna1, $element1, $columna2, $element2, $columna3, $element3, $columna4, $element4, $columna5, $element5, $columna6, $element6, $columna7, $element7, $id){
		$this->conectar();
		$this->consulta("UPDATE stock
						SET ".$columna1." = '".$element1."',
							".$columna2." = '".$element2."',
							".$columna3." = '".$element3."',
							".$columna4." = '".$element4."',
							".$columna5." = '".$element5."',
							".$columna6." = '".$element6."',
							".$columna7." = '".$element7."'
						WHERE id = '".$id."'");
		$this->desconectar();
	}

	public function search_ov($fecha1, $fecha2){
		$this->conectar();
		$resultado = $this->consulta_con_devolucion("SELECT *
									FROM stock
									WHERE fecha >= '".$fecha1."'
									AND fecha <= '".$fecha2."'");
		$this->desconectar();
		return $resultado;
	}

	public function search_aparts(){
		$this->conectar();
		$resultado = $this->consulta_con_devolucion("SELECT nombre_es,id
									FROM aparts");
		$this->desconectar();
		return $resultado;
	}

	public function search_rsv($filtro, $element1, $element2){
		$this->conectar();
		$resultado = $this->consulta_con_devolucion("SELECT *
									FROM reservas
									WHERE ".$filtro." >= '".$element1."'
									AND ".$filtro." <= '".$element2."'");
		$this->desconectar();
		return $resultado;
	}
	public function set_rsv($columna, $element, $reserva){
		$this->conectar();
		$this->consulta("UPDATE reservas
						SET ".$columna." = '".$element."'
						WHERE idrsv = '".$reserva."'");
		$filas_modificadas = mysql_affected_rows();
		$this->desconectar();
		return $filas_modificadas;
	}
	public function conteo_para_dashboard($filtro, $fecha){
		$this->conectar();
		$resultado = $this->consulta_con_devolucion("SELECT *
									FROM reservas
									WHERE ".$filtro." = '".$fecha."'");
		$filas_modificadas = mysql_affected_rows();
		$this->desconectar();
		return $filas_modificadas;
	}
	public function search_extra(){
		$this->conectar();
		$resultado = $this->consulta_con_devolucion("SELECT *
									FROM extras");
		$this->desconectar();
		return $resultado;
	}
	public function new_extra($nombre, $destino, $descripcion, $unidades, $tarifa){
		$this->conectar();
		$resultado = $this->consulta("INSERT INTO extras
						 (nombre, imagen, descripcion, unidades, tarifa)
						 VALUES('".$nombre."', '".$destino."', '".$descripcion."', '".$unidades."', '".$tarifa."')");
		$filas_modificadas = mysql_affected_rows();
		$this->desconectar();
		return $filas_modificadas;
	}
	public function search_promociones(){
		$this->conectar();
		$resultado = $this->consulta_con_devolucion("SELECT * FROM promociones");
		$this->desconectar();
		return $resultado;	
	}
	public function new_promo(){
		$this->conectar();
		$resultado = $this->consulta("INSERT INTO promociones
						 (idpromo, nombre, politica, apartid, fecha, porcent, minimonts, active, cerrado)
						 VALUES('".$idpromo."',
						 		'".$nombre."',
						 		'".$politica."',
						 		'".$apartid."',
						 		'".$fecha."',
						 		'".$porcent."',
						 		'".$minimonts."',
						 		'1',
						 		'0',)");
		$this->desconectar();
		return $filas_modificadas;
	}	
}
?>