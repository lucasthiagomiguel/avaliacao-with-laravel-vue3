<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvaliacaoDesempenho extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'questions',
        'status',
        'typeTest',
    ];

    public function answers(){
        return $this->hasMany('App\Models\Answers');
    }

}
