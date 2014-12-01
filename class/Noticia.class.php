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
		
	//TODO - Código de Construção de Inicialização da Classe
	
	}
	
	function __destruct() {
		
	//TODO - Código de Destruição de Inicialização da Classe
	
	}

/*
 * GRUPO DE SETS
 */	
		
	//Atribui valor ao Identificador da Notícia no BD
	public function setId($Id) {
		$this->Id = $Id;
	}

	//Atribui valor ao Tema da Notícia no BD
	public function setTema($Tema) {
		$this->Tema = $Tema;
	}
	
	//Atribui valor ao Título da Notícia
	public function setTitulo($Titulo) {
		$this->Titulo = $Titulo;
	}

	
	//Atribui valor ao Conteúdo Descritivo da Notícia
	public function setTexto($Texto) {
		$this->Texto = $Texto;
	}
	
    //Atribui valor ao Autor/Modificador da Notícia
	public function setAutor($Autor) {
		$this->Autor = $Autor;
	}
	
	//Atribui valor à Data de Inserção/Alteração da Notícia
	public function setData($Data) {
		$this->Data = $Data;
	}
	
/*
 * GRUPO DE GETS
 */	
	
	//Recupera o Identificador da Notícia dentro do BD
	public function getId() {
		return $this->Id;
	}
		
	//Recupera o Tema da Notícia dentro do BD
	public function getTema() {
		return $this->Tema;
	}
	
	//Recupera o Titulo da Notícia
	public function getTitulo() {
		return $this->Titulo;
	}
	
	//Recupera o Conteúdo Descritivo da Notícia
	public function getTexto() {
		return $this->Texto;
	}

	//Recupera o Autor da Notícia
	public function getAutor() {
		return $this->Autor;
	}
	
	//Recupera a última Data de modificação da Notícia
	public function getData() {
		return $this->Data;
	}

}

?>