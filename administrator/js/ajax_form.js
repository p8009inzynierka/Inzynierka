<script type="text/javascript">
    $(function() {
        $("#submit").click(function() {

var login = $('#login').val();
var password = $('#password').val();
var dataString = 'login='+ login + '&password=' + password;

$.ajax({
    type: 'POST',
    url: 'register.php',
    data: dataString,
    success: function(data) {
        if( data == "" )
            alert( 'Nie uzupełniłeś wszystkich pól!' );
        else
            window.location = window.location;
    }
});
        });
    });
</script>