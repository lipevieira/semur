
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
  <link rel="stylesheet" href="assets/css/signin.css"/>
  <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/Usuario.js"></script>
</head>
<body class="">
  <div class="borda"></div>

<!-- Formulario de Login -->
  <form class="form-signin">
    <h1 class="h3 mb-3 font-weight-normal"> Faça seu login</h1>
    <div class="form-group">
      <label for="txtLoginEmail">Email address</label>
      <input type="email" class="form-control" id="txtLoginEmail" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="txtLoginSenha">Password</label>
      <input type="password" class="form-control" id="txtLoginSenha" placeholder="Password">
    </div>
    <div class="checkbox mb-3">
     <label>
      <input type="checkbox" value="remember-me"> Remember me</label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <a href="javascript:;" onclick="abrirModal()" >Por favor, cadastre-se</a>
</form>

<!-- Incio da Modal -->
<div class="modal fade"   role="dialog">
  <div class="modal-dialog" >
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
            <label for="txtCadEmail">Email address</label>
            <input type="email" class="form-control" id="txtCadEmail" aria-describedby="emailHelp" placeholder="Enter email" name="txtCadEmail">
          </div>
          <div class="form-group">
            <label for="txtCadSenha">Password</label>
            <input type="password" class="form-control" id="txtCadSenha" placeholder="Password" name="txtCadSenha">
          </div>
          <div class="modal-footer">
            <button type="submit"class="btn btn-success"  id="enviar" onclick="addUsuario()">Salvar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>




</body>
</html>

