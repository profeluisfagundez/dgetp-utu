<?php
namespace App\Models;

use PragmaRX\Google2FA\Google2FA;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;

class TwoFAModel
{
    private $google2fa;

    public function __construct()
    {
        $this->google2fa = new Google2FA();
    }

    public function generateSecretKey()
    {
        return $this->google2fa->generateSecretKey();
    }

    public function verifyCode($secretKey, $code)
    {
        return $this->google2fa->verifyKey($secretKey, $code);
    }

    public function generateQRCode($appName, $userEmail, $secretKey)
    {
        $qrCodeUrl = $this->google2fa->getQRCodeUrl($appName, $userEmail, $secretKey);
        
        $renderer = new ImageRenderer(
            new RendererStyle(300),
            new SvgImageBackEnd()
        );
        
        $writer = new Writer($renderer);
        return $writer->writeString($qrCodeUrl);
    }

    public function formatSecretKey($secretKey)
    {
        return chunk_split($secretKey, 4, ' ');
    }
}