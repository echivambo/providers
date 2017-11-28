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
            $table->string('proprietario', 150);
            $table->string('nome_org', 150)->unique();
            $table->integer('nuit');
            $table->string('provincia', 15);
            $table->string('distrito', 150);
            $table->string('cidade', 60);
            $table->string('bairro',60);
            $table->string('rua',150);
            $table->string('endereco',255);
            $table->string('nr_endereco',15);
            $table->string('tel_fixo',10)->unique();
            $table->string('fax',10)->unique();
            $table->string('celular',100)->unique();
            $table->string('email',255);
            $table->string('nome_banco',100);
            $table->string('nr_conta',100)->unique();
            $table->string('nr_agencia',20);
            $table->string('nome_agencia',60);
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
