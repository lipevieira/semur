<?php
namespace Models;

/*
 *Autor: Filipe Vieira
 *Descrição: Essa classe é um espelho do banco
 *de daodos que representar a tabela usuario.
 *
 */
class Usuario
{
    private $id;
    private $email;
    private $senha;

    public function __construct()
    {

    }
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
	}

    public function getEmail()
    {
        return $this->Email;
    } 
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
	}
    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
        return $this;
    }
}
