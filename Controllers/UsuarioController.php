<?php

namespace Controllers;

use \Core\Controller;
use \Dao\UsuarioDAO;
use \Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        $dados = array(
            '' => ' ',
        );
    }

    public function inserir()
    {       
        $usuario = new Usuario();
        $usuarioDAO = new UsuarioDAO();

        $email = addslashes($_POST['txtCadEmail']);
        $senha = addslashes($_POST['txtCadSenha']);
        if (isset($_POST['txtCadEmail']) && !empty($_POST['txtCadEmail']) && isset($_POST['txtCadSenha']) && !empty($_POST['txtCadSenha'])){
            echo "Cadastro feito com sucesso!";
            $usuario->setEmail($email);
            $usuario->setSenha(md5($senha));

            if ($usuarioDAO->insert($usuario)) {
                echo "Cadastro feito com sucesso!";
                return true;
            }else{
                echo "Erro ao salvar";
            }
        } else {
            echo "Campos Invalidos";
            return false;
        }

    }

    // Validação de campos nulos ou vazios
    private function validaDados()
    {


    }
}
