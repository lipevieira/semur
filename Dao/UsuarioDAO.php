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
	
	function __construct(){
		$db = Model::conexao();
	}

	public function insert(Usuario $usuario){
		if (count($fieldes) > 0) {
			if($this->existEmail($email) == false) {
				$db = "INSERT INTO usuario (email, senha) VALUES (:email, :senha)";
				$db = $this->db->prepare($db);
				$db->bindValue(':email', $usuário->getEmail());
				$db->bindValue(':email', $usuário->getSenha());
				$db->execute();
			}

		}
	}
	

	private  function existEmail(){
		$db = "SELECT * FROM usuario WHERE email = :email";
		$db = $this->db->prepare($db);
		$db->bindValue(':email', $usuario->getEmail());
		$db->execute();

		if($db->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}
}


