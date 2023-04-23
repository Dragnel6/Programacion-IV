<?php

use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\MatriculaController;
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

Route::apiResources(['alumnos'=>AlumnosController::class,]);

Route::controller(AlumnosController::class)->group(function(){
    Route::get('/alumnos', 'index');
    Route::post('/alumnos', 'store');
    Route::put('/alumnos', 'update');
    Route::delete('/alumnos', 'destroy');
});

Route::apiResources(['docentes'=>DocenteController::class,]);

Route::controller(DocenteController::class)->group(function(){
    Route::get('/docentes', 'index');
    Route::post('/docentes', 'store');
    Route::put('/docentes', 'update');
    Route::delete('/docentes', 'destroy');
});

Route::apiResources(['materias'=>MateriaController::class,]);

Route::controller(MateriaController::class)->group(function(){
    Route::get('/materias', 'index');
    Route::post('/materias', 'store');
    Route::put('/materias', 'update');
    Route::delete('/materias', 'destroy');
});

Route::apiResources(['matriculas'=>MatriculaController::class,]);

Route::controller(MatriculaController::class)->group(function(){
    Route::get('/matriculas', 'index');
    Route::post('/matriculas', 'store');
    Route::put('/matriculas', 'update');
    Route::delete('/matriculas', 'destroy');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('alumno/', function () {
    return 'Hola desde una ruta de laravel';
});