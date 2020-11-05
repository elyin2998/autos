<?php

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('formularios.Biemvenida');
});

Route::get('/vehiculos', function () {
    return view('formularios.vehiculos');
});

Route::post('vehiculos', function (HttpRequest $request) {
    
    $dataa = [
       
        'color' => $request->color,
        'marcas' => $request->marca,
        'placa' => $request->placa,
        'chasis' => $request->chasis,
        'propietario' => $request->propietario,
    ];
    return view('resultados.vehiculos',['result'=>$dataa]);

    
});




Route::get('/Marca', function () {
    return view('formularios.Marcas');
});

Route::post('Marcas', function (HttpRequest $request) {
    $marca= $request->nombre;
    $request->offsetSet('marcas',$marca);
    return view('resultados.marcas',['marca'=> $marca]);
});


