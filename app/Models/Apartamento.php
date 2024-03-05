<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'tipo',
        'venda_aluga',
        'numero-quarto',
        'numero-banheiro',
        'area',
        'vaga-garagem',
        'vaga-condominio',
        'iptu',
        'detalhes-imovel',
        'detalhes-condominio',
        'preco',
        'foto',
        'localizacao',
        'contato',
    ];
}
