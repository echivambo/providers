<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvCodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prov_cods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 15)->unique();
            $table->boolean('status')->default(1);
            $table->integer('user_id')->references('id')->on('users');
            $table->integer('providers_id')->references('id')->on('providers')->default(0);
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
        Schema::dropIfExists('prov_cods');
    }
}
