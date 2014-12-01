<?php


class Arquivo {
	protected $Arquivo;
	protected $NomeFinal;
	protected $Extensao;
	protected $Tamanho;
	protected $TmpPasta;
	protected $PastaFinal;
	
	function __construct($Arquivo) {
		
	//TODO - Insert your code here
		$this->setArquivo($Arquivo);
		$this->setExtensao(strtolower (substr ($this->Arquivo["name"],-4) ) );
		$this->setNomeFinal(GetMicrotime().$this->getExtensao());
		$this->setTamanho($this->Arquivo["size"]);
		$this->setTmpPasta($this->Arquivo['tmp_name']);
	}
	
	function __destruct() {
		
	//TODO - Insert your code here
	}
	
	/*
	 *GRUPO DE SETS 
	 */
	
	//
	public function setArquivo($Arquivo) {
		$this->Arquivo = $Arquivo;
	}
	
	//
	public function setNomeFinal($NomeFinal) {
		$this->NomeFinal = $NomeFinal;
	}
	
	//
	public function setExtensao($Extensao) {
		$this->Extensao = $Extensao;
	}
	
	//
	public function setTamanho($Tamanho) {
		$this->Tamanho = $Tamanho;
	}
	
	//
	public function setTmpPasta($TmpPasta) {
		$this->TmpPasta = $TmpPasta;
	}
	
	//
	public function setPastaFinal($Pasta) {
		$this->PastaFinal = $Pasta;
	}

	/*
	 *GRUPO DE GETS 
	 */
	
	//
	public function getArquivo() {
		return $this->Arquivo;
	}
	
	//
	public function getNomeFinal() {
		return $this->NomeFinal;
	}
	
	//
	public function getExtensao() {
		return $this->Extensao;
	}
	
	//
	public function getTamanho() {
		return $this->Tamanho;
	}
	
	//
	public function getPastaFinal() {
		return $this->PastaFinal;
	}
	
	//
	public function getTmpPasta() {
		return $this->TmpPasta;
	}
	
	//Grava o arquivo do objeto na pasta final e com o nome final
	public function gravarArquivo($Pasta) {	
		$this->setPastaFinal("/var/www/ufs/".$Pasta."/");
		move_uploaded_file($this->Arquivo['tmp_name'], $this->getPastaFinal().$this->getNomeFinal());
		
		//Modifica o CHMod do arquivo
		chmod ($this->getPastaFinal().$this->getNomeFinal(), 0755);
	}

	
}

?>