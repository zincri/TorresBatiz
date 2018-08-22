var bn,bt,be,bm;

function validar(){
    //var nombre, telefono, email,mensaje,expresion;
    
    
    
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


    /** Validacion mensaje */
    document.getElementById('mensaje').addEventListener('input', function() {
        campo = event.target;
        valido = document.getElementById('mensajeOK');
            
        mensajeRegex = /[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+/i;
        
        if (mensajeRegex.test(campo.value) && campo.value.length < 1500) {
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
        
        if (emailRegex.test(campo.value) && campo.value.length < 50) {
          valido.innerText = "válido";
          be=true;
        } else {
          valido.innerText = "incorrecto";
          be=false;
        }
    });

    /* validar VOLUMEN*/
    document.getElementById('volumen').addEventListener('input', function() {
      campo = event.target;
      valido = document.getElementById('volumenOK');
          
      volumenRegex = /^\d*$/i;
      
      if (volumenRegex.test(campo.value) && campo.value.length>0 && campo.value.length < 11 && campo.value != "") {
        valido.innerText = "válido";
        bv=true;
      } else {
        valido.innerText = "incorrecto";
        bv=false;
      }
  });

}
validar();

/*****************************************/
function validarsend(){
    if(bn===true &&  bt ===true && be===true && bm===true && bv===true){
        return true;

    }
    else{
        alert("La informacion no es valida");
        return false;
    }
}
/*************************************** */