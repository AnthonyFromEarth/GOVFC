$(document).ready(function() {



	$("#registerForm").submit(function(e){

		//console.log($( this ).serializeArray());

		e.preventDefault();

		if($('#password').val() != $('#password2').val()){
			alert("Vosmdp sont différents");
		}

		doRegister();
	});




	var doRegister = function(){
		$.post( "index.php?m=register&json",
			{email : $('#email').val(),
			 nom : $('#nom').val(),
			 prenom: $('#prenom').val(),
			 pass1 : $('#password').val(),
			 pass2 : $('#password2').val()
				}).done(function(data){
			console.log(data);
		});
	}

});