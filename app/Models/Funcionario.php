<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $table = 'tblfuncionarios';
    protected $primaryKey = 'idFuncionario';

    protected $fillable = [
        'nomeFuncionario',
        'dataNascFuncionario',
        'emailFuncionario',
        'telefoneFuncionario',
        'senhaFuncionario',
        'salarioFuncionario',
        'enderecoFuncionario',
        'nivelFuncionario',
        'statusFuncionario',
        'cargoFuncionario',
        'created_at',
        'updated_at',
        'idEspecialidade ',
    ];


    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function usuario()
    {
        return $this->morphOne(Usuario::class, 'tipo_usuario');
    }

    public function servicos()
    {
        return $this->hasMany(ServicosModel::class, 'idFuncionario', 'idFuncionario');
    }

    public function agendamentos()
    {
        return $this->hasMany(Agendamento::class, 'idFuncionario'); // Usando a coluna correta do banco de dados
    }

}
 