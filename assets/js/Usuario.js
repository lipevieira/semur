function abrirModal(){
	$('.modal').modal('show');
}
function addUsuario() {
	// TO-DE Fazer : passar a requisição ajax com json e fazer validação de campos nullos....
	$('#formCadUsuario').on('submit', function(e){
		e.preventDefault();	
		var txtCadNome = $('#txtCadNome').val();
		var txtCadEmail = $('#txtCadEmail').val();
		var txtCadSenha = $('#txtCadSenha').val();
		var txtCadConfirmaSenha = $('#txtCadConfirmaSenha').val();
		// Requisição ajax
		$.ajax({
			url: 'http://localhost/semur/Usuario/inserir',
			type: 'POST',
			data:{
				txtCadNome:txtCadNome,
				txtCadEmail:txtCadEmail,
				txtCadSenha:txtCadSenha,
				txtCadConfirmaSenha:txtCadConfirmaSenha
			},
			// dataType:'json'
			success:function(json){
				alert(json);
			}

		});

		

	});
}


