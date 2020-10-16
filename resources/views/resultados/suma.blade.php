@extends('plantilla')
@section('contenido')
<h1>La suma es {{ $suma }}</h1>

{!! Form::open(['url' => 'foo/bar']) !!}
{{ Form::label('La suma es', null, ['class' => 'control-label']) }}
{{ Form::text('Holame', $suma, array_merge(['class' => 'form-control'], ['color'=>'red'])) }}
{!! Form::close() !!}
@endsection