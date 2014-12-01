<?php

include_once "function/functions.inc.php";


class Noticia {
	protected $Id;
	protected $Tema;
	protected $Titulo;
	protected $Texto;
	protected $Autor;
	protected $Data;
	
	function __construct() {
		
	//TODO - C�digo de Constru��o de Inicializa��o da Classe
	
	}
	
	function __destruct() {
		
	//TODO - C�digo de Destrui��o de Inicializa��o da Classe
	
	}

/*
 * GRUPO DE SETS
 */	
		
	//Atribui valor ao Identificador da Not�cia no BD
	public function setId($Id) {
		$this->Id = $Id;
	}

	//Atribui valor ao Tema da Not�cia no BD
	public function setTema($Tema) {
		$this->Tema = $Tema;
	}
	
	//Atribui valor ao T�tulo da Not�cia
	public function setTitulo($Titulo) {
		$this->Titulo = $Titulo;
	}

	
	//Atribui valor ao Conte�do Descritivo da Not�cia
	public function setTexto($Texto) {
		$this->Texto = $Texto;
	}
	
    //Atribui valor ao Autor/Modificador da Not�cia
	public function setAutor($Autor) {
		$this->Autor = $Autor;
	}
	
	//Atribui valor � Data de Inser��o/Altera��o da Not�cia
	public function setData($Data) {
		$this->Data = $Data;
	}
	
/*
 * GRUPO DE GETS
 */	
	
	//Recupera o Identificador da Not�cia dentro do BD
	public function getId() {
		return $this->Id;
	}
		
	//Recupera o Tema da Not�cia dentro do BD
	public function getTema() {
		return $this->Tema;
	}
	
	//Recupera o Titulo da Not�cia
	public function getTitulo() {
		return $this->Titulo;
	}
	
	//Recupera o Conte�do Descritivo da Not�cia
	public function getTexto() {
		return $this->Texto;
	}

	//Recupera o Autor da Not�cia
	public function getAutor() {
		return $this->Autor;
	}
	
	//Recupera a �ltima Data de modifica��o da Not�cia
	public function getData() {
		return $this->Data;
	}

}

?>