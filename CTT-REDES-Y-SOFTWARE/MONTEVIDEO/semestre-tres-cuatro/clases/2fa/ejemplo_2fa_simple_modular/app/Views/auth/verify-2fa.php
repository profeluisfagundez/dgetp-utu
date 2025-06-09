<?php if (isset($data['error'])): ?>
    <p class="error"><?= $data['error'] ?></p>
<?php endif; ?>

<h2>Verificación de Código</h2>
<p>Ingresa el código de 6 dígitos generado por Google Authenticator:</p>
<form method="post">
    <div class="form-group">
        <label for="code">Código de verificación:</label>
        <input type="text" id="code" name="code" required autocomplete="off" placeholder="123456">
    </div>
    <button type="submit" name="verify_code">Verificar</button>
</form>