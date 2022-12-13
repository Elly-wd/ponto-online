<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\FuncionarioController;
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

Route::get('/', function () {
    return view('login');
});
Route::get('/cadastro', function () {
    return view('cadastro');
});
Route::post('/realizar-cadastro', [LoginController::class, 'realizaCadastro']);
Route::post('/pagina-inicial', [LoginController::class, 'realizaLogin']);
Route::get('/encerrar-sessao', [LoginController::class, 'realizaLogout']);
Route::post('/marcar-ponto', [FuncionarioController::class, 'marcaPonto']);


