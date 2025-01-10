<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable; // permite enviar notificações.
use Laravel\Sanctum\HasApiTokens; // Permite ao modelo gerar tokens de API utilizando o Laravel Sanctum.
//Tive que colocar isso tbm

// class Usuario extends Model
class Usuario extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;
    use HasApiTokens; // Com este trait, você pode chamar o método createToken no modelo Usuario para gerar um token de acesso.
    use Notifiable;  // Utilizar métodos como notify para enviar notificações ao usuário.


    protected $table = 'tblusuarios';
    protected $primaryKey = 'idUsuario';


    protected $hidden = [
        'senhaUsuario', 'remember_token',
    ];

    public function tipo_usuario()
    {
        return $this->morphTo('tipo_usuario', 'tipoUsuario_type', 'tipoUsuario_id');
    }
}
