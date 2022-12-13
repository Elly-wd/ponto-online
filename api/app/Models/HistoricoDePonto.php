<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoricoDePonto extends Model
{
    protected $fillable = ['id_funcionariio', 'entrada', 'saida'];
    use HasFactory;

    public function funcionario()
    {
        return $this->belongsTo('App\Models\Funcionario');
    }
}
