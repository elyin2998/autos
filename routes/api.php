<?php

use App\Http\Controllers\SumaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/{n1}/{n2}', [SumaController::class,'suma']);

Route::post('/suma', function () {
    return "Metodo post";
});

Route::get('/suma', function () use ($users) {
    $count = count($users);
    for ($i = 0; $i < $count; $i++) {
        dump($users[$i]["name"]);
    }
});

Route::get('/sexo', function () use ($users) {
    $varones = 0;
    $mujeres = 0;
    foreach ($users as $user) {
        if ($user['sexo'] === 'M') {
            $varones += 1;
        } else {
            $mujeres+=1;
        }
    }

    $data=[
        'varones'=>$varones,
        'mujeres'=>$mujeres
    ];

    return response()->json($data,200);
});

