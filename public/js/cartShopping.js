var compras = 0;
$(".addToCart").click(() => {
    $(".addToCart").prop("disabled", true);
    $(".notificacionAddCart").css("top", "1%");
    setTimeout(() => {
        $(".notificacionAddCart").css("top", "-35%");
    }, 5000);
    $(".shoppingCartItem span").css("visibility", "visible");

    $(".shoppingCartItem span").text(compras += 1);
});

// btnEnviarCotizacion
$(".btnEnviarCotizacion").click(() => {

    if ($("input[name='correo']").val() != "" && $("input[name='nombre']").val() != "" && $("input[name='tel']").val() != "") {
        $(".btnEnviarCotizacion").prop("disabled", true);
        $(".notificacionAddCart").css("top", "1%");
        setTimeout(() => {
            $(".notificacionAddCart").css("top", "-35%");
        }, 10000);
        $(".groupCorreo p.small").css("color", "#707070");
        $(".groupCorreo input").css("border-color", "#ced4da");
        $(".groupNombre p.small").css("color", "#707070");
        $(".groupNombre input").css("border-color", "#ced4da");
        $(".groupTelefono p.small").css("color", "#707070");
        $(".groupTelefono input").css("border-color", "#ced4da");
    } else {
        if ($("input[name='correo']").val() == "" && $("input[name='nombre']").val() == "" && $("input[name='tel']").val() == "") {
            $(".groupCorreo p.small").css("color", "#dc3545");
            $(".groupCorreo input").css("border-color", "#dc3545");
            $(".groupNombre p.small").css("color", "#dc3545");
            $(".groupNombre input").css("border-color", "#dc3545");
            $(".groupTelefono p.small").css("color", "#dc3545");
            $(".groupTelefono input").css("border-color", "#dc3545");
        } else {
            if ($("input[name='correo']").val() == "") {
                $(".groupCorreo p.small").css("color", "#dc3545");
                $(".groupCorreo input").css("border-color", "#dc3545");
            } else if ($("input[name='nombre']").val() == "") {
                $(".groupNombre p.small").css("color", "#dc3545");
                $(".groupNombre input").css("border-color", "#dc3545");
            } else if ($("input[name='tel']").val() == "") {
                $(".groupTelefono p.small").css("color", "#dc3545");
                $(".groupTelefono input").css("border-color", "#dc3545");
            }

        }


    }


});


$("#galeriaProducto img").on("click", function() {
    $(".imagenGrandeDescripcion").attr("src", $(this).attr('src'));
    $(window).scrollTop(0);
});