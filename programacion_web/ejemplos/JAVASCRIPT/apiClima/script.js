// Declaración de una clase llamada WeatherApp
class WeatherApp {
    constructor(apiKey) {
      // Constructor de la clase WeatherApp que acepta una API key como parámetro
      this.apiKey = apiKey; // Almacena la API key en la instancia
      this.apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=Montevideo,uy&appid=${apiKey}&units=metric`; // Construye la URL de la API
      this.weatherDiv = document.getElementById('weather'); // Obtiene el elemento HTML con el id "weather"
    }
  
    // Método para obtener los datos del clima
    fetchWeatherData() {
      fetch(this.apiUrl) // Realiza una solicitud fetch a la API con la URL construida
        .then(response => response.json()) // Convierte la respuesta en formato JSON
        .then(data => {
          this.displayWeather(data); // Llama al método displayWeather con los datos obtenidos
        })
        .catch(error => {
          console.error('Error fetching weather data:', error); // Manejo de errores en caso de problemas con la solicitud
        });
    }
  
    // Método para mostrar los datos del clima en la página
    displayWeather(data) {
      const cityName = data.name; // Obtiene el nombre de la ciudad
      const temperature = data.main.temp; // Obtiene la temperatura
      const weatherDescription = data.weather[0].description; // Obtiene la descripción del clima
  
      // Construye una cadena de texto con los datos y HTML
      const weatherInfo = `
        <h2>${cityName}</h2>
        <p>Temperature: ${temperature}°C</p>
        <p>Weather: ${weatherDescription}</p>
      `;
  
      this.weatherDiv.innerHTML = weatherInfo; // Inserta la cadena en el elemento HTML "weather"
    }
  }
  
  // Creación de una instancia de la clase WeatherApp
  const apiKey = '42b6b46efbef3e64a13faa92aa1fa515'; // API key de OpenWeatherMap (¡reemplázala con tu propia clave!)
  const weatherApp = new WeatherApp(apiKey);
  
  // Evento que se activa cuando la página carga completamente
  window.addEventListener('load', () => {
    weatherApp.fetchWeatherData(); // Llama al método fetchWeatherData de la instancia para obtener los datos del clima
  });