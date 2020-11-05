@extends('plantilla')
@section('contenido')

<form class="border p-3 form "method="get"  action="/vehiculos">

<div class="jumbotron text-center ">
    <div class="abs-center">
    @csrf
    <label> 
        <h1 >BIENVENIDOS A AUTOLOTE EL AMERICANO</h1>
        <h5>Made by: Elyin Acosta Gamez</h5>
        <img src="https://eldiariony.com/wp-content/uploads/sites/2/2015/08/im_20150318_autos_150319375.jpg?quality=80&strip=all&w=1024" width="500" height="400">
        </label>
      <button type="submit"   class="btn btn-success">INICIAR</button>

    </div>
</div>
</form>
@endsection
    

