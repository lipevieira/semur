<?php

namespace Controllers;

use \Core\Controller;

class EquipamentoController extends Controller
{
    public function index()
    {
        $dados = array('' => '',);
        $this->loadMenu('equipamento', $dados); // Carregando a pagina de equipamento dentro do Menu.
    }
    public function insert()
    {
        $res = array('resposta' => '',);
    // TO-DE Fazer: Verificação de campos vazio e peersistencia de dados
        if (isset($_POST['txtLocalidade']) && !empty($_POST['txtLocalidade'])) {
            $localidade = addslashes($_POST['txtLocalidade']);
            $res['resposta'] = "Tudo certo aqui..".$localidade;
            echo json_encode($res);
        }
    }
}
