<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="assets/css/signin.css" />
</head>

<body>
    <div class="borda"></div>

    <!-- Formulario de Login -->
    <form id="formLogin" class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal"> Faça seu login</h1>
        <div class="form-group">
            <label for="txtLoginEmail">E-mail </label>
            <input type="email" class="form-control" id="txtLoginEmail"  name="txtLoginEmail" aria-describedby="emailHelp"
                placeholder="Enter email" required>         
        </div>
        <div class="form-group">
            <label for="txtLoginSenha">Senha</label>
            <input type="password" class="form-control" id="txtLoginSenha" name="txtLoginSenha" placeholder="Senha"  required>
        </div>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me">Lembra login</label>
        </div>
        <button  id="btnLogar" class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <!-- <a href="javascript:;" onclick="abrirModal()">Por favor, cadastre-se</a> -->
        <a href="javascript:;" id="abrirModalCad">Por favor, cadastre-se</a>
    </form>

    <!-- Incio da Modal -->
    <div class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="myModal">Cadastro de Usuário</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Meu formulario -->
                    <form method="POST" id="formCadUsuario">
                        <div class="form-group">
                            <label for="txtCadNome">Nome</label>
                            <input type="text" class="form-control" id="txtCadNome" aria-describedby="emailHelp"
                                placeholder="Informe seu nome" name="txtCadNome" required>
                        </div>

                        <div class="form-group">
                            <label for="txtCadEmail">Email</label>
                            <input type="email" class="form-control" id="txtCadEmail" aria-describedby="emailHelp"
                                placeholder="informe seu  email" name="txtCadEmail" required>
                        </div>
                        <div class="form-group">
                            <label for="txtCadSenha">Senha</label>
                            <input type="password" class="form-control" id="txtCadSenha" placeholder="Informe sua senha"
                                name="txtCadSenha" required>
                        </div>

                        <div class="form-group">
                            <label for="txtCadConfirmaSenha">Confirma Senha</label>
                            <input type="password" class="form-control" id="txtCadConfirmaSenha"
                                placeholder="Confirma sua Senha" name="txtCadConfirmaSenha" required>
                        </div>
                        <div class="modal-footer">
                            <!-- <button type="submit" class="btn btn-success" id="enviar"   onclick="addUsuario()">Salvar</button>                   -->
                            <button type="submit" class="btn btn-success" id="btnUsuarioCad" >Salvar</button>                  
                                      
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>