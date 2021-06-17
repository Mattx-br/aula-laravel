<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\profModel;
use Carbon\Carbon;

class professorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(profModel $aluno)
    {        
        //Aqui irão os registros usados para testes
        $dateCad=Carbon::now()->format('Y-m-d');
        $aluno->create([
            'nome'=>'Charles',
            'materia'=>'Técnico em Informática',
            'vl_hora_aula'=>'50',
        ]);
        $aluno->create([
            'nome'=>'Francis',
            'materia'=>'Programadora',
            'vl_hora_aula'=>'45',
        ]);
        $aluno->create([
            'nome'=>'Roseli',
            'materia'=>'DBA',
            'vl_hora_aula'=>'40',
        ]);
        //inserir outros registros...

    }
}



//  $table->bigIncrements(column: 'id');
// $table->string(column: 'nome');
// $table->string(column: 'materia');
// $table->double(column: 'vl_hora_aula');
// $table->timestamps();