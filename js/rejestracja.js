$('document').ready(function()
{ 
	 $("#register-form").validate({
      rules:
	  {
			user_name: {
		    required: true,
			minlength: 3
			},
			password: {
			required: true,
			minlength: 8,
			maxlength: 15
			},
			cpassword: {
			required: true,
			equalTo: '#password'
			},
			user_email: {
            required: true,
            email: true
            },
	   },
       messages:
	   {
            user_name: "Nazwa musi posiadać minimum 3 znaki!",
            password:{
                      required: "Wpisz hasło!",
                      minlength: "Hasło musi posiadać minimum 8 znaków!"
                     },
            user_email: "Podany adres e-mail jest nieprawidłowy!",
			cpassword:{
						required: "Wpisz ponownie swoje hasło!",
						equalTo: "Podane hasła nie są identyczne!"
					  }
       },
	   submitHandler: submitForm	
       });  

	   function submitForm()
	   {		
				var data = $("#register-form").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'register.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Wysyłanie ...');
				},
				success :  function(data)
						   {						
								if(data==1){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Ten adres email jest już zarejestrowany !</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Utwórz konto');
										
									});
																				
								}
								else if(data=="registered")
								{
									
									$("#btn-submit").html('<img src="img/btn-ajax-loader.gif" /> &nbsp; Rejestracja ...');
									setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("success.php"); }); ',5000);
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Utwórz konto');
										
									});
											
								}
						   }
				});
				return false;
		}
});