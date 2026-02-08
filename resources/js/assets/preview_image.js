// Función para previsualizar una imagen seleccionada en un input file
window.preview_image = function(event, querySelector) {

    // Recuperamos el input que desencadenó la acción
    let input = event.target;

    // Recuperamos la etiqueta <img> donde cargaremos la imagen
    let imgPreview = document.querySelector(querySelector);

    // Verificamos si existe una imagen seleccionada
    if (!input.files.length) return;

    // Recuperamos el archivo subido
    let file = input.files[0];

    // Creamos la URL temporal para mostrar la imagen
    let objectURL = URL.createObjectURL(file);

    // Asignamos la URL al src de la etiqueta <img>
    imgPreview.src = objectURL;
};
