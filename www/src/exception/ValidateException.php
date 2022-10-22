<?php

class ValidateException extends AppException {
    private $erros = [];

    public function __construct($erros =[], $message = 'Erros de validação', $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->erros = $erros;
    }

    public function getErros() {
        return $this->erros;
    }

    public function get($att) {
        return $this->erros[$att];
    }
}
