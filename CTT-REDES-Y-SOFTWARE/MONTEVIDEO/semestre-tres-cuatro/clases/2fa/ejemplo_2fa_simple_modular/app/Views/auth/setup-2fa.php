<?php
// Verifica si la variable $data está definida
$data = $data ?? [];
?>

<h2>Configuración Inicial</h2>
<p>Escanea el siguiente código QR con la aplicación Google Authenticator:</p>
<div class="qr-code">
    <?= $data['qrCode'] ?? '' ?>
</div>

<p>O ingresa manualmente esta clave secreta: <strong><?= $data['secretKey'] ?? '' ?></strong></p>

<h3>Verificar Configuración</h3>
<p>Ingresa el código de 6 dígitos generado por Google Authenticator para verificar:</p>
<form method="post">
    <div class="form-group">
        <label for="code">Código de verificación:</label>
        <input type="text" id="code" name="code" required autocomplete="off" placeholder="123456">
    </div>
    <button type="submit" name="verify_code">Verificar</button>
</form>