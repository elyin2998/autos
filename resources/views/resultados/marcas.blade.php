@extends('plantilla')
@section('contenido')
{!! Form::open(['url' => 'foo/bar']) !!}
{{ Form::label('Se registro la marca ', null, ['class' => 'control-label']) }}
{{ Form::text('Holame', $marca, array_merge(['class' => 'form-control'], ['color'=>'red'])) }}
{!! Form::close() !!}
@endsection