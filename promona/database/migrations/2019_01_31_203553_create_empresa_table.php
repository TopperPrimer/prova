<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('membro_id')->unsigned();
            $table->string('razao_social',200);
            $table->string('nome_fantasia',200);       
            $table->string('cnpj',20);
            $table->tinyInteger('ativo');
            $table->string('nome_responsavel',200);
            $table->timestamps();
        });


    Schema::table('empresa', function($table) {
        $table->foreign('membro_id')->references('id')->on('membro');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('empresa', function (Blueprint $table) {
            Schema::dropIfExists('empresa');
        });
    }
}
