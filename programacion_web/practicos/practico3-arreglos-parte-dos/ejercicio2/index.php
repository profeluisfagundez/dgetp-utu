<!DOCTYPE html>
<html>
<head>
    <title>Lista de Frutas</title>
</head>
<body>
    <h1>Lista de Frutas</h1>
    <ul>
        <?php
        // Definir un arreglo indexado con nombres de frutas
        $frutas = array("Manzana", "Plátano", "Naranja", "Pera", "Uva");

        // Recorrer el arreglo y generar la lista
        foreach ($frutas as $fruta) {
            echo "<li>$fruta</li>";
        }
        ?>
    </ul>
</body>
</html>
