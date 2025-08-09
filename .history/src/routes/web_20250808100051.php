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
Route::get('/register', [AuthController::class, 'register']);

Route::post('/register', [AuthController::class, 'create']);

Route::get('/', [AuthController::class, 'index']);

Route::get('/edit', [AuthController::class, 'edit']);

Route::post('/edit', [AuthController::class, 'update']);


Route::get('register', [AuthController::class, 'register']);

//Route::get('/', [AuthController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/register', [AuthController::class, 'class','index'])->name('register');
    Route::post('/register', [AuthController::class, 'create']);
});


//Route::post('/', [MiddlewareController::class, 'post'])->middleware(FirstMiddleware::class);
