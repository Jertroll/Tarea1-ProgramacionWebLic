<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; 


//Route::view('/', 'welcome')->name('home');
//Ruta para el formulario principal
Route::view('/', 'formulario')->name('formulario');

//Rutas para mostrar los datos registrados//
//Procesar los datos 
Route::post('/guardar-datos', function (Request $request) {
    // Validamos los datos manualmente aquí
    $datos = $request->validate([
        'nombre' => 'required',
        'telefono' => 'required',
        'direccion' => 'required',
        'email' => 'required|email',
        'estado_civil' => 'required',
    ]);

    // Guardamos en la Sesión Flash
    session()->flash('contacto_data', $datos);

    // Redirigimos a la vista de resultados
    return redirect()->route('mostrar.datos');
})->name('guardar.datos');

// Mostrar los resultados
Route::get('/mostrar-datos', function () {
    return view('mostrar');
})->name('mostrar.datos');




Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
