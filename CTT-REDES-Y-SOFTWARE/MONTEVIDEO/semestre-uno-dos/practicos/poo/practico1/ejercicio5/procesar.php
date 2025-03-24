<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar el dato</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    require_once("Biblioteca.php");
    session_start();
    if (!isset($_SESSION['biblioteca'])) {
        $_SESSION['biblioteca'] = new Biblioteca();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $precio = $_POST['precio'];

        $libro = new Libro($titulo, $autor, $precio);
        $_SESSION['biblioteca']->agregarLibro($libro);

        echo "<p>Se agrego un nuevo libro en el sistema</p>";

        echo '<a href="index.html">Volver</a>';
    }
    ?>
</body>

</html>