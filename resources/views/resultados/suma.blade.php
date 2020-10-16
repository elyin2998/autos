@extends('plantilla')
@section('menu', View::make('navegacion.menu2'))
@section('contenido')
<h1>La suma es  {{ $suma }}</h1>
@endsection