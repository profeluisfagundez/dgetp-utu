<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar un retiro en el sistema</title>
    <link rel="stylesheet" href="/css/createStyle.css">
</head>

<body>
    <header>
        <h1>Cargar un retiro en el sistema</h1>
    </header>
    <form action="/retiros" method="post">
        <div>
            <label for="metodo_pago">Método de Pago</label>
            <select name="metodo_pago" id="metodo_pago" required>
                <option value="1" selected>Tarjeta de crédito</option>
                <option value="2">Cuenta de banco</option>
            </select>
        </div>
        <div>
            <label for="tipo">Tipo de retiro</label>
            <select name="tipo" id="tipo" required>
                <option value="1" selected>Retiro de un producto</option>
                <option value="2">Compra de un producto</option>
            </select>
        </div>
        <div>
            <label for="fecha_retiro">Fecha del retiro</label>
            <input type="date" name="fecha_retiro" id="fecha_retiro" required>
        </div>
        <div>
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad" id="cantidad" required>
        </div>
        <div>
            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion" id="descripcion" required>
        </div>
        <div>
            <!-- Nuestro RouterHandler espera que le indiquemos qué tipo de método
            va a usar, por eso creamos un input hidden con el valor POST -->
            <input type="hidden" name="_method" id="_method" value="POST">
            <input type="submit" value="Registrar">
        </div>
    </form>
    <form action="<?php echo "/"; ?>" method="post">
        <input type="submit" value="INICIO">
    </form>
</body>

</html>
