@extends('plantilla')
@section('contenido')



<form class="jumbotron" method="POST" action="/vehiculos">
    @csrf


    <div class="jumbotron form-group">
      <label for="propietario">PROPIETARIO</label>
      <input type="text" class="form-control" name="propietario" id="propietario" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted">Solo se permite texto</small>
      
  </div>
    

    <label for="colores">Color:</label>
      <select  name="color" id="color">
        <option value="rojo">ROJO</option>
        <option value="azul">AZUL</option>
        <option value="blanco">BLANCO</option>
        <option value="negro">NEGRO</option>

      </select> 

    <label for="marcas">Marcas:</label>

        <select  name="marca"  id="marca">
        <option value="kia">KIA</option>
        <option value="isuzu">ISUZU</option>
        <option value="toyota">TOYOTA</option>
       
      </select>

       
    <div class="form-group">
        <label for="placa">PLACA</label>
        <input type="text" class="form-control" name="placa" id="placa" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Solo se permite texto</small>
        
    </div>
    <div class="form-group">
        <label for="chasis">N° CHASIS</label>
        <input type="text" class="form-control" name="chasis" id="chasis" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Solo se permite texto</small>
        
    </div>


    <button type="submit" class="btn btn-primary">GUARDAR</button>
  
</form>


@endsection