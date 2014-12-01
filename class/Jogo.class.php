<?php
class Jogo {

	protected $conexao;	
	protected $resultatualiza;
	
	function __construct($Conn) {
		$this->conexao = $Conn;
	}
	
	// Carregador automático de classes
	function __autoload ($classname) {
		$filename = ".".DIRECTORY_SEPARATOR.$classname.".php";
		try {
			require_once($filename);
		} catch (Exception $e) {
	    	print "Erro de exceção: ".$e->getMessage(). " Código: " .$e->getCode();
		}
	}
	
	// ATUALIZA A BASE
	public function atualizaBase($numsorteado) {
		$sql = "SELECT IDcartela,quant_sorteados FROM cartelas WHERE numeros LIKE '%".$numsorteado."%' AND em_uso = 1";
		$result = $this->conexao->Query($sql);
		while ($linha = mysql_fetch_assoc($result)) {
			$novostore = $linha['quant_sorteados'] + 1;
			if ($linha['quant_sorteados'] < 15) {
				$atualizacao = "UPDATE cartelas SET quant_sorteados = ".$novostore." WHERE IDcartela = ".$linha['IDcartela'];
				$resultado = $this->conexao->Query($atualizacao);
			}
		}
	}
	
	// CONSULTA AS CARTELAS EM JOGO
	public function cartelasEmJogo() {
		$sql = "SELECT IDcartela, numeros, quant_sorteados FROM cartelas WHERE em_uso = 1 ORDER BY quant_sorteados DESC";
		$result = $this->conexao->Query($sql);
	}
	
	public function zeraCartelas() {
		$sql = "UPDATE cartelas SET quant_sorteados = 0";
		$result = $this->conexao->Query($sql);
	}
	
}