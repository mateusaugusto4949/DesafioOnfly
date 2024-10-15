<?php

namespace App\Exceptions;

use Exception;

class NotFoundException extends Exception
{
    protected $message;
    protected $statusCode;

    public function __construct($message = 'Recurso não encontrado', $statusCode = 404)
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
