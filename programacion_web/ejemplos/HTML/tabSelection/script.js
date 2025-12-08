/*Este evento se dispara cuando el contenido HTML ha sido completamente cargado y analizado, 
 sin esperar hojas de estilo, imágenes y subtramas para finalizar la carga. */
document.addEventListener("DOMContentLoaded", function () {
  // Seleccionamos todas las pestañas y todas las tarjetas en la página utilizando querySelectorAll.
  const tabs = document.querySelectorAll('.tab');
  const cards = document.querySelectorAll('.card');
  // Utilizamos forEach para iterar sobre todas las pestañas.
  // El índice se pasa como segundo argumento en la función de retorno de forEach.
  tabs.forEach(function (tab, index) {
    // Añadimos un evento de clic a cada pestaña.
    // Cuando se hace clic en una pestaña, se llama a esta función.
    tab.addEventListener('click', function () {
      // Llamamos a la función changeTab pasando el índice de la pestaña como argumento.
      changeTab(index);
    });
  });
  // Definimos la función changeTab que toma el número de la pestaña como argumento.
  function changeTab(tabNumber) {
    // Utilizamos forEach para iterar sobre todas las tarjetas.
    cards.forEach(function (card) {
      // Quitamos la clase 'active' de todas las tarjetas para ocultarlas.
      card.classList.remove('active');
    });
    // Agregamos la clase 'active' solo a la tarjeta correspondiente al número de la pestaña seleccionada.
    // Esto hace que la tarjeta correspondiente se muestre.
    cards[tabNumber].classList.add('active');
  }
});