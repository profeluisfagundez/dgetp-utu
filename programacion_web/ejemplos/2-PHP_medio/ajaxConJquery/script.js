// Definición de la clase WeatherApp
class WeatherApp {
    constructor(apiKey, ciudad) {
      this.apiKey = apiKey;
      this.ciudad = ciudad;
      this.apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${ciudad}&appid=${apiKey}&units=metric`;
      this.climaElement = $("#clima");
    }
  
    obtenerPronostico() {
      $.ajax({
        url: this.apiUrl,
        type: "GET",
        dataType: "json",
        success: (data) => {
          const temperatura = data.main.temp;
          const descripcion = data.weather[0].description;
          this.climaElement.html(`La temperatura es ${temperatura}°C y el cielo está ${descripcion}.`);
        },
        error: (xhr, status, error) => {
          console.log("Error en la solicitud AJAX: " + error);weather
        }
      });
    }
    weather
    iniciar() {weather
      this.obtenweathererPronostico();
      setInterval(() => this.obtenerPronostico(), 10000);
    }
  }
  
  // Crear una instancia de WeatherApp con tu clave de API y la ciudad
  const weatherApp = new WeatherApp("42b6b46efbef3e64a13faa92aa1fa515", "Montevideo");
  
  // Iniciar la aplicación
  weatherApp.iniciar();
  