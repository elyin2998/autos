<?php

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;
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

$users = [
    [
        'id' => 1,
        'name' => 'Carlos Lopez',
        'sexo' => 'M'
    ],
    [
        'id' => 2,
        'name' => 'Pedro Martinez',
        'sexo' => 'M'
    ],
    [
        'id' => 3,
        'name' => 'Marina Chacon',
        'sexo' => 'F'
    ],
    [
        'id' => 4,
        'name' => 'Blanca Rojas',
        'sexo' => 'F'
    ],
    [
        'id' => 5,
        'name' => 'Alvaro Obando',
        'sexo' => 'M'
    ]
];


Route::get('/', function () {
    return view('welcome');
});

Route::get('/suma/{numero1}/{numero2}', function ($numero1, $numero2) {
    $suma = $numero1 + $numero2;
    $message = "La suma es $suma";
    return response()->json($message, 200);
});

Route::get('/sumas', function (HttpRequest $request) {
    $suma = $request->n1 + $request->n2;
    $message = "La suma es $suma";
    return response()->json($message);
});

Route::get('/for', function (HttpRequest $request) {
    if ($request->inicio and $request->fin) {
        for ($n = $request->inicio; $n <= $request->fin; $n++) {
            dump($n);
        }
    } else {
        return "No se puede hacer la operación";
    }
});

Route::get('/for/{inicio}/{fin}', function ($inicio, $fin) {
    for ($n = $inicio; $n <= $fin; $n++) {
        dump($n);
    }
});

Route::get('/users', function () use ($users) {
    return response()->json($users, 200);
});

Route::get('/nombre', function () {
    return response()->json("Mi nombre es Itihell", 200);
});

Route::get('/users/{user}', function ($user) {
    return response()->json($user);
});

Route::get('/users/{user}/{id}', function ($user, $id, Request $request) {
    $data = [
        'user' => $user,
        'id' => $id,
        'request' => $request->all()
    ];
    return response()->json($data, 200);
});

Route::post('/users', function (HttpRequest $request) use ($users) {
    dd($request->all());
});
