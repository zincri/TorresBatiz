var bn,bt,be,bm,bmod;

function validar(){
    
    
    
    /**Validacion nombre */
    document.getElementById('nombre').addEventListener('input', function() {
        campo = event.target;
        valido = document.getElementById('nombreOK');
            
        nombreRegex = /[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+/i;
        
        if (nombreRegex.test(campo.value) && campo.value.length < 50) {
          valido.innerText = "válido";
          bn=true;
        } else {
          valido.innerText = "incorrecto";
          bn=false;
        }
    });

    /**Validacion modelo */
    document.getElementById('modelo').addEventListener('input', function() {
        campo = event.target;
        valido = document.getElementById('modeloOK');
            
        nombreRegex = /[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+/i;
        
        if (nombreRegex.test(campo.value) && campo.value.length < 99) {
          valido.innerText = "válido";
          bmod=true;
        } else {
          valido.innerText = "incorrecto";
          bmod=false;
        }
    });

    /** Validacion mensaje */
    document.getElementById('mensaje').addEventListener('input', function() {
        campo = event.target;
        valido = document.getElementById('mensajeOK');
            
        mensajeRegex = /[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+/i;
        
        if (mensajeRegex.test(campo.value) && campo.value.length < 1499) {
          valido.innerText = "válido";
          bm=true;
        } else {
          valido.innerText = "incorrecto";
          bm=false;
        }
    });


    /**Validacion telefono */
    document.getElementById('telefono').addEventListener('input', function() {
        campo = event.target;
        valido = document.getElementById('telefonoOK');
            
        telefonoRegex = /^([0-9])*$/i;
        
        if (telefonoRegex.test(campo.value) && campo.value.length < 20) {
          valido.innerText = "válido";
          bt=true;
        } else {
          valido.innerText = "incorrecto";
          bt=false;
        }
    });
    
    /* Validacion email*/
    document.getElementById('email').addEventListener('input', function() {
        campo = event.target;
        valido = document.getElementById('emailOK');
            
        emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        
        if (emailRegex.test(campo.value) && campo.value.length < 49) {
          valido.innerText = "válido";
          be=true;
        } else {
          valido.innerText = "incorrecto";
          be=false;
        }
    });

    

}
validar();

/*****************************************/
function validarsend(){
    if(bn===true &&  bt ===true && be===true && bm===true && bmod===true){
        return true;

    }
    else{
        alert("La informacion no es valida");
        return false;
    }
}
/*************************************** */