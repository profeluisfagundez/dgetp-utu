<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar un ingreso en el sistema</title>
    <link rel="stylesheet" href="/css/createStyle.css">
</head>

<body>
    <header>
        <h1>Cargar un ingreso en el sistema</h1>
    </header>
    <form action="/ingresos" method="post">
        <div>
            <label for="metodo_pago">Método de Pago</label>
            <select name="metodo_pago" id="metodo_pago" required>
                <option value="1" selected>Tarjeta de crédito</option>
                <option value="2">Cuenta de banco</option>
            </select>
        </div>
        <div>
            <label for="tipo">Tipo de pago</label>
            <select name="tipo" id="tipo" required>
                <option value="1" selected>Salario</option>
                <option value="2">Devolución</option>
            </select>
        </div>
        <div>
            <label for="fecha_ingreso">Fecha de Ingreso</label>
            <input type="date" name="fecha_ingreso" id="fecha_ingreso" required>
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
