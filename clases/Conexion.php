<?php 
	
	class Conectar {

		public function conexion(){
			$servidor = "localhost";
			$usuario = "root";
			$password = "";
			$baseDatos = "personas";
			$conexion = mysqli_connect($servidor, 
										$usuario, 
										$password, 
										$baseDatos);
			return $conexion;
		}
	}

 ?>