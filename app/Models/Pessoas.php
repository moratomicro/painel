<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
    use HasFactory;
    protected $table = 'pessoas';

    protected $fillable = ['nome', 'dt_Nasc', 'cpf', 'cep', 'rua', 'nº', 'bairro', 'cidade', 'uf', 'foto'];
}
