<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('apartamentos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('descricao');
            $table->string('tipo');
            $table->string('venda_aluga');
            $table->integer('numero-quarto');
            $table->integer('numero-banheiro');
            $table->string('area');
            $table->integer('vaga-garagem');
            $table->integer('vaga-condominio');
            $table->string('iptu');
            $table->string('detalhes-imovel');
            $table->string('detalhes-condominio');
            $table->double('preco', 8,2);
            $table->string('foto');
            $table->string('localizacao');
            $table->string('contato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartamentos');
    }
};
