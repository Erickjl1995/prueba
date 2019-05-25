function validar(){
		var user = $('#user').val();
		var pass = $('#password').val();
		$.ajax({
			url:'http://localhost/prueba/login/validar_usuario',
			type:'POST',
			data:'user='+user+'&pass='+pass
		}).done(function(resp){
			if(resp=='0'){
				$('#error').show();
			}else{
				location.href='http://localhost/prueba/inicio';
			};
		});
}