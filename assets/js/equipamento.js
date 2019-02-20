$(function() {
  $("#btnInserirEquipamento").on("click", function() {
    $("#modalCadEquipamento").modal("show");
    //******************* Lipando os campos antes de abrir o modal*******************
    txtLocalidade = $("#txtLocalidade").val("");
    txtSetor = $("#txtSetor").val("");
    txtUsuario = $("#txtUsuario").val("");
    txtEquipamento = $("#txtEquipamento").val("");
    txtDescricao = $("#txtDescricao").val("");
    txtSerial = $("#txtSerial").val("");
    txtTombo = $("#txtTombo").val("");
    txtFornecedor = $("#txtFornecedor").val("");
    txtMarca = $("#txtMarca").val("");
    txtEnderecoIp = $("#txtEnderecoIp").val("");
    txtObs = $("#txtObs").val("");
  });
  // ******************* Validação e Requisição de do formulario de cadastro de equipamneto*******************
  $("#btnCadEquipamento").on("click", function() {
    $("#formCadEquipamento").validate({
      rules: {
        txtLocalidade: {
          required: true
        },
        txtSetor: {
          required: true
        },
        txtUsuario: {
          required: true
        },
        txtEquipamento: {
          required: true
        },
        txtDescricao: {
          required: true
        },
        txtSerial: {
          required: true
        },
        txtFornecedor: {
          required: true
        },
        txtMarca: {
          required: true
        }
      },
      submitHandler: function() {
        txtLocalidade = $("#txtLocalidade").val();
        txtSetor = $("#txtSetor").val();
        txtUsuario = $("#txtUsuario").val();
        txtEquipamento = $("#txtEquipamento").val();
        txtDescricao = $("#txtDescricao").val();
        txtSerial = $("#txtSerial").val();
        txtTombo = $("#txtTombo").val();
        txtFornecedor = $("#txtFornecedor").val();
        txtMarca = $("#txtMarca").val();
        txtEnderecoIp = $("#txtEnderecoIp").val();
        txtObs = $("#txtObs").val();
        // Requisição Ajax
        $.ajax({
          url: "http://localhost/semur/Equipamento/insert",
          type: "POST",
          data: {
            txtLocalidade: txtLocalidade,
            txtSetor: txtSetor,
            txtUsuario: txtUsuario,
            txtEquipamento: txtEquipamento,
            txtDescricao: txtDescricao,
            txtSerial: txtSerial,
            txtTombo: txtTombo,
            txtFornecedor: txtFornecedor,
            txtMarca: txtMarca,
            txtEnderecoIp: txtEnderecoIp,
            txtObs: txtObs
          },
          dataType: "json",
          success: function(json) {
            if (json.resposta === "Salvo com sucesso!") {
              $(".modal").modal("hide");
              // TO-DE Fazer: Atualização da tabela Após aleração
            }
            alert(json.resposta);
          }
        });
      }
    });
  });
  // ******************************Carregando o Modal com os Equipamentos****************************
  $("table tr td #btnAlterar").on("click", function() {
    var id = $(this).attr("equipamento");
    $.ajax({
      url: "http://localhost/semur/Equipamento/loadModal",
      type: "POST",
      data: { id: id },
      dataType: "json",
      success: function(data) {
        // Carregando as Informações do equipamento dentro modal
        $("#txtLocalidadeAlterar").val(data.lista.local);
        $("#txtSetorAlterar").val(data.lista.setor);
        $("#txtUsuarioAlterar").val(data.lista.usuario);
        $("#txtEquipamentoAlterar").val(data.lista.equipamento);
        $("#txtDescricaoAlterar").val(data.lista.descricao);
        $("#txtSerialAlterar").val(data.lista.serial);
        $("#txtTomboAlterar").val(data.lista.tombo);
        $("#txtFornecedorAlterar").val(data.lista.fornecedor);
        $("#txtMarcaAlterar").val(data.lista.marca);
        $("#txtEnderecoIpAlterar").val(data.lista.computador);
        $("#txtObsAlterar").val(data.lista.observacoes);
        $("#txtId").val(data.lista.id);
        $("#modalAlterarEquipamento").modal("show");
      }
    });
  });
  /***************Fazendo requisição ajax para Alterar os Equipamentos ***************** */
  $("#btnAlerarEquipamento").on("click", function() {
    $("#formAlterarEquipamento").validate({
      rules: {
        txtLocalidadeAlterar: {
          required: true
        },
        txtSetorAlterar: {
          required: true
        },
        txtUsuarioAlterar: {
          required: true
        },
        txtEquipamentoAlterar: {
          required: true
        },
        txtDescricaoAlterar: {
          required: true
        },
        txtSerialAlterar: {
          required: true
        },
        txtFornecedorAlterar: {
          required: true
        },
        txtMarcaAlterar: {
          required: true
        }
      },
      submitHandler: function() {
        /***********Certamdo as variaveis para manda para a controller**********/
        txtLocalidadeAlterar = $("#txtLocalidadeAlterar").val();
        txtSetorAlterar = $("#txtSetorAlterar").val();
        txtUsuarioAlterar = $("#txtUsuarioAlterar").val();
        txtEquipamentoAlterar = $("#txtEquipamentoAlterar").val();
        txtDescricaoAlterar = $("#txtDescricaoAlterar").val();
        txtSerialAlterar = $("#txtSerialAlterar").val();
        txtTomboAlterar = $("#txtTomboAlterar").val();
        txtFornecedorAlterar = $("#txtFornecedorAlterar").val();
        txtMarcaAlterar = $("#txtMarcaAlterar").val();
        txtEnderecoIpAlterar = $("#txtEnderecoIpAlterar").val();
        txtObsAlterar = $("#txtObsAlterar").val();
        txtId = $("#txtId").val();
        // Requisição Ajax
        $.ajax({
          url: "http://localhost/semur/Equipamento/update",
          type: "POST",
          data: {
            txtLocalidadeAlterar: txtLocalidadeAlterar,
            txtSetorAlterar: txtSetorAlterar,
            txtUsuarioAlterar: txtUsuarioAlterar,
            txtEquipamentoAlterar: txtEquipamentoAlterar,
            txtDescricaoAlterar: txtDescricaoAlterar,
            txtSerialAlterar: txtSerialAlterar,
            txtTomboAlterar: txtTomboAlterar,
            txtFornecedorAlterar: txtFornecedorAlterar,
            txtMarcaAlterar: txtMarcaAlterar,
            txtEnderecoIpAlterar: txtEnderecoIpAlterar,
            txtObsAlterar: txtObsAlterar,
            txtId:txtId
          },
          dataType: "json",
          success: function(json) {
            if (json.resposta === "Alterado com sucesso!") {
              $(".modal").modal("hide");
              // TO-DE Fazer: Atualização da tabela Após aleração
            }
            alert(json.resposta);
          }
        });
      }
    });
  });
});
