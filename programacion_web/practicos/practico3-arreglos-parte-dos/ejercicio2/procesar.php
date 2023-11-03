<!DOCTYPE html>
<html>
<head>
    <title>Resultado del Juego</title>
    <link rel="stylesheet" type="text/css" href="css/styleProcesar.css">
</head>
<body>
    <div class="container">
        <h1>Resultado del Juego</h1>

        <div class="result">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['usuario'])) {
                    $usuario = $_POST['usuario'];
                } else {
                    echo "Debes seleccionar una opción.";
                    exit;
                }

                // Array de opciones para el juego
                $opciones = ["piedra", "papel", "tijera", "lagarto", "spock"];

                // Elige una opción aleatoria para el otro jugador
                $eleccion_aleatoria = $opciones[array_rand($opciones)];

                // Muestra las elecciones de ambos jugadores
                echo "<img src='imagenes/$usuario.png' alt='$usuario'>";
                echo "<img src='imagenes/$eleccion_aleatoria.png' alt='$eleccion_aleatoria'>";
            } else {
                echo "Acceso no válido.";
            }
            ?>
        </div>

        <div class="message">
            <?php
            if (isset($usuario)) {
                // Lógica para determinar el ganador según las reglas del juego
                $reglas = [
                    "tijera" => ["papel", "lagarto"],
                    "papel" => ["piedra", "spock"],
                    "piedra" => ["lagarto", "tijera"],
                    "lagarto" => ["Spock", "papel"],
                    "spock" => ["tijera", "piedra"],
                ];

                if ($usuario == $eleccion_aleatoria) {
                    echo "Empate!";
                } elseif (in_array($eleccion_aleatoria, $reglas[$usuario])) {
                    echo "¡Ganaste!";
                } else {
                    echo "¡Perdiste!";
                }
            }
            ?>
        </div>

        <form action="index.html">
            <input type="submit" value="Volver a Jugar">
        </form>
    </div>
</body>
</html>
