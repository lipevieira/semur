<?php 
namespace Dao;

use \Core\ Model;
use \Models\Usuario;

/**
 * Autor Filipe Vieira 
 * Descrição: Essa Classe realizar as operações 
 * de banco de dados relaciondas ao usuário
 */
class UsuarioDAO extends Model{
	private $conn;
	function __construct(){
		$this->conn = Model::conexao();
	}

	public function insertDAO(Usuario $usuario){
		$usuario->getEmail();
		if($this->existEmail($usuario) == false) {
			$sql = "INSERT INTO usuario (nome,email, senha) VALUES (:nome, :email, :senha)";
			$sql = $this->conn->prepare($sql);
			$sql->bindValue(':nome', $usuario->getNome());
			$sql->bindValue(':email', $usuario->getEmail());
			$sql->bindValue(':senha', $usuario->getSenha());
			$sql->execute();
			return true;
		}else{
			return false;
		}
	}
	

	private  function existEmail(Usuario $usuario){
		$sql = "SELECT email FROM usuario WHERE email = :email";
		$sql = $this->conn->prepare($sql);
		$sql->bindValue(':email', $usuario->getEmail());
		$sql->execute();

		if($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function loginDAO(Usuario $usuario){
		$sql = "SELECT email, senha FROM usuario WHERE email = :email AND senha = :senha";
		$sql = $this->conn->prepare($sql);
        $sql->bindValue(":email", $usuario->getEmail());
        $sql->bindValue(":senha", $usuario->getSenha());
        $sql->execute();

        if ($sql->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
	}
}


