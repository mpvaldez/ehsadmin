<?php

class data_base{
	private $conexion;
	private $selecionar_db;
	private $host = "localhost";
	private $user = "angel";
	private $password = "nosabes1";
	private $db = "apartref";

		public function conectar(){
			$this->conexion = mysql_connect($this->host, $this->user, $this->password) or trigger_error(mysql_error(), E_USER_ERROR);
			$this->selecionar_db = mysql_select_db($this->db, $this->conexion);
		}

		public function consulta($sql){
			$ejecucion = mysql_query($sql);
		}

		public function consulta_con_devolucion($sql){
			$ejecucion = mysql_query($sql);
			return $ejecucion;
		}

		public function desconectar(){
			mysql_close();
		}
}

?>
