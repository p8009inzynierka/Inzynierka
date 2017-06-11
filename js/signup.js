$(document).ready(function(){

  $("#submit").click(function(){

    var username = $("#login").val();
    var password = $("#password").val();
    var password2 = $("#password2").val();
    var email = $("#email").val();

    if((username == "") || (password == "") || (email == "")) {
      $("#message").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Wprowadź nazwę użytkownika i hasło!</div>");
    }
    else {
      $.ajax({
        type: "POST",
        url: "register.php",
        data: $('#register-form').serialize(),/*"login="+username+"&password="+password+"&password2="+password2+"&email="+email*/,
          dataType: 'JSON',
        success: function(html){

			var text = $(html).text();
			//Pulls hidden div that includes "true" in the success response
			var response = text.substr(text.length - 4);

          if(response == "true"){

			$("#message").html(html);

					$('#submit').hide();
			}
		else {
			$("#message").html(html);
			$('#submit').show();
			}
        },
        beforeSend: function()
        {
          $("#message").html("<p class='text-center'><img src='images/ajax-loader.gif'></p>")
        }
      });
    }
    return false;
  });
});
