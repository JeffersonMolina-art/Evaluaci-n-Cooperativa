<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepaController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\DiagnosticoController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\CLienteController;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\MarcaController;

Route::get('/', [PersonaController::class, 'getPersonas'])->name('persona');
Route::get('/create', [PersonaController::class, 'create'])->name('persona.create');
Route::post('/personas', [PersonaController::class, 'store'])->name('persona.store');
Route::get('/personas/{persona}/edit', [PersonaController::class, 'edit'])->name('persona.edit');
Route::put('/personas/{persona}', [PersonaController::class, 'update'])->name('persona.update');
Route::delete('/personas/{id}', [PersonaController::class, 'destroy'])->name('persona.destroy');


Route::get('/departamentos', [DepaController::class, 'getDepartamentos'])->name('departamentos');
Route::get('/departamentos/create', [DepaController::class, 'create'])->name('departamentos.create');
Route::post('/departamentos', [DepaController::class, 'store'])->name('departamentos.store');
Route::get('/departamentos/{departamento}/edit', [DepaController::class, 'edit'])->name('departamentos.edit');
Route::put('/departamentos/{departamento}', [DepaController::class, 'update'])->name('departamentos.update');
Route::delete('/departamentos/{departamento}', [DepaController::class, 'destroy'])->name('departamentos.destroy');

Route::get('/diagnosticos', [DiagnosticoController::class, 'show'])->name('diagnosticos');
Route::get('/diagnosticos/create', [DiagnosticoController::class, 'create'])->name('diagnosticos.create');
Route::post('/diagnosticos', [DiagnosticoController::class, 'store'])->name('diagnosticos.store');
Route::get('/diagnosticos/{diagnostico}/edit', [DiagnosticoController::class, 'edit'])->name('diagnosticos.edit');
Route::put('/diagnosticos/{diagnostico}', [DiagnosticoController::class, 'update'])->name('diagnosticos.update');
Route::delete('/diagnosticos/{diagnostico}', [DiagnosticoController::class, 'destroy'])->name('diagnosticos.destroy');

Route::get('/equipos', [EquipoController::class, 'show'])->name('equipos');
Route::get('/equipos/create', [EquipoController::class, 'create'])->name('equipos.create');
Route::post('/equipos', [EquipoController::class, 'store'])->name('equipos.store');
Route::get('/equipos/{equipo}/edit', [EquipoController::class, 'edit'])->name('equipos.edit');
Route::put('/equipos/{equipo}', [EquipoController::class, 'update'])->name('equipos.update');
Route::delete('/equipos/{equipo}', [EquipoController::class, 'destroy'])->name('equipos.destroy');

Route::get('/servicios', [ServicioController::class, 'show'])->name('servicios');
Route::get('/servicios/create', [ServicioController::class, 'create'])->name('servicios.create');
Route::post('/servicios', [ServicioController::class, 'store'])->name('servicios.store');
Route::get('/servicios/{servicio}/edit', [ServicioController::class, 'edit'])->name('servicios.edit');
Route::put('/servicios/{servicio}', [ServicioController::class, 'update'])->name('servicios.update');
Route::delete('/servicios/{servicio}', [ServicioController::class, 'destroy'])->name('servicios.destroy');

Route::get('/clientes', [CLienteController::class, 'show'])->name('clientes');
Route::get('/clientes/create', [CLienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [CLienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{cliente}/edit', [CLienteController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{cliente}', [CLienteController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{cliente}', [CLienteController::class, 'destroy'])->name('clientes.destroy');

Route::get('/tecnicos', [TecnicoController::class, 'show'])->name('tecnicos');
Route::get('/tecnicos/create', [TecnicoController::class, 'create'])->name('tecnicos.create');
Route::post('/tecnicos', [TecnicoController::class, 'store'])->name('tecnicos.store');
Route::get('/tecnicos/{tecnico}/edit', [TecnicoController::class, 'edit'])->name('tecnicos.edit');
Route::put('/tecnicos/{tecnico}', [TecnicoController::class, 'update'])->name('tecnicos.update');
Route::delete('/tecnicos/{tecnico}', [TecnicoController::class, 'destroy'])->name('tecnicos.destroy');

Route::get('/marcas', [MarcaController::class, 'show'])->name('marcas');
Route::get('/marcas/create', [MarcaController::class, 'create'])->name('marcas.create');
Route::post('/marcas', [MarcaController::class, 'store'])->name('marcas.store');
Route::get('/marcas/{cliente}/edit', [MarcaController::class, 'edit'])->name('marcas.edit');
Route::put('/marcas/{cliente}', [MarcaController::class, 'update'])->name('marcas.update');
Route::delete('/marcas/{cliente}', [MarcaController::class, 'destroy'])->name('marcas.destroy');


