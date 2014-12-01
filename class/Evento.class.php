<?php

//include '../function/functions.inc.php';

class Evento {
	protected $Id;
	protected $Destaque;
	protected $DataInicio;
	protected $DataFim;
	protected $DataRegistro;
	protected $Titulo;
	protected $Descricao;
	protected $Horario;
	protected $Local;
	protected $Programacao;
	protected $Orgao;
	protected $Responsavel;
	protected $Estagio;
	protected $Email;
	protected $Telefone;
	protected $Periodo;
	
	/**
	 * 
	 */
	function __construct() {
		
	//TODO - Insert your code here
	}
	
	function __destruct() {
		
	//TODO - Insert your code here
	}

/*--------------------------------------------------------*/
/**
 * BLOCO DE SETS
 */
	
	/**
	 * @Atribui valor à Data de Final do Evento
	 */
	public function setDataFim($DataFim) {
		$this->DataFim = $DataFim;
	}
	
	/**
	 * @Atribui valor à Data de Inicio do Evento
	 */
	public function setDataInicio($DataInicio) {
		$this->DataInicio = $DataInicio;
	}
	
	/**
	 * @Atribui valor à Data de Cadastro do Evento
	 */
	public function setDataRegistro($DataRegistro) {
		$this->DataRegistro = $DataRegistro;
	}
	
	/**
	 * @Atribui valor à Descricao do Evento
	 */
	public function setDescricao($Descricao) {
		$this->Descricao = $Descricao;
	}
	
	/**
	 * @Atribui valor à Posição de Apresentação do Evento
	 */
	public function setDestaque($Destaque) {
		$this->Destaque = $Destaque;
	}
	
	/**
	 * @Atribui valor ao Email de Contato do Evento
	 */
	public function setEmail($Email) {
		$this->Email = $Email;
	}
	
	/**
	 * @Atribui valor ao Estágio de Revisão das Informações do Evento
	 */
	public function setEstagio($Estagio) {
		$this->Estagio = $Estagio;
	}
	
	/**
	 * @Atribui valor ao Horário do Evento
	 */
	public function setHorario($Horario) {
		$this->Horario = $Horario;
	}
	
	/**
	 * @Atribui valor ao Identificador do Evento no BD
	 */
	public function setId($Id) {
		$this->Id = $Id;
	}
	
	/**
	 * @Atribui valor ao Local de ocorrência do Evento
	 */
	public function setLocal($Local) {
		$this->Local = $Local;
	}
	
	/**
	 * @Atribui valor ao Órgão Responsável pelo Evento
	 */
	public function setOrgao($Orgao) {
		$this->Orgao = $Orgao;
	}
	
	/**
	 * @Atribui valor à Programação do Evento
	 */
	public function setProgramacao($Programacao) {
		$this->Programacao = $Programacao;
	}
	
	/**
	 * @Atribui valor à Pessoa Responsável pelo Evento
	 */
	public function setResponsavel($Responsavel) {
		$this->Responsavel = $Responsavel;
	}
	
	/**
	 * @Atribui valor ao Telefone de Contato do Evento
	 */
	public function setTelefone($Telefone) {
		$this->Telefone = $Telefone;
	}
	
	/**
	 * @Atribui valor ao Título do Evento
	 */
	public function setTitulo($Titulo) {
		$this->Titulo = $Titulo;
	}

	/**
	 * @Atribui valor à Data de Início, de fim e de Período do Evento
	 */
	public function setPeriodo($Inicio,$Fim) {
		$this->setDataInicio($Inicio);
		$this->setDataFim($Fim);
		if (($this->DataInicio <> "") and ($this->DataFim <> "")) { 
			$this->Periodo = Periodo($this->DataInicio,$this->DataFim);
		}
	}
	
	
	/**
	 * BLOCO DE GETS 
	 */
	
	/**
	 * @Recupera a Data de Fim do Evento
	 */
	public function getDataFim() {
		return $this->DataFim;
	}
	
	/**
	 * @Recupera a Data de Início do Evento
	 */
	public function getDataInicio() {
		return $this->DataInicio;
	}
	
	/**
	 * @Recupera a Data de Cadastro do Evento
	 */
	public function getDataRegistro() {
		return $this->DataRegistro;
	}
	
	/**
	 * @Recupera a Descrição do Evento
	 */
	public function getDescricao() {
		return $this->Descricao;
	}
	
	/**
	 * @Recupera a Posição de Apresentação do Evento
	 */
	public function getDestaque() {
		return $this->Destaque;
	}
	
	/**
	 * @Recupera o Email de Contato do Evento
	 */
	public function getEmail() {
		return $this->Email;
	}
	
	/**
	 * @Recupera o Estágio de Revisão das Informações do Evento
	 */
	public function getEstagio() {
		return $this->Estagio;
	}
	
	/**
	 * @Recupera o Horario do Evento
	 */
	public function getHorario() {
		return $this->Horario;
	}
	
	/**
	 * @Recupera o Identificador do Evento no BD
	 */
	public function getId() {
		return $this->Id;
	}
	
	/**
	 * @Recupera o Local do Evento
	 */
	public function getLocal() {
		return $this->Local;
	}
	
	/**
	 * @Recupera o Órgão do Evento
	 */
	public function getOrgao() {
		return $this->Orgao;
	}
	
	/**
	 * @Recupera a Programação do Evento
	 */
	public function getProgramacao() {
		return $this->Programacao;
	}
	
	/**
	 * @Recupera a Pessoa Responsavel do Evento
	 */
	public function getResponsavel() {
		return $this->Responsavel;
	}
	
	/**
	 * @Recupera o Telefone de Contato do Evento
	 */
	public function getTelefone() {
		return $this->Telefone;
	}
	
	/**
	 * @Recupera o Título do Evento
	 */
	public function getTitulo() {
		return $this->Titulo;
	}
	
	/**
	 * @Recupera o Período do Evento
	 */
	public function getPeriodo() {
		return $this->Periodo;
	}
	
}

?>