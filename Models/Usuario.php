<?php 
namespace Models;
/*
*Autor: Filipe Vieira
*Descrição: Essa classe é um espelho do banco 
*de daodos que representar a tabela usuario.
* 
 */
class Usuario{
	private $id;
	private $nome;
	private $senha;

	public function __construct(){

	}

	// Gets e Sets 
	public function getId() {return $this->id;}
	public function setId($id) {$this->id = $id;}

	public function getNome() {return $this->nome;}
	public function setNome($nome) {$this->nome = $nome;}

	public function getSenha() {return $this->senha;}
	public function setSenha($senha) {$this->senha = $senha;}

}