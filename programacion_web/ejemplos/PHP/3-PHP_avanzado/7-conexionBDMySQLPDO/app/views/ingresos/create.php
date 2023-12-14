<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar un ingreso en el sistema</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        select,
        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <header>
        <h1>Cargar un ingreso en el sistema</h1>
    </header>
    <form action="/ingresos" method="post">
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
            <!--Nuestro RouterHandler espera que le indiquemos que tipo de método
            va a usar, por eso creamos un input hidden con el valor POST-->
            <input type="hidden" name="method" id="method" value="POST">
            <input type="submit" value="Registrar">
        </div>
    </form>
</body>

</html>