<?php

use App\Http\Controllers\UsuarioController;
use App\Models\Usuario;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

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

Route::get('/', [UsuarioController::class, 'listar']);


Route::post('/cadastrar', [UsuarioController::class, 'cadastrar']);

Route::get('/selecionar/{id}', [UsuarioController::class, 'selecionar']);

Route::put('/editar/{id}', [UsuarioController::class, 'editar']);

Route::get('/excluir/{id}', [UsuarioController::class, 'excluir']);

