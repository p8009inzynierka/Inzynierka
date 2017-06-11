$('#sprawdz').click(function(){
    if (! $('#domain').val()) {
    // Puste pole
        $('#domain-info').html('<strong>Podaj domenę!</strong><br>');
    } else {
        $.post(
            'select.php',
            {
                domain: $('#domain').val()
            },
            function (data) {
                console.log(data);
                if (data !== false && 'domain' in data) {
                    $('#domain-info').html('<strong>Domena została już zarejestrowana!<strong><br>');
                } else {
                    $('#domain-info').html('<strong>Domena jest wolna!</strong><br>');
                }
            }
        )
    }
});