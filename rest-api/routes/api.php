<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//pertemuan-4
#method get
Route::get('/animals', [AnimalController::class, 'index']);

#method post
Route::post('/animals', [AnimalController::class, 'store']);

#method put
Route::put('/animals/{id}', [AnimalController::class, 'update']);

#method delete
Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);

//pertemuan-5
# Method GET, route /students
Route::get('/students', [StudentController::class, 'index']);

# Method POST, route /students
Route::post('/students', [StudentController::class, 'store']);