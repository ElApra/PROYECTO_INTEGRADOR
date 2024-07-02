<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\OrientacionController;
use App\Http\Controllers\RecursosController;
use App\Http\Controllers\ProfesionalController;
use App\Http\Controllers\ProyectosController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RespuestaController;

Route::get('/', function () {
    return view('inicio.welcome');
});

// Ruta para el dashboard de alumnos
Route::get('dashboard/dashboard-alumno', function () {
    return view('dashboard-alumno'); // Esta vista debe ser creada en resources/views/dashboard/alumno.blade.php
})->name('dashboard-alumno');

// Ruta para el dashboard de profesores
Route::get('dashboard/dashboard-profesor', function () {
    return view('dashboard-profesor'); // Esta vista debe ser creada en resources/views/dashboard/profesor.blade.php
})->name('dashboard-profesor');

// Ruta para el pefil y el redireccionamiento
Route::get('/dashboard', [DashboardController::class, 'redirectBasedOnRole'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

    
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// hasta aca

//ruta de la barra de navegacion del estudiante
Route::get('/explorar-carreras', [CarreraController::class, 'index'])->name('carreras.index');
Route::get('/carreras/{id}', [CarreraController::class, 'show'])->name('carreras.show');  

Route::get('/evaluaciones', function () {
    return view('evaluacion.evaluaciones');
});

Route::get('/orientacion', [OrientacionController::class, 'index'])->name('orientacion.index');
Route::get('/orientacion/{id}', [OrientacionController::class, 'show'])->name('orientacion.show');

Route::get('/recursos', [RecursosController::class, 'index'])->name('recursos.index');

//hasta aca

Route::middleware(['auth'])->post('/guardar-respuestas', [RespuestaController::class, 'guardar'])->name('guardar.respuestas');  

Route::post('/guardar-respuestas', [RespuestaController::class, 'guardar'])->name('guardar.respuestas');


Route::post('/guardar-respuestas', 'TestVocacionalController@guardarRespuestas')->name('guardar.respuestas');

Route::post('/guardar-respuestas', [TestController::class, 'guardarRespuestas'])->name('guardar.respuestas');


Route::get('/profesional/proyectos', function () {
    return view('dashboard-profesor');
})->name('profesional.proyectos');

Route::get('/profesional/tareas', function () {
    return view('dashboard-profesor');
})->name('profesional.tareas');

Route::get('/profesional/mensajes', function () {
    return view('dashboard-profesor');
})->name('profesional.mensajes');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard-profesor', [ProfesionalController::class, 'dashboard'])->name('dashboard-profesor');
Route::get('/profesional/proyectos', [ProyectosController::class, 'index'])->name('profesional.proyectos');
Route::get('/profesional/tareas', [TareaController::class, 'index'])->name('profesional.tareas');
Route::resource('mensajes', MensajeController::class);
Route::get('/profesional/mensajes', [MensajeController::class, 'index'])->name('profesional.mensajes');

});



Route::get('/profesional/mensajes', [MensajeController::class, 'index'])->name('profesional.mensajes');

Route::get('/profesional/tareas', function () {
    return view('profesional.tareas');
})->name('profesional.tareas');



Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');



Route::resource('proyectos', ProyectosController::class);

Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');

Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');

require __DIR__.'/auth.php';
