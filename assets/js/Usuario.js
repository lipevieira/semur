$(function() {
  // Fazendo o Login
  $("#btnLogar").on("click", function(e) {
    $("#formLogin").validate({
      rules: {
        txtLoginEmail: {
          minlength: 10,
          required: true,
          email: true
        },
        txtLoginSenha: {
          required: true
        }
      },
      submitHandler: function() {
        // Caso seja atendida as regras do formulario será feita a requisição
        var txtLoginEmail = $("#txtLoginEmail").val();
        var txtLoginSenha = $("#txtLoginSenha").val();

        $.ajax({
          url: "http://localhost/semur/Usuario/login",
          type: "POST",
          data: { txtLoginEmail: txtLoginEmail, txtLoginSenha: txtLoginSenha },
          dataType: "json",
          success: function(json) {
            if(json.resposta === "Login feito com sucesso"){
              window.location.href = "http://localhost/semur/Equipamento/index";	
            }else{
              alert(json.resposta);
            }
          }
        });
      }
    });
  });
  // Abrindo Janela Modal para cadastro de usuario
  $("#abrirModalCad").on("click", function() {
    $(".modal").modal("show");
  });

  //   Cadastrando Usuário
  $("#btnUsuarioCad").on("click", function() {
    $("#formCadUsuario").validate({
      rules: {
        txtCadNome: {
          required: true
        },
        txtCadEmail: {
          minlength: 10,
          required: true,
          email: true
        },
        txtCadSenha: {
          minlength: 3,
          required: true
        },
        txtCadConfirmaSenha: {
          required: true,
          minlength: 3,
          equalTo: "#txtCadSenha"
        }
      },
      submitHandler: function() {
        // Caso seja atendida as regras do formulario será feita a requisição
        var txtCadNome = $("#txtCadNome").val();
        var txtCadEmail = $("#txtCadEmail").val();
        var txtCadSenha = $("#txtCadSenha").val();
        var txtCadConfirmaSenha = $("#txtCadConfirmaSenha").val();
        // Requisição ajax
        $.ajax({
          url: "http://localhost/semur/Usuario/inserir",
          type: "POST",
          data: {
            txtCadNome: txtCadNome,
            txtCadEmail: txtCadEmail,
            txtCadSenha: txtCadSenha,
            txtCadConfirmaSenha: txtCadConfirmaSenha
          },
          dataType: "json",
          success: function(json) {
            if (json.resposta === "Cadastro feito com sucesso!") {
              alert(json.resposta);
              $(".modal").modal("hide");
            } else {
              alert(json.resposta);
            }
          }
        });
      }
    });
  });
});
