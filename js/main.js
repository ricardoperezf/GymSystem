jQuery(document).on('submit', '#formlg', function (event) {
    event.preventDefault();
    jQuery.ajax({
            url: 'php/login.php',
            type: 'POST',
            dataType: 'json',
            data: $(this).serialize(),
            beforeSend: function () {
                $('.botonlg').val('Validando...');
            }
        })
        .done(function (respuesta) {
            console.log(respuesta);
            if (!respuesta.error) {
                    location.href = 'admin/index.php';
            } else {
                $('.error').slideDown('slow');
                setTimeout(function () {
                    $('.error').slideUp('slow');
                    $('.botonlg').val('Iniciar sesión');

                }, 2000);
            }
        })
        .fail(function (resp) {
            console.log(resp.responseText);
        })
        .always(function () {
            console.log("complete");
        });
});
