var bn, bt, be, bm, bmod;

function validar() {



    /**Validacion nombre */
    document.getElementById('nombre').addEventListener('input', function() {
        campo = event.target;
        valido = document.getElementById('nombreOK');

        nombreRegex = /[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+/i;

        if (nombreRegex.test(campo.value) && campo.value.length < 50) {
            $(".nombreGroup").addClass("inputValido");
            $(".nombreGroup").removeClass("inputInvalido");
            bn = true;
        } else {
            $(".nombreGroup").addClass("inputInvalido");
            $(".nombreGroup").removeClass("inputValido");
            bn = false;
        }
    });

    /**Validacion modelo */
    document.getElementById('modelo').addEventListener('input', function() {
        campo = event.target;
        valido = document.getElementById('modeloOK');

        nombreRegex = /[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+/i;

        if (nombreRegex.test(campo.value) && campo.value.length < 99) {
            $(".modeloGroup").addClass("inputValido");
            $(".modeloGroup").removeClass("inputInvalido");
            bmod = true;
        } else {
            $(".modeloGroup").removeClass("inputValido");
            $(".modeloGroup").addClass("inputInvalido");
            bmod = false;
        }
    });

    /** Validacion mensaje */
    document.getElementById('mensaje').addEventListener('input', function() {
        campo = event.target;
        valido = document.getElementById('mensajeOK');

        mensajeRegex = /[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+/i;

        if (mensajeRegex.test(campo.value) && campo.value.length < 1499) {
            $(".mensajeGroup").addClass("inputValido");
            $(".mensajeGroup").removeClass("inputInvalido");
            bm = true;
        } else {
            $(".mensajeGroup").removeClass("inputValido");
            $(".mensajeGroup").addClass("inputInvalido");
            bm = false;
        }
    });


    /**Validacion telefono */
    document.getElementById('telefono').addEventListener('input', function() {
        campo = event.target;
        valido = document.getElementById('telefonoOK');

        telefonoRegex = /^([0-9])*$/i;

        if (telefonoRegex.test(campo.value) && campo.value.length < 20 && campo.value.length > 7) {
            $(".telefonoGroup").addClass("inputValido");
            $(".telefonoGroup").removeClass("inputInvalido");
            bt = true;
        } else {
            $(".telefonoGroup").removeClass("inputValido");
            $(".telefonoGroup").addClass("inputInvalido");
            bt = false;
        }
    });

    /* Validacion email*/
    document.getElementById('email').addEventListener('input', function() {
        campo = event.target;
        valido = document.getElementById('emailOK');

        emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

        if (emailRegex.test(campo.value) && campo.value.length < 49) {
            $(".correoGroup").addClass("inputValido");
            $(".correoGroup").removeClass("inputInvalido");
            be = true;
        } else {
            $(".correoGroup").removeClass("inputValido");
            $(".correoGroup").addClass("inputInvalido");
            be = false;
        }
    });



}
validar();

/*****************************************/
function validarsend() {
    if (bn === true && bt === true && be === true && bm === true && bmod === true) {
        return true;

    } else {
        alert("La informacion no es valida");
        return false;
    }
}
/*************************************** */