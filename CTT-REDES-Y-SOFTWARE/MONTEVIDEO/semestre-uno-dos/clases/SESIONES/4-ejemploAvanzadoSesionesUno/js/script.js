// Este código Javascript lo verán más a futuro, en este momento no le presten atención
// Función para obtener el valor de un parámetro de la URL
function getQueryParam(param) {
    let urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}

// Mostrar mensaje de error si el parámetro 'error' está presente
document.addEventListener('DOMContentLoaded', (event) => {
    let errorMessage = document.getElementById('error-message');
    if (getQueryParam('error') == 1) {
        errorMessage.textContent = 'Usuario o contraseña incorrectos.';
    }
});