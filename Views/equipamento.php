<!DOCTYPE html>
<html lang="pt-br">

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
    <!-- <button type="button" class="btn btn-primary btn-sm" id="btnRelatorio">Relatório</button> -->

    <table class="table table-bordered  table-striped table-sm " id="tblEquipamento">
        <thead class="thead-dark">
            <tr>
                <th scope="col">CÓDICO</th>
                <th scope="col">LOCAL</th>
                <th scope="col">SETOR</th>
                <th scope="col">USUÁRIO</th>
                <th scope="col">EQUIPAMENTO</th>
                <th scope="col">DESCRIÇÃO</th>
                <th scope="col">SERIAL</th>
                <th scope="col">TOMBO</th>
                <th scope="col">FORNECEDOR</th>
                <th scope="col">MARCA</th>
                <th scope="col">ENDEREÇO/IP</th>
                <th scope="col">OBSERVAÇOES</th>
                <th scope="col" id="col_acoes">Ações</th>
            </tr>
        </thead>
        <?php foreach ($lista as $item): ?>
        <tbody>
            <tr>
                <th scope="row"><?php echo $item['id']; ?></th>

                <td><?php echo $item['local']; ?></td>
                <td><?php echo $item['setor']; ?></td>
                <td><?php echo $item['usuario']; ?></td>
                <td><?php echo $item['equipamento']; ?></td>
                <td><?php echo $item['descricao']; ?></td>
                <td><?php echo $item['serial']; ?></td>
                <td><?php echo $item['tombo']; ?></td>
                <td><?php echo $item['fornecedor']; ?></td>
                <td><?php echo $item['marca']; ?></td>
                <td><?php echo $item['computador']; ?></td>
                <td><?php echo $item['observacoes']; ?></td>
                <!-- Ações na tabela de equipamento -->
                <td id="btl_acoes">
                    <button type="button" class="btn btn-info btn-sm">Emprestar</button>
                    <button type="button" class="btn btn-warning btn-sm" id="btnAlterar"
                        equipamento="<?php echo $item['id']?>"><img
                            src="<?php echo BASE_URL; ?>assets/images/editar.png"></button>
                    <button type="button" class="btn btn-danger btn-sm"><img
                            src="<?php echo BASE_URL; ?>assets/images/excluir.png" alt=""></button>
                </td>
            </tr>
        </tbody>
        <?php endforeach; ?>
    </table>
    <!--*************************************** Modal de Cadastro de equipamento ***************************************-->
    <div class="modal" tabindex="-1" role="dialog" id="modalCadEquipamento">
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
                                <input type="text" class="form-control" id="txtLocalidade" placeholder="Localidade"
                                    name="txtLocalidade" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="txtSetor">Setor</label>
                                <input type="text" class="form-control" id="txtSetor" placeholder="Setor" required
                                    name="txtSetor">
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
                                <input type="text" class="form-control" id="txtSerial" placeholder="Serial" required
                                    name="txtSerial">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="txtTombo">Tombo</label>
                                <input type="text" class="form-control" id="txtTombo" placeholder="Tombo">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="txtFornecedor">Fornecedor</label>
                                <input type="text" class="form-control" id="txtFornecedor" placeholder="Fornecedor"
                                    name="txtFornecedor">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="txtMarca">Marca</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="txtMarca" placeholder="Marca" required
                                        name="txtMarca">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="txtEnderecoIp">Endereço IP</label>
                                <input type="text" class="form-control" id="txtEnderecoIp" placeholder="Endereço Ip">
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
    <!--***************************************** Modal para Alterar as Informações do Equipamento **************************************-->
    <div class="modal" tabindex="-1" role="dialog" id="modalAlterarEquipamento">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Alterar Equipamento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de Aletração de equipameto -->
                    <form id="formAlterarEquipamento">
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="txtLocalidade">Códico</label>
                                <input type="text" class="form-control" id="txtId" name="txtId" disabled>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="txtLocalidadeAlterar">Localidade</label>
                                <input type="text" class="form-control" id="txtLocalidadeAlterar" placeholder="LocalidadeAlterar"
                                    name="txtLocalidade" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="txtSetorAlterar">Setor</label>
                                <input type="text" class="form-control" id="txtSetorAlterar" placeholder="Setor" required
                                    name="txtSetorAlterar">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="txtUsuarioAlterar">Usuário</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="txtUsuarioAlterar" placeholder="Usuário"
                                        required name="txtUsuarioAlterar">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="txtEquipamentoAlterar">Equipamento</label>
                                <input type="text" class="form-control" id="txtEquipamentoAlterar" placeholder="Equipamento"
                                    required name="txtEquipamentoAlterar">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="txtDescricaoAlterar">Descrição</label>
                                <input type="text" class="form-control" id="txtDescricaoAlterar" placeholder="Descrição"
                                    required name="txtDescricaoAlterar">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="txtSerialAlterar">Serial</label>
                                <input type="text" class="form-control" id="txtSerialAlterar" placeholder="Serial" required
                                    name="txtSerialAlterar">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="txtTomboAlterar">Tombo</label>
                                <input type="text" class="form-control" id="txtTomboAlterar" placeholder="TomboAlterar">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="txtFornecedorAlterar">Fornecedor</label>
                                <input type="text" class="form-control" id="txtFornecedorAlterar" placeholder="Fornecedor"
                                    name="txtFornecedorAlterar">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="txtMarcaAlterar">Marca</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="txtMarcaAlterar" placeholder="MarcaAlterar" required
                                        name="txtMarcaAlterar">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="txtEnderecoIpAlterar">Endereço IP</label>
                                <input type="text" class="form-control" id="txtEnderecoIpAlterar" placeholder="Endereço Ip">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="txtObsAlterar">Obervações</label>
                                <input type="text" class="form-control" id="txtObsAlterar" placeholder="Obervações">
                            </div>
                            <!-- TO- DE Fazer: botão para inserir notas fiscal de equipamento -->
                            <!-- <div class="col-md-3 mb-3">
                                <label for="txtNf"  class="form-control">Nota Fiscal</label>
                                <input type="file">
                            </div> -->
                        </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button> -->
                    <button type="submit" class="btn btn-success" id="btnAlerarEquipamento">Confirmar Alteração</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
</body>

</html>