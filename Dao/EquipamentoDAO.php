<?php
namespace Dao;

use \Core\Model;
use \Models\Equipamento;

class EquipamentoDAO extends Model
{
    private $conn;
    public function __construct()
    {
        $this->conn = Model::conexao();
    }
    public function insertDao(Equipamento $equipamento)
    {
        $equipamento->getSerial();
        $equipamento->getTombo();
        try {
            if ($this->IsSerial($equipamento) == false) {
                $sql = "INSERT INTO equipamento
                (local,setor,usuario,equipamento,descricao,serial,tombo,fornecedor,marca,computador,observacoes)
                VALUES
                (:local, :setor, :usuario, :equipamento, :descricao, :serial, :tombo, :fornecedor, :marca, :computador, :observacoes)";
                $sql = $this->conn->prepare($sql);
                $sql->bindValue(':local', $equipamento->getLocalidade());
                $sql->bindValue(':setor', $equipamento->getSetor());
                $sql->bindValue(':usuario', $equipamento->getUsuario());
                $sql->bindValue(':equipamento', $equipamento->getEquipamento());
                $sql->bindValue(':descricao', $equipamento->getDescricao());
                $sql->bindValue(':serial', $equipamento->getSerial());
                $sql->bindValue(':tombo', $equipamento->getTombo());
                $sql->bindValue(':fornecedor', $equipamento->getFornecedor());
                $sql->bindValue(':marca', $equipamento->getMarca());
                $sql->bindValue(':computador', $equipamento->getComputador());
                $sql->bindValue(':observacoes', $equipamento->getObervacao());
                $sql->execute();
                return true;
            } else {
                return false;
            }
        } catch (Exception  $e) {
            $e->getMassage();
        }
    }

    public function updateDao(Equipamento $equipamento)
    {
        try {
            $sql = "UPDATE equipamento SET
                local = :local, setor = :setor, usuario = :usuario, equipamento = :equipamento, descricao = :descricao, serial = :serial, tombo = :tombo, fornecedor = :fornecedor, marca = :marca, computador = :computador, observacoes = :observacoes WHERE id = :id";
            $sql = $this->conn->prepare($sql);
            $sql->bindValue(':local', $equipamento->getLocalidade());
            $sql->bindValue(':setor', $equipamento->getSetor());
            $sql->bindValue(':usuario', $equipamento->getUsuario());
            $sql->bindValue(':equipamento', $equipamento->getEquipamento());
            $sql->bindValue(':descricao', $equipamento->getDescricao());
            $sql->bindValue(':serial', $equipamento->getSerial());
            $sql->bindValue(':tombo', $equipamento->getTombo());
            $sql->bindValue(':fornecedor', $equipamento->getFornecedor());
            $sql->bindValue(':marca', $equipamento->getMarca());
            $sql->bindValue(':computador', $equipamento->getComputador());
            $sql->bindValue(':observacoes', $equipamento->getObervacao());
            $sql->bindValue(':id', $equipamento->getId());
            $sql->execute();
            return true;
        } catch (Exception  $e) {
            $e->getMassage();
            return false;
        }
    }
    
    private function IsSerial($equipamento)
    {
        try {
            $sql = "SELECT serial FROM equipamento WHERE serial = :serial";
            $sql = $this->conn->prepare($sql);
            $sql->bindValue(':serial', $equipamento->getSerial());
            $sql->execute();

            if ($sql->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception  $e) {
            $e->getMassage();
        }
    }
    public function IsIdEquipamento($equipamento)
    {
        try {
            $sql = "SELECT id FROM equipamento WHERE id = :id";
            $sql = $this->conn->prepare($sql);
            $sql->bindValue(':id', $equipamento->getId());
            $sql->execute();
    
            if ($sql->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            $e->getMassage();
        }
    }

    public function getAllEquipamentos()
    {
        $array = array();
        try {
            $sql = "SELECT * FROM equipamento ORDER BY local, setor, usuario, equipamento";
            $sql = $this->conexao()->query($sql);
            /******Verificação se tem algum equipamento********/
            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }
        } catch (Exception $e) {
            $e->getMassage();
        }
        return $array;
    }
    public function deleteDao(Equipamento $equipamento)
    {
        try {
            $sql = "DELETE FROM equipamento WHERE id = :id";
            $sql = $this->conn->prepare($sql);
            $sql->bindValue(':id', $equipamento->getId());
            $sql->execute();
            return true;
        } catch (Exception $e) {
            $e->getMassage();
        }
    }

    public function getEquipamento(Equipamento $equipamento)
    {
        $array = array();
        try {
            $sql = "SELECT * FROM equipamento WHERE id = :id";
            $sql = $this->conexao()->prepare($sql);
            $sql->bindValue(':id', $equipamento->getId());
            $sql->execute();
            /******Verificação se tem algum equipamento********/
            if ($sql->rowCount() > 0) {
                $array = $sql->fetch();
            }
        } catch (Exception $e) {
            $e->getMassage();
        }
        return $array;
    }
}
