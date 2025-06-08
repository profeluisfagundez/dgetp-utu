function getQueryParam(param) {
    let urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}

document.addEventListener('DOMContentLoaded', (event) => {
    let errorMessage = document.getElementById('error-message');
    if (getQueryParam('error') == 1) {
        errorMessage.textContent = 'Usuario o contraseña incorrectos.';
    } else if (getQueryParam('error') == 2) { 
        errorMessage.textContent = 'No se encuentra el rol seleccionado';
    }
});
