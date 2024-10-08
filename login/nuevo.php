<script>
$(document).ready(function() {
    $('#btn_registrar_serv').click(function() {
        var formData = new FormData($('#form_reg_users')[0]);

        $.ajax({
            url: 'registrar_servicios.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // Aquí puedes manejar la respuesta del servidor
                console.log(response);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Aquí puedes manejar los errores
                console.log(textStatus, errorThrown);
            }
        });
    });
});
</script>