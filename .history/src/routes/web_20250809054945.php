<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisteredUserController;
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

//Route::get('/', function () {
//return view('welcome');
//});
//Route::get('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'login']);

Route::post('/register', [AuthController::class, 'create']);

Route::get('/', [AuthController::class, 'index']);

Route::get('/edit', [AuthController::class, 'edit']);

Route::post('/edit', [AuthController::class, 'update']);


//Route::get('/', [AuthController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
});


//Route::post('/', [MiddlewareController::class, 'post'])->middleware(FirstMiddleware::class);

Route::get('/members', [AuthController::class, 'index'])->name('members.index');

Route::get('/members/export', [AuthController::class, 'export'])->name('members.export');

Route::get('/members/{id}', [AuthController::class, 'show'])->name('members.show');
