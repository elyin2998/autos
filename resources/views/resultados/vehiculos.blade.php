@extends('plantilla')
@section('contenido')

<div>
    {!! Form::open(['url' => 'foo/bar']) !!}
    {{ Form::label('Se registro el vehiculo con los datos', null, ['class' => 'control-label']) }}
@foreach ($result as $item)
{{ Form::text('name',$item, array_merge(['class' => 'form-control'], ['color'=>'red'])) }}

@endforeach
{!! Form::close() !!}
</div>

@endsection