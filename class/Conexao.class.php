<?php
class Conexao {
	
	protected $link;
	protected $banco;
	protected $resultado;
	
	public function __construct() {	
		if ($_SERVER['SERVER_NAME'] == "localhost") {
		// Dados para Conexão Local
			$hostname = "localhost"; $user = "root"; $pass = ""; $bank = "bingo";
		}
		else {
			//Dados para Conexão Remota
			$hostname = ""; $user = ""; $pass = ""; $bank = "geyzon_bingo";
		}
		
		$this->link = mysql_connect($hostname, $user, $pass); if (!$this->link) { die('Conexão Não Realizada: ' . mysql_errno() . mysql_error()); }
		$this->banco = mysql_select_db($bank, $this->link); if (!$this->banco) { die('Banco Não Encontrado: ' . mysql_errno() . mysql_error()); }
	}
	
	function __autoload ($classname) {
		$filename = ".".DIRECTORY_SEPARATOR.$classname.".php";
		try {
			require_once($filename);
		} catch (Exception $e) {
	    	print "Erro de exceção: ".$e->getMessage(). " Código: " .$e->getCode();
		}
	}
	
	//Associa Consulta
	public function getLink() {
		return $this->link;
	}

	//Solicita Consulta
	public function Query($sql) {
		$result = mysql_query($sql, $this->link);
		if (!$result) { die('Consulta Inválida: ' . mysql_errno() . mysql_error()); }
		return $result;
	}
	
	//Associa Consulta
	public function fetchAssoc($result) {
		return mysql_fetch_assoc($result);
	}
	
	public function limpaConsulta() {
		$this->resultado = "";	
	}
}