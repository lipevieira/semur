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

        //  Recebendo os dados da requisão.
        $nome = addslashes($_POST['txtCadNome']);
        $email = addslashes($_POST['txtCadEmail']);
        $senha = addslashes($_POST['txtCadSenha']);
        $confirmaSenha = addslashes($_POST['txtCadConfirmaSenha']);
        if (isset($_POST['txtCadEmail']) && !empty($_POST['txtCadEmail']) && isset($_POST['txtCadSenha']) && !empty($_POST['txtCadSenha'])){
            echo "Cadastro feito com sucesso!";
            $usuario->setNome($nome);
            $usuario->setEmail($email);
            $usuario->setSenha(md5($senha));
            $usuario->setConfirmaSenha(md5($confirmaSenha));
// TO-DE Fazer: verificação de inserssãio de usuário
            try{
                $verificador = $usuarioDAO->insert($usuario);
                if ($verificador == true) {
                    echo "Cadastro feito com sucesso!";
                    return true;
                }else{
                  echo "Error!";
              }
          }catch(Expetion $e){
            echo "Erro de banco de dados ".$e;
            return false;
        }
    }
 }
}
