<?php
require_once __DIR__ . '/vendor/autoload.php';

use PragmaRX\Google2FA\Google2FA;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;

session_start();

$google2fa = new Google2FA();

// Configuración básica para la app que vamos a crear 
$appName = 'Mi App 2FA';
$userEmail = 'usuario@ejemplo.com';
$secretKey = $_SESSION['secret_key'] ?? $google2fa->generateSecretKey();

// Almacenamos la clave secreta en sesión para validación posterior
$_SESSION['secret_key'] = $secretKey;
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2FA con Google Authenticator</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Autenticación en Dos Pasos usando 2FA de Google</h1>
        <?php
        // Procesamos el formulario de verificación para cheaquear el código ingresado por el usuario
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verify_code'])) {
            $userCode = $_POST['code'];
            $valid = $google2fa->verifyKey($secretKey, $userCode);
            // Verificamos si el código ingresado es válido
            if ($valid) {
                echo '<p class="success">¡Código válido! Autenticación exitosa.</p>';
                // Aquí iría la lógica para permitir el acceso al usuario
                // En este caso, simplemente lo dejamos acá
            } else {
                // Dos opciones: mostrar un mensaje de error o redirigir a una página de error
                echo '<p class="error">Código inválido. Por favor, inténtalo de nuevo.</p>';
            }
        }

        // Mostrar el formulario de configuración inicial o verificación
        if (!isset($_SESSION['2fa_configured'])) {
            // Generar URL para el QR Code
            $qrCodeUrl = $google2fa->getQRCodeUrl(
                $appName,
                $userEmail,
                $secretKey
            );

            // Generar el QR Code con SVG
            $renderer = new ImageRenderer(
                new RendererStyle(300),
                new SvgImageBackEnd()
            );
            $writer = new Writer($renderer);
            $qrCodeImage = $writer->writeString($qrCodeUrl);
        ?>

            <h2>Configuración Inicial</h2>
            <p>Escanea el siguiente código QR con la aplicación Google Authenticator:</p>
            <div class="qr-code">
                <?php echo $qrCodeImage; ?>
            </div>

            <p>O ingresa manualmente esta clave secreta: <strong><?php echo chunk_split($secretKey, 4, ' '); ?></strong></p>

            <h3>Verificar Configuración</h3>
            <p>Ingresa el código de 6 dígitos generado por Google Authenticator para verificar:</p>
            <form method="post">
                <div class="form-group">
                    <label for="code">Código de verificación:</label>
                    <input type="text" id="code" name="code" required autocomplete="off" placeholder="123456">
                </div>
                <button type="submit" name="verify_code">Verificar</button>
            </form>
        <?php
        } else {
        ?>
            <h2>Verificación de Código</h2>
            <p>Ingresa el código de 6 dígitos generado por Google Authenticator:</p>
            <form method="post">
                <div class="form-group">
                    <label for="code">Código de verificación:</label>
                    <input type="text" id="code" name="code" required autocomplete="off" placeholder="123456">
                </div>
                <button type="submit" name="verify_code">Verificar</button>
            </form>
        <?php
        }

        // Marcar como configurado después de la primera verificación exitosa
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verify_code']) && isset($valid) && $valid) {
            $_SESSION['2fa_configured'] = true;
            // Recargar la página para mostrar el formulario de verificación simple
            header("Refresh:0");
        }
        ?>
    </div>
</body>

</html>