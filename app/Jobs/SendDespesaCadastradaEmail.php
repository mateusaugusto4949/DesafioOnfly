<?php

namespace App\Jobs;

use App\Mail\DespesaCadastrada; // Certifique-se de que este namespace está correto
use App\Models\Usuario;
use App\Models\Despesa;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail; // Importar a facade Mail

class SendDespesaCadastradaEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $usuario;
    protected $despesa;

    /**
     * Create a new job instance.
     *
     * @param Usuario $usuario
     * @param Despesa $despesa
     */
    public function __construct(Usuario $usuario, Despesa $despesa)
    {
        $this->usuario = $usuario;
        $this->despesa = $despesa;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Enviar o e-mail
        Mail::to($this->usuario->email)->send(new DespesaCadastrada($this->usuario, $this->despesa));
    }
}
