<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Pedido</title>
    <link rel="stylesheet" href="styles.css"> <!-- Opcional: vincula tu archivo CSS -->
</head>
<body>
    <h1>Crear Pedido</h1>
    <form action="procesarPedido.php" method="POST">
        <div id="productos">
            <div class="producto">
                <label for="nombre1">Nombre del Producto:</label>
                <input type="text" name="nombre[]" id="nombre1" required>

                <label for="precio1">Precio:</label>
                <input type="number" name="precio[]" id="precio1" step="0.01" required>

                <label for="cantidad1">Cantidad:</label>
                <input type="number" name="cantidad[]" id="cantidad1" required>
            </div>
        </div>
        <button type="button" onclick="agregarProducto()">Agregar Otro Producto</button>
        <button type="submit">Calcular Total</button>
    </form>

    <script>
        let contador = 1;
        function agregarProducto() {
            contador++;
            const div = document.createElement('div');
            div.classList.add('producto');
            div.innerHTML = `
                <label for="nombre${contador}">Nombre del Producto:</label>
                <input type="text" name="nombre[]" id="nombre${contador}" required>
                <label for="precio${contador}">Precio:</label>
                <input type="number" name="precio[]" id="precio${contador}" step="0.01" required>
                <label for="cantidad${contador}">Cantidad:</label>
                <input type="number" name="cantidad[]" id="cantidad${contador}" required>
            `;
            document.getElementById('productos').appendChild(div);
        }
    </script>
</body>
</html>
