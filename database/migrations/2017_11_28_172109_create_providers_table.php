<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_empresa', 150);
            $table->string('pessoa_contacto', 150);
            $table->string('alvara', 255);
            $table->integer('nuit');
            $table->string('pais', 150);
            $table->string('provincia', 100);
            $table->string('cidade', 60);
            $table->string('bairro',60);
            $table->string('endereco_fisico',255);
            $table->string('end_numero',15);
            $table->string('ramo_atividade',100);
            $table->string('telefone_fixo',10)->unique();
            $table->string('fax',10)->unique();
            $table->string('celular',10)->unique();
            $table->string('email',100)->unique();
            $table->string('nome_banco',100);
            $table->string('numero_conta',30)->unique();
            $table->integer('nib')->unique();
            $table->string('nome_agencia',60);
            $table->string('bancaria',255);
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('providers');
    }
}
