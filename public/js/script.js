 document.getElementById("btn__registrarse").addEventListener("click", register);
 document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
 window.addEventListener("resize", anchoPagina);
 // declaracion de variables:
 var contenedor_login_register= document.querySelector(".contenedor__login-register");
 var formulario_login= document.querySelector(".formulario__login");
 var formulario_register= document.querySelector(".formulario__register");
 var caja_trasera_login= document.querySelector(".caja__trasera-login");
 var caja_trasera_register= document.querySelector(".caja__trasera-register");
 
 function anchoPagina(){
    /* Si la anchura de la ventana es superior a 850px, entonces se muestra el formulario de registro, el contenedor se
    se desplaza a la izquierda 410px, el formulario de registro se oculta, la opacidad del fondo del registro se establece
    a 0, y la opacidad del fondo de inicio de sesión se establece en 1.*/
     if (window.innerWidth >850){
         caja_trasera_login.style.display= "block";
         caja_trasera_register.style.display= "block";
        
     }else {
 
 
         caja_trasera_register.style.display= "block";
         caja_trasera_register.style.opacity= "1";
         caja_trasera_login.style.display= "none";
         formulario_login.style.display= "block";
         formulario_register.style.display = "none";
         contenedor_login_register.style.left ="0px";
 
     }
 }
 anchoPagina();
 
 function iniciarSesion(){
    /*Si la anchura de la ventana es inferior a 850px, se muestra el formulario de registro, el contenedor se desplaza
    a la izquierda en 0px, el formulario de registro se oculta, el fondo de registro se oculta, el fondo de inicio de sesión
    se muestra el fondo del registro, y la opacidad del fondo del registro se establece en 1.*/
 
     if(window.innerWidth >850){
     
     formulario_register.style.display = "none";
     contenedor_login_register.style.left= "10px";
     formulario_login.style.display = "block";
     caja_trasera_register.style.opacity = "1";
     caja_trasera_login.style.opacity = "0";
 } else {
 
      formulario_register.style.display = "none";
     contenedor_login_register.style.left= "0";
     formulario_login.style.display = "block";
     caja_trasera_register.style.display = "block"
     caja_trasera_login.style.display= "none";
 }
 }
 
 
 
    function register(){
 
     if (window.innerWidth > 850){
 
     formulario_register.style.display = "block";
     contenedor_login_register.style.left= "410px";
     formulario_login.style.display = "none";
     caja_trasera_register.style.opacity = "0";
     caja_trasera_login.style.opacity = "1";
     } else{
 
         formulario_register.style.display = "block";
         contenedor_login_register.style.left= "0px";
         formulario_login.style.display = "none";
         caja_trasera_register.style.display = "none";
         caja_trasera_login.style.display= "block";
         caja_trasera_login.style.opacity = "1";
 
     }
 }