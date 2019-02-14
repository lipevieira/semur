<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/menu.css" />


    <title>Equipamentos</title>
</head>

<body>
    <div id="topo">
        <h1>Sistema de Controle de Equipamentos - NTI</h1>
        <h3>Total de Equipamentos no Sistemas:</h3>
    </div>
    <button type="button" class="btn btn-success  btn-sm" id="btnInserirEquipamento">Inserir</button>
    <table class="table table-sm table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Códico</th>
                <th scope="col">Local</th>
                <th scope="col">Setor</th>
                <th scope="col">Usuário</th>
                <th scope="col">Equipamento</th>
                <th scope="col">Descricação</th>
                <th scope="col">Serial</th>
                <th scope="col">Tombo</th>
                <th scope="col">Fornecedor</th>
                <th scope="col">Marca</th>
                <th scope="col">Endereço/IP</th>
                <th scope="col">Observação</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>
                    <button type="button" class="btn btn-info btn-sm">Emprestar</button>
                    <button type="button" class="btn btn-warning btn-sm"><img
                            src="<?php echo BASE_URL; ?>assets/images/editar.png" alt=""></button>
                    <button type="button" class="btn btn-danger btn-sm"><img
                            src="<?php echo BASE_URL; ?>assets/images/excluir.png" alt=""></button>
                </td>
            </tr>

            <!-- ********************************************* -->
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <!-- ************************************************** -->
                <td>
                    <button type="button" class="btn btn-info btn-sm">Emprestar</button>
                    <button type="button" class="btn btn-warning btn-sm"><img
                            src="<?php echo BASE_URL; ?>assets/images/editar.png" alt=""></button>
                    <button type="button" class="btn btn-danger btn-sm"><img
                            src="<?php echo BASE_URL; ?>assets/images/excluir.png" alt=""></button>
                </td>
            </tr>

        </tbody>
    </table>
    <button type="button" class="btn btn-primary btn-sm" id="btnRelatorio">Relatório</button>
    <!--************* Modal de Cadastro de equipamento *************-->
    <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cadastro de equipamento.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--************************ Forumario de cadastro************************ -->
                    <form id="formCadEquipamento">
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="txtLocalidade">Localidade</label>
                                <input type="text" class="form-control" id="txtLocalidade" placeholder="Localidade" name="txtLocalidade"
                                    required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="txtSetor">Setor</label>
                                <input type="text" class="form-control" id="txtSetor" placeholder="Setor" required name="txtSetor">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="txtUsuario">Usuário</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="txtUsuario" placeholder="Usuário"
                                        required name="txtUsuario">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="txtEquipamento">Equipamento</label>
                                <input type="text" class="form-control" id="txtEquipamento" placeholder="Equipamento"
                                    required name="txtEquipamento">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="txtDescricao">Descrição</label>
                                <input type="text" class="form-control" id="txtDescricao" placeholder="Descrição"
                                    required name="txtDescricao">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="txtSerial">Serial</label>
                                <input type="text" class="form-control" id="txtSerial" placeholder="Serial" required name="txtSerial">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="txtTombo">Tombo</label>
                                <input type="text" class="form-control" id="txtTombo" placeholder="Tombo" >
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="txtFornecedor">Fornecedor</label>
                                <input type="text" class="form-control" id="txtFornecedor" placeholder="Fornecedor" name="txtFornecedor">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="txtMarca">Marca</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="txtMarca" placeholder="Marca" required name="txtMarca">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="txtEnderecoIp">Endereço IP</label>
                                <input type="text" class="form-control" id="txtEnderecoIp" placeholder="Endereço Ip"
                                    required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="txtObs">Obervações</label>
                                <input type="text" class="form-control" id="txtObs" placeholder="Obervações">
                            </div>
                            <!-- TO- DE Fazer: botão para inserir notas fiscal de equipamento -->
                            <!-- <div class="col-md-3 mb-3">
                                <label for="txtNf"  class="form-control">Nota Fiscal</label>
                                <input type="file">
                            </div> -->
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-success" id="btnCadEquipamento">Salvar</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>