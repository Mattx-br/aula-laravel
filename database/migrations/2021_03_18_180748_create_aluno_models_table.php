<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */  
    public function up()
    {
        // Schema::create('aluno_models', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });

        Schema::create('aluno', function (Blueprint $table) {
            // $table->integer(column:'id_user')->unsigned();
            $table->bigIncrements(column: 'id');
            $table->string(column: 'nome');
            $table->integer(column: 'idade');
            $table->string(column: 'curso');
            $table->double(column: 'bolsa', total: 10, places: 2); //10 casas e 2 decimais
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
        Schema::dropIfExists('aluno');
    }
}
