$('document').ready(function()
{ 
	 $("#login-form").validate({
      rules:
	  {
			password: {
			required: true,
			},
			user_email: {
            required: true,
            email: true
            },
	   },
       messages:
	   {
            password:{
                      required: "<br>Podaj hasło!"
                     },
            user_email: "<br>Podany adres e-mail jest nieprawidłowy!",
       },
	   submitHandler: submitForm	
       });  
	   
	   function submitForm()
	   {		
			var data = $("#login-form").serialize();
				
			$.ajax({
				
			type : 'POST',
			url  : 'login_process.php',
			data : data,
			beforeSend: function()
			{	
				$("#error").fadeOut();
				$("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Zatwierdzanie ...');
			},
			success :  function(response)
			   {						
					if(response=="ok"){
									
						$("#btn-login").html('<img src="img/btn-ajax-loader.gif" /> &nbsp; Logowanie ...');
						setTimeout(' window.location.href = "zarzadzanie.php"; ',4000);
					}
					else{
									
						$("#error").fadeIn(1000, function(){						
				$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
											$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Zaloguj');
									});
					}
			  }
			});
				return false;
		}
});