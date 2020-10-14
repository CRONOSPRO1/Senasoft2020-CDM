
// Creamos la función para el uso de los Tooltpis (Mensajes flotantes)
$(function() {
    $('[data-toggle="tooltip"]').tooltip()
});

// Definimos el uso del Framework Scroll Reveal 
window.sr = ScrollReveal();

// Definimos los paramtros que enviara a la clase para dar la interactividad
sr.reveal('.navbar', {
    duration: 800,
    origin: 'bottom',
    distance: '-100px'
});
sr.reveal('.container', {
    duration: 2000,
    origin: 'right',

    distance: '-800px'
});