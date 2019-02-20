<?php

namespace Controllers;

use \Core\Controller;
use \Dao\EquipamentoDAO;
use \Models\Equipamento;

class EquipamentoController extends Controller
{
    public function index()
    {
        $dados = array();
        $dao = new EquipamentoDAO();

        $dados['lista'] = $dao->getAllEquipamentos();
        $this->loadMenu('equipamento', $dados); // Carregando a pagina de equipamento dentro do Menu.
    }
    public function insert()
    {
        $res = array('resposta' => '');
        $equipamento = new Equipamento();
        $dao = new EquipamentoDAO();
        /******************************************************************/
        $txtLocalidade = addslashes($_POST['txtLocalidade']);
        $txtSetor = addslashes($_POST['txtSetor']);
        $txtUsuario = addslashes($_POST['txtUsuario']);
        $txtEquipamento = addslashes($_POST['txtEquipamento']);
        $txtDescricao = addslashes($_POST['txtDescricao']);
        $txtSerial = addslashes($_POST['txtSerial']);
        $txtTombo = addslashes($_POST['txtTombo']);
        $txtFornecedor = addslashes($_POST['txtFornecedor']);
        $txtMarca = addslashes($_POST['txtMarca']);
        $txtEnderecoIp = addslashes($_POST['txtEnderecoIp']);
        $txtObs = addslashes($_POST['txtObs']);
        /********Validação de campos vazio*********/
        if (!empty($txtLocalidade)) {
            /*******Setando as variaveis no Model********/
            $equipamento->setLocalidade($txtLocalidade);
            $equipamento->setSetor($txtSetor);
            $equipamento->setUsuario($txtUsuario);
            $equipamento->setEquipamento($txtEquipamento);
            $equipamento->setDescricao($txtDescricao);
            $equipamento->setSerial($txtSerial);
            $equipamento->setTombo($txtTombo);
            $equipamento->setFornecedor($txtFornecedor);
            $equipamento->setMarca($txtMarca);
            $equipamento->setComputador($txtEnderecoIp);
            $equipamento->setObervacao($txtObs);
            /*Fazendo Persistencia ao banco de dados */
            try {
                $verificador = $dao->insertDao($equipamento);
                if ($verificador == true) {
                    $res['resposta'] = "Salvo com sucesso!";
                } else {
                    $res['resposta'] = "Serial ou Tombo Invalido!";
                }
                echo json_encode($res);
            } catch (Exception $th) {
                $th->getMessage();
            }
        } else {
            $res['resposta'] = "Error Campos Invalidos";
            echo json_encode($res);
        }
    }

    /*************** Metodo para fazer Alteração no equipamento****************/
    public function update()
    {
        $res = array('resposta' => '');
        $equipamento = new Equipamento();
        $dao = new EquipamentoDAO();
        /******************************************************************/
        $txtLocalidadeAlterar = addslashes($_POST['txtLocalidadeAlterar']);
        $txtSetorAlterar = addslashes($_POST['txtSetorAlterar']);
        $txtUsuarioAlterar = addslashes($_POST['txtUsuarioAlterar']);
        $txtEquipamentoAlterar = addslashes($_POST['txtEquipamentoAlterar']);
        $txtDescricaoAlterar = addslashes($_POST['txtDescricaoAlterar']);
        $txtSerialAlterar = addslashes($_POST['txtSerialAlterar']);
        $txtTomboAlterar = addslashes($_POST['txtTomboAlterar']);
        $txtFornecedorAlterar = addslashes($_POST['txtFornecedorAlterar']);
        $txtMarcaAlterar = addslashes($_POST['txtMarcaAlterar']);
        $txtEnderecoIpAlterar = addslashes($_POST['txtEnderecoIpAlterar']);
        $txtObsAlterar = addslashes($_POST['txtObsAlterar']);
        $txtId = addslashes($_POST['txtId']);
        /********Validação de campos vazio*********/
        if (!empty($txtLocalidadeAlterar)) {
            /*******Setando as variaveis no Model********/
            $equipamento->setLocalidade($txtLocalidadeAlterar);
            $equipamento->setSetor($txtSetorAlterar);
            $equipamento->setUsuario($txtUsuarioAlterar);
            $equipamento->setEquipamento($txtEquipamentoAlterar);
            $equipamento->setDescricao($txtDescricaoAlterar);
            $equipamento->setSerial($txtSerialAlterar);
            $equipamento->setTombo($txtTomboAlterar);
            $equipamento->setFornecedor($txtFornecedorAlterar);
            $equipamento->setMarca($txtMarcaAlterar);
            $equipamento->setComputador($txtEnderecoIpAlterar);
            $equipamento->setObervacao($txtObsAlterar);
            $equipamento->setId($txtId);
            /******** Fazendo Alterações no DB*********/
            try {
                $verificador = $dao->updateDao($equipamento);
                if ($verificador == true) {
                    $res['resposta'] = "Alterado com sucesso!";
                } else {
                    $res['resposta'] = "Error ao Fazer Alteração!";
                }
                echo json_encode($res);
            } catch (Exception $th) {
                $th->getMessage();
            }
        }
    }

    public function loadModal()
    {
        $dados = array();
        $equipamento = new Equipamento();
        $dao = new EquipamentoDAO();
        // ********************************************************************
        $id = $_POST['id'];
        $equipamento->setId($id);
        // ********************************************************************
        //  $dados['lista'] = $dao->getAllEquipamentos();********
        try {
            $dados['lista']  = $dao->getEquipamento($equipamento);
            echo json_encode($dados);
        } catch (Exception $th) {
            $th->getMessage();
        }
    }

    public function delete(){
        // TO-DE fazer: Pegar o id da requisição ajax e fazer a exclusão do equipamento 
    }
}
