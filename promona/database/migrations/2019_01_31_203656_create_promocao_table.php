<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromocaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promocao', function (Blueprint $table) {
            $table->intIncrements('id');
            $table->string('descricao',200);
            $table->float('valor_desconto');       
            $table->float('percentual');
            $table->tinyInteger('ativo');
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
        Schema::table('promocao', function (Blueprint $table) {
            Schema::dropIfExists('promocao');
        });
    }
}
