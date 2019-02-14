$(function() {
  $("#btnInserirEquipamento").on("click", function() {
    $(".modal").modal("show");
  });
  // Validação e Requisição de do formulario de cadastro de equipamneto
  $("#btnCadEquipamento").on("click", function() {
    $("#formCadEquipamento").validate({
        rules:{
            txtLocalidade:{
                required:  true
            },
            txtSetor:{
                required: true
            },
            txtUsuario:{
                required: true   
            },
            txtEquipamento:{
                required: true
            },
            txtDescricao:{
                required: true
            },
            txtSerial:{
                required:true
            },
            txtFornecedor:{
                required:true
            },
            txtMarca:{
                required:true
            }
        }, submitHandler: function(){
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
                data:{  txtLocalidade:txtLocalidade,
                            txtSetor:txtSetor,
                            txtUsuario:txtUsuario,
                            txtEquipamento:txtEquipamento,
                            txtDescricao:txtDescricao,
                            txtSerial:txtSerial,
                            txtTombo:txtTombo,
                            txtFornecedor:txtFornecedor,
                            txtMarca:txtMarca,
                            txtEnderecoIp:txtEnderecoIp,
                            txtObs:txtObs
                        },
                dataType: "json",
                success:function(json){
                    alert(json.resposta);
                }
            });
        }
    });
  });

});
