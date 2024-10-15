<?php

namespace Database\Factories;

use App\Models\Despesa;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class DespesaFactory extends Factory
{
    protected $model = Despesa::class;

    public function definition()
    {
        return [
            'usuario_id' => Usuario::factory(), // Cria um usuário automaticamente
            'valor' => $this->faker->randomFloat(2, 10, 1000), // Valor entre 10 e 1000
            'descricao' => $this->faker->sentence(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
