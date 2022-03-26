<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acesso', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->string('email',200)->nullable();
            $table->string('senha')->nullable();
            $table->datetime('data_cadastro')->nullable();
            $table->datetime('data_nascimento')->nullable();
            $table->string('ultimo_acesso')->nullable();
            $table->integer('permitir_publicidade')->nullable();
            $table->integer('item_fk')->nullable();
            $table->integer('checkpoint')->nullable();
            $table->integer('pais_fk')->nullable();
            $table->string('comentarios',1000)->nullable();
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
        Schema::dropIfExists('acesso');
    }
};
