<?php

class Manchete extends Noticia {
	protected $SubTitulo;
	protected $Foto;
	
	/**
	 * 
	 */
	function __construct() {
		
	//TODO - Código de Construção de Inicialização da Classe
	
	}
	
	/**
	 * 
	 */
	function __destruct() {
		
	//TODO - Código de Destruição de Inicialização da Classe
	
	}
	
/*---------------------------------------------------------*/
/*
 * BLOCO DE GETS
 */	
	
	/**
	 * @Recupera o Tema da Notícia
	 */
	public function getTema() {
		return $this->Tema;
	}

	/**
	 * @Recupera o Subtitulo da Notícia
	 */
	public function getSubTitulo() {
		return $this->SubTitulo;
	}
	
	/**
	 * @Recupera a Fotografia ligada à Notícia
	 */
	public function getFoto() {
		return $this->Foto;
	}	
	
/*---------------------------------------------------------*/
/*
 * BLOCO DE SETS
 */		
	
	/**
	 * @Atribui valor ao Tema da Notícia
	 */
	public function setTema($Tema) {
		$this->Tema = $Tema;
	}
		
	/**	 * @Atribui valor ao Subtitulo da Notícia
	 */
	public function setSubTitulo($SubTitulo) {
		$this->SubTitulo = $SubTitulo;
	}
	
	
	/**
	 * @Atribui valor à Fotografia da Notícia
	 */
	public function setFoto($Foto) {
		$this->Foto = $Foto;
	}

}

?>