$("#email").change(function () {
    $(".alerta").remove()

    let email = $(this).val();

    console.log("email", email);

    let datos = new FormData();
    datos.append("validarEmail", email);

    console.log(datos);

    $.ajax({
        url: "ajax/formularios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (respuesta) {
            if (respuesta) {

                $("#email").val("");

                $("#email").parent().after(

                    ` <div >

                        <strong>
                            ERROR:
                        </strong>
                        El correo ya existe
                    </div>`

                );

            }
        },
    });

});