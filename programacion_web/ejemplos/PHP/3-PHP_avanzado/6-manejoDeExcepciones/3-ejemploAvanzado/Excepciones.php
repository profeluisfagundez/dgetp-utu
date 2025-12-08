<?php
class Excepciones extends Exception {
    protected $errorCode;
    protected $additionalData;

    public function __construct($message, $errorCode, $additionalData = null) {
        parent::__construct($message);
        $this->errorCode = $errorCode;
        $this->additionalData = $additionalData;
    }

    public function getErrorCode() {
        return $this->errorCode;
    }

    public function getAdditionalData() {
        return $this->additionalData;
    }

    public function handle() {
        echo "Excepción capturada (Código: " . $this->errorCode . "): " . $this->getMessage() . "\n";
    }
}
?>