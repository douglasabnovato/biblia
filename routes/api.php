<?php

use App\Http\Controllers\LivroController;
use App\Http\Controllers\TestamentoController;
use App\Http\Controllers\VersiculoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/create', function(){
    return "CREATE with success.";
});

Route::get('/read', function(){
    return "READ com sucesso.";
});

Route::put('/update', function(){
    return "UPDATE com sucesso.";
});

Route::delete('/delete', function(){
    return "DELETE com sucesso.";
});

Route::patch('/patch', function(){
    return "PATCH com sucesso.";
});

Route::get('/teste', function(){
    return "TESTE-1 com sucesso.";
});

Route::post('/testamento', [TestamentoController::class, 'store']);
Route::get('/testamento', [TestamentoController::class, 'index']);
Route::get('/testamento/{id}', [TestamentoController::class, 'show']);
Route::put('/testamento/{id}', [TestamentoController::class, 'update']);
Route::delete('/testamento/{id}', [TestamentoController::class, 'destroy']);

Route::post('/livro', [LivroController::class, 'store']);
Route::get('/livro', [LivroController::class, 'index']);
Route::get('/livro/{id}', [LivroController::class, 'show']);
Route::put('/livro/{id}', [LivroController::class, 'update']);
Route::delete('/livro/{id}', [LivroController::class, 'destroy']);

Route::post('/versiculo', [VersiculoController::class, 'store']);
Route::get('/versiculo', [VersiculoController::class, 'index']);
Route::get('/versiculo/{id}', [VersiculoController::class, 'show']);
Route::put('/versiculo/{id}', [VersiculoController::class, 'update']);
Route::delete('/versiculo/{id}', [VersiculoController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
