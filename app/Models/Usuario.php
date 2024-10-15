<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'senha'];

    public function despesas()
    {
        return $this->hasMany(Despesa::class, 'usuario_id');
    }
}
