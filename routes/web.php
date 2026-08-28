<?php

use App\Http\Controllers\ComercioController;
use App\Http\Controllers\EventoTransaccionController;
use App\Http\Controllers\TransaccionController;
use Illuminate\Queue\Console\RetryBatchCommand;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
//GUIA SEMANA 5 PARTE CLASE DEL JUEVES 
Route::get('/', function () {

    return view('welcome');
});

Route::get('/taskboard', function () {

    return 'Bienvenidos a taskboard, la pasarela de pagos.';
});

Route::get('/acerca-de', function () {

    return 'taskboard es una pasarela de pago, donde tu pagas con tarjetas de credito o debito
     y el pago sera seguro.';
});


Route::get('/contacto', function () {

    return 'Jose Ulises Ceron Ramos, jose.ceron67257@uped.edu.sv';
});


Route::get('/comercios', function () {

    return [
        'nombre comercio 1' => 'Ferrertia Virgen Concepcion',
        'nombre comercio 2' => 'Restaurante yessenia',
        'nombre comercio 3' => 'Hotel cardedeu'
    ];
});

Route::get('/comercios/{Restauranteyessenia?}', function ($restaurante = 'Restaurante yessenia') {

    return "¡Bienvenidos a taskboard: $restaurante!";
});

Route::get('/estados', function () {

    return [
        "Iniciada",
        "Procesando",
        "Aprobada",
        "Rechazada",
        "Liquidada"
    ];
});

Route::get('/transaccion/{demo}', function () {

    return [

        "id" => 1,
        "comercio" => 'venta comida a la vista',
        "monto" => 3.00,
        "moneda" => 'USD',
        "estado" => 'Aprobado'


    ];
});

//GUIA SEMANA 5 PARTE VIERNES

//ya se creo comerciocontroller esta en app/htto/controllers

Route::get('/comercio ', [ComercioController::class, 'index'])
    ->name('comercios.index');



Route::get('/transacciones', [TransaccionController::class, 'index'])
    ->name('transacciones.index');


Route::get('/comercio/{id}', [ComercioController::class, 'show'])
    ->where('id', '[0-9]+');


Route::get('/eventos-transaccion', [EventoTransaccionController::class, 'index']);
