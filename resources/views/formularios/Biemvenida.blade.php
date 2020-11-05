@extends('plantilla')
@section('contenido')


        
<form class="border p-3 form "method="get"  action="/vehiculos">

<div class="jumbotron text-center ">
    <div class="abs-center">
    @csrf
    <label> 
        <h1 >BIEMVENIDOS </h1>
        <h5>Elaborado por: Junior Rafael Gaitan Rios</h5>
        
    </label>

   <button type="submit"   class="btn btn-success">INICIAR</button>

</div>
</div>
</form>
@endsection
    

