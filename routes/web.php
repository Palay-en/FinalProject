<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\InstructorController;
Route::get('/', function () {
    return view('home');
});



Route::post('/register',[UserController::class, 'register']);
Route::post('/logout',[UserController::class,'logout']);
Route::post('/login',[UserController::class,'login']);


Route::post('/addInstructor',[InstructorController::class,'addInstructor']);


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/evaluation', [EvaluationController::class, 'index'])->name('evaluation');


// Department Routes
Route::get('/citdept', [InstructorController::class, 'citInstructors'])->name('citdept');
Route::get('/cbmdept', [InstructorController::class, 'cbmInstructors'])->name('cbmdept');
Route::get('/ctedept', [InstructorController::class, 'cteInstructors'])->name('ctedept');
Route::get('/ccjedept', [InstructorController::class, 'ccjeInstructors'])->name('ccjedept');


Route::post('/giveEvaluationAccess', [UserController::class, 'giveEvaluationAccess'])->name('giveEvaluationAccess');

Route::post('/submit-evaluation',[EvaluationController::class,'submitEvaluation']);

