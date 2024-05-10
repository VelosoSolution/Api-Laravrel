<?php
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//use App/Http/Controllers/ApiProductController;
Route::get('/user', [Controller::class, 'index']);
Route::post('/user', [Controller::class, 'store']);
Route::get('/user/{id}', [Controller::class, 'show']);
Route::put('/user/{id}', [Controller::class, 'update']);
Route::delete('/user/{id}', [Controller::class, 'destroy']);
