<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
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
        'question_id',
        'value_answers',
    ];

    public function answers(){
        return $this->belongsTo('App\Models\AvaliacaoDesempenho');
    }
}
