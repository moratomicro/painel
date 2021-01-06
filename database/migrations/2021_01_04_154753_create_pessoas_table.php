<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->date('dt_Nasc');
            $table->string('cpf', 14);
            $table->string('cep', 10);
            $table->string('rua', 100);
            $table->string('nº', 5);
            $table->string('bairro', 100);
            $table->string('cidade', 50);
            $table->string('uf', 3);
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
