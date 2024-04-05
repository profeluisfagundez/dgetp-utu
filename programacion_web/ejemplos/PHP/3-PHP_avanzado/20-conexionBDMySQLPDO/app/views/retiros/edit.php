<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Ingreso</title>
    <link rel="stylesheet" href="/css/editStyle.css">
</head>

<body>
    <header>
        <h1>Editar Ingreso</h1>
        <?php var_dump($resultados); ?>
    </header>

    <!--  -->
    <form action="/retiros/<?php echo $resultados['id']; ?>" method="post">
        <div>
            <label for="metodo_pago">Método de Pago</label>
            <select name="metodo_pago" id="metodo_pago">
                <option value="1" <?php echo ($resultados['metodo_pago'] == 1) ? 'selected' : ''; ?>>Tarjeta de crédito</option>
                <option value="2" <?php echo ($resultados['metodo_pago'] == 2) ? 'selected' : ''; ?>>Cuenta de banco</option>
            </select>
        </div>
        <div>
            <label for="tipo">Tipo de pago</label>
            <select name="tipo" id="tipo">
                <option value="1" <?php echo ($resultados['tipo'] == 1) ? 'selected' : ''; ?>>Retiro</option>
                <option value="2" <?php echo ($resultados['tipo'] == 2) ? 'selected' : ''; ?>>Compra</option>
            </select>
        </div>
        <div>
            <label for="fecha_retiro">Fecha de Ingreso</label>
            <input type="date" name="fecha_retiro" id="fecha_retiro" value="<?php echo (new DateTime($resultados['fecha_retiro']))->format('Y-m-d'); ?>">
        </div>
        <div>
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad" id="cantidad" value="<?php echo $resultados['cantidad']; ?>">
        </div>
        <div>
            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion" id="descripcion" value="<?php echo $resultados['descripcion']; ?>">
        </div>
        <div>
            <input type="hidden" name="id" id="id" value="<?php echo $resultados['id']; ?>">
            <!-- Enviar el método PUT a través de un campo oculto para el Handler Controller -->
            <input type="hidden" name="_method" id="_method" value="PUT">
            <input type="submit" value="Actualizar">
        </div>
    </form>

    <form action="/retiros" method="post">
        <input type="submit" value="Volver a la Lista de retiros">
    </form>
</body>

</html>
