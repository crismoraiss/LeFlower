<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horarios extends Model
{
    use HasFactory;

    protected $table = 'tblhorarios';

    protected $primaryKey = 'idHorario ';

    protected $fillable = [
        'horario',
    ];

}
