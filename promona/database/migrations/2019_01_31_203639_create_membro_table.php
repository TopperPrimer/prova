<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membro', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('primeiro_nome',200);
            $table->string('sobrenome',200);
            $table->tinyInteger('ativo');
            $table->string('cpf',11);
            $table->dateTime('data_cadastro');
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
        Schema::table('membro', function (Blueprint $table) {
            Schema::dropIfExists('membro');
        });
    }
}
