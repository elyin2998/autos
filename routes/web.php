<?php

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});

Route::get('/sumar', function () {
    return view('formularios.dosNumeros');
});

Route::post('suma', function (HttpRequest $request) {
    $suma=$request->numero_uno+$request->numero_dos;
    $request->offsetSet('suma',$suma);
    return view('resultados.suma',['suma'=>$request->suma]);
});
