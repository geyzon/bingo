<?php

class Manchete extends Noticia {
	protected $SubTitulo;
	protected $Foto;
	
	/**
	 * 
	 */
	function __construct() {
		
	//TODO - C�digo de Constru��o de Inicializa��o da Classe
	
	}
	
	/**
	 * 
	 */
	function __destruct() {
		
	//TODO - C�digo de Destrui��o de Inicializa��o da Classe
	
	}
	
/*---------------------------------------------------------*/
/*
 * BLOCO DE GETS
 */	
	
	/**
	 * @Recupera o Tema da Not�cia
	 */
	public function getTema() {
		return $this->Tema;
	}

	/**
	 * @Recupera o Subtitulo da Not�cia
	 */
	public function getSubTitulo() {
		return $this->SubTitulo;
	}
	
	/**
	 * @Recupera a Fotografia ligada � Not�cia
	 */
	public function getFoto() {
		return $this->Foto;
	}	
	
/*---------------------------------------------------------*/
/*
 * BLOCO DE SETS
 */		
	
	/**
	 * @Atribui valor ao Tema da Not�cia
	 */
	public function setTema($Tema) {
		$this->Tema = $Tema;
	}
		
	/**	 * @Atribui valor ao Subtitulo da Not�cia
	 */
	public function setSubTitulo($SubTitulo) {
		$this->SubTitulo = $SubTitulo;
	}
	
	
	/**
	 * @Atribui valor � Fotografia da Not�cia
	 */
	public function setFoto($Foto) {
		$this->Foto = $Foto;
	}

}

?>