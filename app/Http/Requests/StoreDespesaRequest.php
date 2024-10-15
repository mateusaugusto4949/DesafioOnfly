<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDespesaRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Ajuste conforme necessário para autorização
    }

    public function rules()
    {
        return [
            'descricao' => 'required|string|max:191',
            'data' => 'required|date|before_or_equal:today',
            'usuario_id' => 'required|exists:usuarios,id',
            'valor' => 'required|numeric|min:0',
        ];
    }

    public function messages()
    {
        return [
            'descricao.required' => 'A descrição da despesa é obrigatória.',
            'descricao.max' => 'A descrição da despesa não pode exceder 255 caracteres.',
            'data.required' => 'A data da despesa é obrigatória.',
            'data.date' => 'A data da despesa deve ser uma data válida.',
            'data.before_or_equal' => 'A data da despesa não pode ser uma data futura.',
            'usuario_id.required' => 'O usuário é obrigatório.',
            'usuario_id.exists' => 'Usuário não encontrado.',
            'valor.required' => 'O valor da despesa é obrigatório.',
            'valor.numeric' => 'O valor da despesa deve ser um número.',
            'valor.min' => 'O valor da despesa deve ser um número positivo.',
        ];
    }
}
