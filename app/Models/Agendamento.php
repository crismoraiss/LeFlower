<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    protected $table = 'tblagendamentos';
    protected $primaryKey = 'idAgendamento';

    protected $fillable = [
        'dataAgendamento',
        'categoriaAgendamento',
        'data_hora_inicial',
        'data_hora_final',
        'statusAgendamento',
        'idCliente',
        'idFuncionario',
        'idServico'
    ];

    public $timestamps = false;

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'idCliente', 'idCliente');
    }

    public function servico()
    {
        return $this->belongsTo(ServicosModel::class, 'idServico');
    }

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'idFuncionario');
    }
}
