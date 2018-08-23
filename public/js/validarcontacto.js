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
    document.getElementById('asunto').addEventListener('input', function() {
        campo = event.target;
        valido = document.getElementById('asuntoOK');
            
        mensajeRegex = /[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+/i;
        
        if (mensajeRegex.test(campo.value) && campo.value.length < 40) {
          valido.innerText = "válido";
          bm=true;
        } else {
          valido.innerText = "incorrecto";
          bm=false;
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
/*****************************************/
// var bn,bt,be,bm;
// var formvalid =true;

// document.getElementById('nombre').addEventListener('input', function() {
//     campo = event.target;
//     valido = document.getElementById('nombre');
    
//     nombreRegex = /[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+/i;
    
//     if (nombreRegex.test(campo.value) && campo.value.length < 50) {
//       valido.innerText = "válido";
//       bn=true;
//     } else {
//       valido.innerText = "incorrecto";
//       bn=false;
//     }
// });


// $('#enviar').click(function () {
    
//     formvalid =true;
   
    

//     ValidarCamposVacios($("#nombre").val());
//     ValidarCamposVacios($("#email").val());
//     ValidarCamposVacios($("#asunto").val());
//     ValidarCamposVacios($("#telefono").val());
//     ValidarCamposVacios($("#mensaje").val());

//     if(formvalid){
//         console.log("Formulario Valido");
//     }else{
//         console.log("Formulario incorrecto");
//     }
// })

// // Solo Letras y números
// // $("#nombre").keypress(function(e){

// //     var charCode = (e.charCode) ? e.charCode : ((e.keyCode) ? e.keyCode :
// //         ((e.which) ? e.which : 0));
// //     if (charCode > 32 && (charCode < 65 || charCode > 90) &&
// //     (charCode < 97 || charCode > 122)) {
// //       e.preventDefault();
// //        return false;
// //     }
// //   });

//   $("#asunto").keypress(function(e){

//     var charCode = (e.charCode) ? e.charCode : ((e.keyCode) ? e.keyCode :
//         ((e.which) ? e.which : 0));
        
//     if (charCode > 32 && (charCode < 65 || charCode > 90) &&
//     (charCode < 97 || charCode > 122)) {
//       e.preventDefault();
//        return false;
//     }
//   });

//   $("#telefono").keypress(function(e){

//     var charCode = (e.charCode) ? e.charCode : ((e.keyCode) ? e.keyCode :
//         ((e.which) ? e.which : 0));
//     if (charCode < 48 || charCode > 57 ) 
//  {
//       e.preventDefault();
//        return false;
//     }
//   });



//   function ValidarCamposVacios(Valor){

//     if (Valor == null || Valor.length == 0 || /^\s+$/.test(Valor)) {
//         formvalid =false;
//     }
// }