<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    public function historicoDePontos()
    {
        return $this->hasMany('App\Models\HistoricoDePonto');
    }
}
