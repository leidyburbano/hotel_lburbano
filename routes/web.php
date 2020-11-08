<?php

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

    //ruta 
    Route::get('/', function () {
      return view('principal');
    });

    //hotel/historia
    Route::get('hotel/historia', function () {
        return view('hotel.historia');
    });

    //hotel/mision-vision
    Route::get('hotel/mision-vision', function () {
        return view('hotel.vision');
    });

    //hotel/ubicación
    Route::get('hotel/ubicación', function () {
        //return "Ubicado en Cartagena de Indias";
        return view('hotel.ubicacion');
    });

    //servicios/habitaciones
    Route::get('servicios/habitaciones', function () {
        //return "Habitaciones tipo Estándar, Superior, Ejecutiva, Suite";
        return view('servicios.habitaciones');
    });

   
    Route::get('servicios/eventos/{id} ', function ($id) {
        return view('servicios.eventos', array('id'=> $id)); 
      });

  
    Route::get('reservas', function () {
    return view('reservas.reservas');  
    });

    Route::get('contactos', function () {
       return view('contacto');
    });
