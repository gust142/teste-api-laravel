<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    // 
    protected $fillable = [
        'id','conta','valor'
    ];

    public function findByConta($conta){
        return Conta::where('conta', $conta);
    }
}
