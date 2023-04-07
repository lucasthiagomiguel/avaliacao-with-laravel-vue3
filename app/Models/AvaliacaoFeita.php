<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvaliacaoFeita extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'answers',
        'status',
        'done',
        'question_id',
        'id_users_gestor',
        'value_answers_performace',
        'value_answers_desempenho'
    ];
}
