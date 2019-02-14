<?php

namespace Controllers;

use \Core\Controller;
use \Dao\UsuarioDAO;
use \Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        $dados = array('' => ' ',);
    }

    public function inserir()
    {
        $res = array();
        $usuario = new Usuario();
        $usuarioDAO = new UsuarioDAO();
        //  Recebendo os dados da requisão.
        $nome = addslashes($_POST['txtCadNome']);
        $email = addslashes($_POST['txtCadEmail']);
        $senha = addslashes($_POST['txtCadSenha']);
        if (isset($_POST['txtCadEmail']) && !empty($_POST['txtCadEmail'])) {
            $usuario->setNome($nome);
            $usuario->setEmail($email);
            $usuario->setSenha(md5($senha));
            /******************************************************** */
            try {
                $fericador = $usuarioDAO->insertDAO($usuario);
                if ($fericador) {
                    $res['resposta'] = "Cadastro feito com sucesso!";
                } else {
                    $res['resposta'] = "E-mail ja cadastrado!";
                }
                echo json_encode($res);
            } catch (Exception  $e) {
                $e->getMessage();
            }
        }
    }

    public function login()
    {
        $res = array();
        // Atributos para conexao ao banco de dados
        $usuario = new Usuario();
        $usuarioDAO = new UsuarioDAO();
        /* **************************************/
        $email = addslashes($_POST['txtLoginEmail']);
        $senha = addslashes($_POST['txtLoginSenha']);
        /* **************************************/
        $usuario->setEmail($email);
        $usuario->setSenha(md5($senha));
        /* Vericando se existe um usuário no DB*/
        $verificador =  $usuarioDAO->loginDAO($usuario);
        if ($verificador) {
            $res['resposta'] = "Login feito com sucesso";
        } else {
            $res['resposta'] = "Usuário ou senha Incorretos";
        }
        echo json_encode($res);
    }
}
