
// Creamos la función para el uso de los Tooltpis (Mensajes flotantes)
$(document).ready(function(){
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
});

//Usamos funciones especificas de jQuery para remover ciertos estilos y atributos
//cuando el documento se cargue y pasen 500 ms para fijar estilos y la interfaz se visualice correctamente
$(function () {
    var contenedor = $("div").hasClass("container");
    if (contenedor) {
        setTimeout(function(){
            $('#barra').removeAttr("style");
        },500);

        setTimeout(function(){
            $( ".container" ).css( "transition", "none" );
        },500);
    }
});

//Creamos la función click para abirar la venta de notificaciones y aplicamos estilos
$("#notificacionesclick").click(function() {
    var notiabiertas = document.getElementById("ventanaNotificaciones");
    if (notiabiertas.style.display != 'none') {
        notiabiertas.style.display = 'none';
        document.getElementById("notificacionesclick").style.backgroundColor = 'transparent'
        document.getElementById("notificacionesclick").style.fontSize = '15px';
        document.getElementById("notificacionesclick").style.padding = '0'
        $( "#span-margen" ).addClass("mr-4")

    }else {
        notiabiertas.style.display = 'block'
        document.getElementById("notificacionesclick").style.backgroundColor = '#ececec'
        document.getElementById("notificacionesclick").style.padding = '5px'
        $( "#span-margen" ).removeClass( "mr-4" ).addClass("mr-3")
    }
});




$(document).ready(function() {
    $("#busqueda").on("keyup", function() {
        var value = $(this).val().toLowerCase();

        $("#registros tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)

            if (($(this).text().toLowerCase().indexOf(value) > -1)) {
                document.getElementById("tabla").style.display = "block";
                document.getElementById("alerta-no-results").style.display = "none";
            } else {
                document.getElementById("tabla").style.display = "none";
                document.getElementById("alerta-no-results").style.display = "block";
            }
        });

    });
});