<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;


Route::get('/', function () {
    return view('welcome');
});


Route::post('/demo', [DemoController::class, "demo"]);
Route::post('/demo5', [DemoController::class, "demo5"]);
Route::post('/demo6', [DemoController::class, "demo6"]);
Route::post('/demo7', [DemoController::class, "demo7"]);
Route::get('/demo8', [DemoController::class, "demo8"]);
Route::get('/demo9', [DemoController::class, 'demo9']);
Route::view("/form", "form")->name("form.get");
Route::post("/handleform", [FileController::class, "handleFormSubmission"])->name("form.post");
Route::get('/demo10', [DemoController::class, 'demo10']);
Route::get('/demo11', [DemoController::class, 'demo11']);
Route::get('/demo12', [DemoController::class, 'demo12']);
Route::get('/demo13', [DemoController::class, 'demo13']);
Route::get('/demo14', [DemoController::class, 'demo14']);
Route::get('/demo15/{num1}/{num2}', [DemoController::class, 'demo15']);
Route::post('/demo16', [DemoController::class, 'demo16']);
Route::post('/demo17', [DemoController::class, 'demo17']);
Route::post('/demo18', [DemoController::class, 'demo18']);
Route::post('/demo19', [DemoController::class, 'demo19']);
