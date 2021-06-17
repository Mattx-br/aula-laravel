<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


use App\Models\AlunoModel;
use Carbon\Carbon;

class alunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(AlunoModel $aluno)
    {        
        //Aqui irão os registros usados para testes
        $dateCad=Carbon::now()->format('Y-m-d');
        $aluno->create([
            'nome'=>'Ariovaldo',
            'idade'=>'34',
            'curso'=>'Técnico em Informática',
            'bolsa'=>'500',
            'created_at'=>$dateCad
        ]);
        $aluno->create([
            'nome'=>'Sergio',
            'idade'=>'54',
            'curso'=>'Salgadeiro',
            'bolsa'=>'450',
            'created_at'=>$dateCad
        ]);
        $aluno->create([
            'nome'=>'Creusa',
            'idade'=>'60',
            'curso'=>'Manicure',
            'bolsa'=>'300',
            'created_at'=>$dateCad
        ]);
        //inserir outros registros...

    }
}
