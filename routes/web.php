<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\ClasseController;

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

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

//alunos
Route::get('/alunos', [AlunoController::class, 'index'])->name('aluno.index');
Route::get('/alunos/novo', [AlunoController::class, 'create'])->name('aluno.create');
Route::post('/alunos', [AlunoController::class,'store'])->name('aluno.store');
Route::get('/alunos/{id}', [AlunoController::class,'show'])->name('aluno.show');
Route::get('/alunos/editar/{id}', [AlunoController::class,'edit'])->name('aluno.edit');
Route::put('/alunos/{id}', [AlunoController::class, 'update'])->name('aluno.update');
Route::delete('/alunos/{id}', [AlunoController::class, 'destroy'])->name('aluno.destroy');

//professores
Route::get('/professores', [ProfessorController::class, 'index'])->name('professor.index');
Route::get('/professores/novo', [ProfessorController::class, 'create'])->name('professor.create');
Route::post('/professores', [ProfessorController::class,'store'])->name('professor.store');
Route::get('/professores/{id}', [ProfessorController::class,'show'])->name('professor.show');
Route::get('/professores/editar/{id}', [ProfessorController::class,'edit'])->name('professor.edit');
Route::put('/professores/{id}', [ProfessorController::class, 'update'])->name('professor.update');
Route::delete('/professores/{id}', [ProfessorController::class, 'destroy'])->name('professor.destroy');

//classes
Route::get('/classes', [ClasseController::class, 'index'])->name('classe.index');
Route::get('/classes/novo', [ClasseController::class, 'create'])->name('classe.create');
Route::post('/classes', [ClasseController::class,'store'])->name('classe.store');
Route::get('/classes/{id}', [ClasseController::class,'show'])->name('classe.show');
Route::get('/classes/editar/{id}', [ClasseController::class,'edit'])->name('classe.edit');
Route::put('/classes/{id}', [ClasseController::class, 'update'])->name('classe.update');
Route::delete('/classes/{id}', [ClasseController::class, 'destroy'])->name('classe.destroy');