<?php
class db {
	 private $host = 'localhost'; 
	 private $usuario = 'root';
	 private $senha = ''; 
	 private $database ='despesas'; 
	 punlic function conecta_mysql(){
	 	
	 	$con = mysqli_connect($this->host, $this->usuario,
	 			$this->senha, $this->database);
	 		 	mysqli_set_charset($con, 'utf8'); 
	 	
	 	if(mysqli_connect_errno()) {
	 		echo "Erro ao tentar se comunicar com o BD MySQL:".mysqli_connect_error(); 
	 	}
	 	return $con;
	 }
}
