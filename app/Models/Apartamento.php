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
        'tipoapartamento_id',
        'venda_aluga',
        'quantidade_id',
        'area',
        'iptu',
        'detalhes-imovel',
        'detalhes-condominio',
        'preco',
        'foto',
        'localizacao',
        'contato',
    ];
    
    public function tipoapartamento() {
        return $this->belongsTo(Tipoapartamento::class);
    }

    public function quantidade() {
        return $this->belongsTo(Quantidade::class);
    }
}
