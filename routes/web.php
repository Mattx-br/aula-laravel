<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\professorController;
// use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ==|+|==============================|+|==
//           * PARTE DO ALUNO *
// ==|+|==============================|+|==

Route::get('/aluno', [AlunoController::class, 'index']);
// rota para metodo createAluno.blade.php
Route::get('/aluno/create', [AlunoController::class, 'create']);

//rota para método show
Route::get('/aluno/{id}', [AlunoController::class,'show']);

// para cadastrar
Route::post('/aluno/store', [AlunoController::class,'store'] );

// para ir para a pg de editar
Route::get('/aluno/edit/{id}', [AlunoController::class,'edit']);

// para editar o banco
// Route::post('/aluno/update', [AlunoController::class,'update']); //com hidden
Route::post('/aluno/update/{id}', [AlunoController::class,'update']); //sem hidden

// para excluir/deletar
Route::get('/aluno/delete/{id}', [AlunoController::class,'destroy']);








// link para essa pg
// href='{{url("aluno/delete/$alunos->id")}}'

// ==|+|==============================|+|==
//          * PARTE DO PROFESSOR *
// ==|+|==============================|+|==

Route::get('/professor', [professorController::class, 'index']);

Route::get('/professor/create', [professorController::class, 'create']);

Route::get('/professor/{id}', [professorController::class,'show']);

Route::post('/professor/store', [professorController::class,'store'] );

// para ir para a pg de editar
Route::get('/professor/edit/{id}', [professorController::class,'edit']);

// para editar o banco
// Route::post('/professor/update', [professorController::class,'update']); //com hidden
Route::post('/professor/update/{id}', [professorController::class,'update']); //sem hidden

// para excluir/deletar
Route::get('/professor/delete/{id}', [professorController::class,'destroy']);
// =====================================|=====================================


// Via view
// Route::get('/professor', function () {
//     return view('professor');
// });

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/eventos', function () {
//     return view('eventos');
// });

































// Route::get('/', function () {
//     return "<h1>Hello World</h1>";
// });

// acesso via controller
// Route::get('/', HomeController::class);



Route::get('/aluno/{nome}', function ($nome) {
    return "<h1>Salve Salve, <spam style='color: #0f0f0f'>$nome</spam></h1>";
});

// Route::get('/aluno/{nome}/{curso}', function ($nome, $curso) {
//     return "<h1>Salve Salve, <spam style='color: #0f1f4f'>$nome</spam> do curso de $curso</h1>";
// });



// acesso via controller
Route::get('/aluno/{nome}/{curso}', [AlunoController::class, 'curso']);//esse curso ai é o método q ta na pagina do AlunoController.php



// ==========================================
// blade serve pra template de criação da página

