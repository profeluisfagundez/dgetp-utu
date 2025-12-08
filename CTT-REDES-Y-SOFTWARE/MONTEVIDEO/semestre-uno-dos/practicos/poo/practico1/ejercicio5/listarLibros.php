<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Libros</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
    require_once("Biblioteca.php");
    session_start();

    if (isset($_SESSION['biblioteca'])) {
        echo $_SESSION['biblioteca']->listarLibros();
        echo '<a href="index.html">Volver</a>';
    } else {
        echo "<p>Aún no hay libros en la aplicación</p>";
        echo '<a href="index.html">Volver</a>';
    }
    ?>
</body>

</html>