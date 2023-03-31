<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Users extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'admisao',
        'empresa',
        'email_pessoal',
        'email_corporativo',
        'escolaridade',
        'certificacoes',
        'celular',
        'cargo',
        'funcao',
        'tipo_contratacao',
        'salario',
        'equipe',
        'ferias',
        'alteracao_cargo_salario_ferias',
        'observacao',
        'demissao',
        'motivo',
        'password',
        'status',
        'perfil'
        
    ];

    public function rules(){
        return 
        [ 
        'email_pessoal' => 'required|unique:users,email_pessoal,'.$this->id.''
        ];
    }

    public function feedback(){
        return 
        [
            'required' => 'input email_pessoal required',
            'email_pessoal.unique' => ' email_pessoal exist'
        ];
    }

    public function tasks(){
        return $this->hasMany('App\Models\Task');
    }

     // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
