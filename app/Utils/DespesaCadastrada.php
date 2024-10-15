<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Route;

class DespesaCadastrada extends Mailable
{
    use Queueable, SerializesModels;

    public $usuario;
    public $despesa;

    public function __construct($usuario, $despesa)
    {
        $this->usuario = $usuario;
        $this->despesa = $despesa;
    }

    public function build()
    {
        return $this->subject('Despesa Cadastrada')
                    ->view('despesa_cadastrada');
    }
}
