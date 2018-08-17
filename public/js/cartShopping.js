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



$("#galeriaProducto img").on("click", function() {

    $(".imagenGrandeDescripcion").attr("src", $(this).attr('src'));
});