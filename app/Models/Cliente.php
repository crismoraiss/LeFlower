<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'tblclientes';
    protected $primaryKey = 'idCliente';

    protected $fillable = [
        'nomeCliente', 'emailCliente', 'senhaCliente', 'telefoneCliente', 'fotoCliente'
    ];

    public function usuario()
    {
        return $this->morphOne(Usuario::class, 'tipo_usuario');
    }

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class, 'idCliente', 'idCliente');
    }

    public function rules()
    {
        return [
            'nomeCliente' => 'sometimes|required|string|max:255',
            'telefoneCliente' => 'sometimes|required|string|max:15',
            'emailCliente' => 'sometimes|required|string|email|max:255',
            'senhaCliente' => 'sometimes|nullable|string|confirmed|min:2',
            'fotoCliente' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }

    public function feedback()
    {
        return [
            'nomeCliente.required' => 'O campo nome é obrigatório.',
            'telefoneCliente.required' => 'O campo telefone é obrigatório.',
            'emailCliente.required' => 'O campo email é obrigatório.',
            'emailCliente.email' => 'O email fornecido não é válido.',
            'senhaCliente.confirmed' => 'A confirmação da senha não coincide.',
            'fotoCliente.image' => 'O arquivo deve ser uma imagem.',
            'fotoCliente.mimes' => 'A imagem deve ser um dos seguintes tipos: jpeg, png, jpg, gif.',
            'fotoCliente.max' => 'A imagem não pode ser maior que 2048 kilobytes.'
        ];
    }
}
