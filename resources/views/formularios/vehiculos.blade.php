@extends('plantilla')
@section('contenido')

<form class="jumbotron" method="POST" action="/vehiculos">
    @csrf
   

    <label for="colores">Color:</label>
      <select  name="color" id="color">
        <option value="rojo">ROJO</option>
        <option value="azul">AZUL</option>
        <option value="blanco">BLANCO</option>
        <option value="negro">NEGRO</option>

      </select> 

    <label for="marcas">Marcas:</label>

        <select  name="marca"  id="marca">
        <option value="toyota">Toyota</option>
        <option value="isuzu">Isuzu</option>
        <option value="kia">Kia</option>
        <option value="ford">Ford</option>
       
      </select>

       
    <div class="form-group">
        <label for="placa">Placa</label>
        <input type="text" class="form-control" name="placa" id="placa" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Solo se permite texto</small>
        
    </div>
    <div class="form-group">
        <label for="chasis">N° Chasis</label>
        <input type="text" class="form-control" name="chasis" id="chasis" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Solo se permite texto</small> 
    </div>

    <div class="form-group">
      <label for="propietario">Propietario</label>
      <input type="text" class="form-control" name="propietario" id="propietario" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted">Solo se permite texto</small> 
    </div>
    
   <center></center> <button type="submit" class="btn btn-primary">GUARDAR</button>
  
</form>


@endsection