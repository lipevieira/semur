<?php 
namespace Models;

class Equipamento{
    private $id;
    private $localidade;
    private $setor;
    private $usuario;
    private $equipamento;
    private $descricao;
    private $serial;
    private $tombo;
    private $fornecedor;
    private $marca;
    private $computador;
    private $obervacao;

/****************gets e sets****************/
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
   
    public function getSetor()
    {
        return $this->setor;
    } 
    public function setSetor($setor)
    {
        $this->setor = $setor;
        return $this;
    }
    public function getUsuario()
    {
        return $this->usuario;
    } 
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }
    public function getEquipamento()
    {
        return $this->equipamento;
    }
    public function setEquipamento($equipamento)
    {
        $this->equipamento = $equipamento;
        return $this;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
        return $this;
    }
    public function getSerial()
    {
        return $this->serial;
    }
    public function setSerial($serial)
    {
        $this->serial = $serial;
        return $this;
    }

    public function getTombo()
    {
        return $this->tombo;
    } 
    public function setTombo($tombo)
    {
        $this->tombo = $tombo;
        return $this;
    }
    public function getFornecedor()
    {
        return $this->fornecedor;
    }
    public function setFornecedor($fornecedor)
    {
        $this->fornecedor = $fornecedor;
        return $this;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
        return $this;
    }
   
    public function getObervacao()
    {
        return $this->obervacao;
    }
    public function setObervacao($obervacao)
    {
        $this->obervacao = $obervacao;
        return $this;
    }
    public function getLocalidade()
    {
        return $this->localidade;
    }
    public function setLocalidade($localidade)
    {
        $this->localidade = $localidade;

        return $this;
    }

    /**
     * Get the value of computador
     */ 
    public function getComputador()
    {
        return $this->computador;
    }

    /**
     * Set the value of computador
     *
     * @return  self
     */ 
    public function setComputador($computador)
    {
        $this->computador = $computador;

        return $this;
    }
}