$(document).ready(function(){ 
   $("#btn_inicial").click(function(){
       //tipos de mensajes succes, info, warning, error
       //titulo y mensaje de texto
       toastr["success"]("Tipo de declaración inicial", "Opción seleccionada:")      
   });
   
   toastr.options = { 
       //primeras opciones
       "closeButton": true, //boton cerrar
       "debug": false,
       "newestOnTop": false, //notificaciones mas nuevas van en la parte superior
       "progressBar": true, //barra de progreso hasta que se oculta la notificacion
       "preventDuplicates": false, //para prevenir mensajes duplicados
       
       "onclick": null,
       
       //Posición de la notificación
       //toast-bottom-left, toast-bottom-right, toast-bottom-left, toast-top-full-width, toast-top-center
       "positionClass": "toast-top-center",
               
       "showDuration": "100",
       "hideDuration": "1000",
       "timeOut": "3000",
       "extendedTimeOut": "1000",
       "showEasing": "swing",
       "hideEasing": "linear",
       "showMethod": "fadeIn",
       "hideMethod": "fadeOut",
       "tapToDismiss": false
   };
});	    

$(document).ready(function(){ 
   $("#btn_modificacion").click(function(){
       //tipos de mensajes succes, info, warning, error
       //titulo y mensaje de texto
       toastr["success"]("Tipo de declaración Modificación", "Opción seleccionada:")      
   });
   
   toastr.options = { 
       //primeras opciones
       "closeButton": true, //boton cerrar
       "debug": false,
       "newestOnTop": false, //notificaciones mas nuevas van en la parte superior
       "progressBar": true, //barra de progreso hasta que se oculta la notificacion
       "preventDuplicates": false, //para prevenir mensajes duplicados
       
       "onclick": null,
       
       //Posición de la notificación
       //toast-bottom-left, toast-bottom-right, toast-bottom-left, toast-top-full-width, toast-top-center
       "positionClass": "toast-top-center",
               
       "showDuration": "10",
       "hideDuration": "1000",
       "timeOut": "3000",
       "extendedTimeOut": "1000",
       "showEasing": "swing",
       "hideEasing": "linear",
       "showMethod": "fadeIn",
       "hideMethod": "fadeOut",
       "tapToDismiss": false
   };
});	  

$(document).ready(function(){ 
   $("#btn_conclusion").click(function(){
       //tipos de mensajes succes, info, warning, error
       //titulo y mensaje de texto
       toastr["success"]("Tipo de declaración Conclusión", "Opción seleccionada:")      
   });
   
   toastr.options = { 
       //primeras opciones
       "closeButton": true, //boton cerrar
       "debug": false,
       "newestOnTop": false, //notificaciones mas nuevas van en la parte superior
       "progressBar": true, //barra de progreso hasta que se oculta la notificacion
       "preventDuplicates": false, //para prevenir mensajes duplicados
       
       "onclick": null,
       
       //Posición de la notificación
       //toast-bottom-left, toast-bottom-right, toast-bottom-left, toast-top-full-width, toast-top-center
       "positionClass": "toast-top-center",
               
       "showDuration": "100",
       "hideDuration": "1000",
       "timeOut": "3000",
       "extendedTimeOut": "1000",
       "showEasing": "swing",
       "hideEasing": "linear",
       "showMethod": "fadeIn",
       "hideMethod": "fadeOut",
       "tapToDismiss": false
   };
});	  