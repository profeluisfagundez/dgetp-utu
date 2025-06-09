<?php

namespace App\Controllers;
require_once '../config/config.php';
use App\Models\TwoFAModel;

class AuthController
{
    private $twoFAModel;

    public function __construct()
    {
        $this->twoFAModel = new TwoFAModel();
    }

    public function handle2FA()
    {
        $secretKey = $_SESSION['secret_key'] ?? $this->twoFAModel->generateSecretKey();
        $_SESSION['secret_key'] = $secretKey;

        $data = []; // Inicializar el array de datos

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verify_code'])) {
            $result = $this->verifyCode($secretKey);
            if (isset($result['view'])) {
                return $result; // Retornar la vista y datos
            }
        }

        if (!isset($_SESSION['2fa_configured'])) {
            $data['qrCode'] = $this->twoFAModel->generateQRCode(APP_NAME, USER_EMAIL, $secretKey);
            $data['secretKey'] = $this->twoFAModel->formatSecretKey($secretKey);
            return [
                'view' => 'auth/setup-2fa',
                'data' => $data
            ];
        }

        return [
            'view' => 'auth/verify-2fa',
            'data' => $data
        ];
    }

    private function verifyCode($secretKey)
    {
        $valid = $this->twoFAModel->verifyCode($secretKey, $_POST['code']);

        if ($valid) {
            $_SESSION['2fa_configured'] = true;
            header("Refresh:0");
            exit;
        }

        return [
            'view' => 'auth/verify-2fa',
            'data' => [
                'error' => 'Código inválido. Por favor, inténtalo de nuevo.'
            ]
        ];
    }

    private function showSetup2FA($secretKey)
    {
        return [
            'view' => 'auth/setup-2fa',
            'data' => [
                'qrCode' => $this->twoFAModel->generateQRCode(APP_NAME, USER_EMAIL, $secretKey),
                'secretKey' => $this->twoFAModel->formatSecretKey($secretKey)
            ]
        ];
    }

    private function showVerify2FA()
    {
        return [
            'view' => 'auth/verify-2fa',
            'data' => []
        ];
    }
}
