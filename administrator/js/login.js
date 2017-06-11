$(document).ready(function () {
    "use strict";
    $("#submit").click(function (e) {
    e.preventDefault();
 
        var username = $("#login").val(), password = $("#password").val();
 
        if ((username === "") || (password === "")) {
            $("#message").html("<center><div class=\"alert alert-danger alert-dismissable\"></button>Wprowadź nazwę użytkownika i hasło!</div></center>");
        } else {
            $.ajax({
                type: "POST",
                url: "checkuser.php",
				data: $('#login-form').serialize(),
                dataType: 'JSON',
                success: function (html) {
                    //console.log(html.response + ' ' + html.username);
                    if (html.response === 'true') {
                        //location.assign("../index.php");
                        location.reload();
                        return html.username;
                    } else {
                        $("#message").html(html.response);
                    }
                },
                error: function (textStatus, errorThrown) {
                    console.log(textStatus);
                    console.log(errorThrown);
                },
                beforeSend: function () {
                    $("#message").html("<center><p class='text-center'><img src='img/ajax-loader.gif'></p></center>");
                }
            });
        }
        return false;
    });
});