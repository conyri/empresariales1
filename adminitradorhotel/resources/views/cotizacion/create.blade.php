@extends('layout') 
 
@section('content') 
 
<style>   
    .uper {     
        margin-top: 40px;   
    } 
</style> 
 
<div class="card uper"> 
 
    <div class="card-header">     
        Nuevo Cliente  
    </div> 
 
  <div class="card-body"> 
 
    @if ($errors->any()) 
 
    <div class="alert alert-danger">         
        <ul>            
            @foreach ($errors->all() as $error)               
                <li>{{ $error }}</li>             
            @endforeach         
        </ul>       
    </div><br /> 
 
    @endif 
 
    <form method="post" action="{{ route('cotizacion.store') }}">        
        <div class="form-group">           
            @csrf           
            <label for="id_cot">id_cot:</label>           
            <input type="text" class="form-control" name="id_cot"/>        
        </div>        
        
        <div class="form-group">           
            @csrf           
            <label for="Rut">Rut:</label>           
            <input type="text" class="form-control" name="Rut"/>        
        </div> 
        
        <div class="form-group">           
            @csrf           
            <label for="nombre">nombre:</label>           
            <input type="text" class="form-control" name="nombre"/>        
        </div>                  
        
        <div class="form-group">           
            <label for="apellido">apellido :</label>           
            <input type="text" class="form-control" name="apellido"/>        
        </div>        

        <div class="form-group">           
            <label for="correo">correo :</label>           
            <input type="text" class="form-control" name="correo"/>        
        </div>

        <div class="form-group">           
            <label for="tipo_hab">tipo_hab :</label>           
            <input type="text" class="form-control" name="tipo_hab"/>        
        </div> 

        <div class="form-group">           
            <label for="Fecha_E">Fecha_E :</label>           
            <input type="date" class="form-control" name="Fecha_E"/>        
        </div>

        <div class="form-group">           
            <label for="Fecha_S">Fecha_S :</label>           
            <input type="date" class="form-control" name="Fecha_S"/>        
        </div>

        <div class="form-group">           
            <label for="cant_per">cant_per :</label>           
            <input type="text" class="form-control" name="cant_per"/>        
        </div>

        <div class="form-group">           
            <label for="adm">adm :</label>           
            <input type="text" class="form-control" name="adm"/>        
        </div>

        <button type="submit" class="btn btn-success mt-0 ml-3">Agregar</button>        
        <a href="{{ route('cotizacion.index') }}" class="btn btn-primary">Cancelar</a>               
    </form> 
 
  </div> 
 
</div> 
 
@endsection 