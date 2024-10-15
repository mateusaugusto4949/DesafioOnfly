<?php

namespace App\Exceptions;

use Exception;

class ValidationException extends Exception
{
    protected $message;
    protected $statusCode;

    public function __construct($message = 'Erro de validação', $statusCode = 422)
    {
        parent::__construct($message);
        $this->message = $message;
        $this->statusCode = $statusCode;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }
}
