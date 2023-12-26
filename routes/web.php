<?php

use App\Http\Controllers\CleinteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| 
| Feito por Osvaldo Francisco - 2023;
|
*/

Route::get('/', function () {
    return view('auth.login');
});

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

   
    //Rotas lista de usuários
    route::get('/lista-de-todos-usuarios-do-sistema',[UserController::class,'index'])->name(name:'users.index');
    route::get('/editar-usuario/{id}',[UserController::class,'edit'])->name(name:'users.edit')->middleware('can:level');
    route::put('/edit-update/{id}',[UserController::class,'update'])->name(name:'users.update');

     //Rotas de Clientes VIPs
    route::resources([
        'cliente' => CleinteController::class
    ]);
});

require __DIR__.'/auth.php';
