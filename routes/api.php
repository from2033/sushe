<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\DormitoryController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;

Route::get('dormitories', [DormitoryController::class, 'index']);
Route::post('dormitories/{id}/join', [DormitoryController::class, 'join']);
Route::get('dormitories/{id}/students', [DormitoryController::class, 'getStudents']);

Route::post('students', [StudentController::class, 'store']);
Route::get('students/{id}', [StudentController::class, 'show']);

Route::post('login', [AuthController::class, 'login']);


