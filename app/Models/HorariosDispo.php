<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorariosDispo extends Model
{
    use HasFactory;

    protected $table = 'tblhorarios_disponiveis';

    protected $primaryKey = 'id';

    public $timestamps = false;  // Desativando timestamps automáticas

    protected $fillable = [
        'idFuncionario',
        'data_hora_inicial',
        'data_hora_final',
    ];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'idFuncionario');
    }
}
