$(function() {
    $('[data-toggle="tooltip"]').tooltip()
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