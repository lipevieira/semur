
function abrirModal(){
	$('.modal').modal('show');
}
function addUsuario() {
	$('#formCadUsuario').on('submit', function(e){
		e.preventDefault();	
		var txtCadEmail = $('#txtCadEmail').val();
		var txtCadSenha = $('#txtCadSenha').val();
		// Requisição ajax
		$.ajax({
			url: 'http://localhost/semur/Usuario/inserir',
			type: 'POST',
			data:{txtCadEmail:txtCadEmail, txtCadSenha:txtCadSenha},
			success:function(msg){
				alert(msg);
			}

		});

		

	});
}


