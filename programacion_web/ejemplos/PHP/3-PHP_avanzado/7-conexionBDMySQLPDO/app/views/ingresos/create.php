<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar un ingreso en el sistema</title>
    <style>
        * {
            margin: auto;
            padding: 0px;
        }
        h1 {
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Cargar un ingreso en el sistema</h1>
    </header>
    <form action="/ingresos" method="get">
        <div>
            <label for="metodo_pago">Método de Pago</label>
            <select name="metodo_pago" id="metodo_pago">
                <option value="1" selected>Tarjeta de crédito</option>
                <option value="2">Cuenta de banco</option>
            </select>
        </div>
        <div>
            <label for="tipo">Tipo de pago</label>
            <select name="tipo" id="tipo">
                <option value="1" selected>Salario</option>
                <option value="2">Devolución</option>
            </select>
        </div>
        <div>
            <label for="fecha_ingreso">Fecha de Ingreso</label>
            <input type="date" name="fecha_ingreso" id="fecha_ingreso">
        </div>
        <div>
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad" id="cantidad">
        </div>
        <div>
            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion" id="descripcion">
        </div>
        <div>
            <input type="submit" value="Registrar">
        </div>
    </form>
</body>

</html>