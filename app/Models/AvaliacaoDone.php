<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvaliacaoDone extends Model
{
    use HasFactory;

    protected $fillable = ['id_gestor','id_users','name','pergunta1','pergunta2','pergunta3','pergunta4','pergunta5','pergunta6','pergunta7','pergunta8','pergunta9','pergunta10','pergunta11','pergunta12','quadrante','total_competencia','total_performance'];

}
