@extends('plantilla')
@section('menu', View::make('navegacion.menu2'))
@section('contenido')
<h1>La suma es {{ $suma }}</h1>

{!! Form::open(['url' => 'foo/bar']) !!}
{{ Form::label('Hola', null, ['class' => 'control-label']) }}
{{ Form::text('Holame', "valor ", array_merge(['class' => 'form-control'], ['color'=>'red'])) }}
{!! Form::close() !!}
@endsection