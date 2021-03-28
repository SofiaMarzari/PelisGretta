"Use strict";
document.addEventListener('DOMContentLoaded', function() {
    $('#liGeneros').children().hide();
    $('#section-agregarGenero').hide();
    $('#section-agregarPelicula').hide();
    setInterval('galeria()', 4000);
});

let contador = 1;

/*NAVEGACION*/
$('#navUlPrincipal').children().hover(function() {
    $(this).toggleClass('sobrelosli');

});
$('#is-ulGeneros').children().hover(function() {
    $(this).toggleClass('sobrelosli');

});
$('#liGeneros').hover(function() {
    $('#liGeneros').children().toggle();
});

/*GALERIA DE IMAGENES DE INICIO*/
function galeria() {
    contador = contador + 2;
    if ((contador >= 1) && (contador <= 6)) {
        let img1 = document.getElementById('imgGaleriaIzq');
        img1.src = "css/img/galeria" + contador + ".jpg";
        let img2 = document.getElementById('imgGaleriaDer');
        img2.src = "css/img/galeria" + (contador + 1) + ".jpg";
    } else {
        contador = 1;
        let img1 = document.getElementById('imgGaleriaIzq');
        img1.src = "css/img/galeria" + contador + ".jpg";
        let img2 = document.getElementById('imgGaleriaDer');
        img2.src = "css/img/galeria" + (contador + 1) + ".jpg";
    }
}

let btnAgregar = document.getElementById('btn-agregar');
btnAgregar.addEventListener('click', mostrarAgregar);

function mostrarAgregar() {
    let mostrar = $('#select').val();
    if (mostrar == 'Genero') {
        $('#section-agregarPelicula').hide();
        $('#section-agregarGenero').show();
    } else if (mostrar == 'Pelicula') {
        $('#section-agregarGenero').hide();
        $('#section-agregarPelicula').show();
    }
}