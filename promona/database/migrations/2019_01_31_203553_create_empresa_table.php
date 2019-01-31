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
            $table->intIncrements('id');
            $table->string('razao_social',200);
            $table->string('nome_fantasia',200);       
            $table->string('cnpj',20);
            $table->tinyInteger('ativo');
            $table->string('nome_responsavel',200);
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
        Schema::table('empresa', function (Blueprint $table) {
            Schema::dropIfExists('empresa');
        });
    }
}