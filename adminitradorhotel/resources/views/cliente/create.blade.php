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
 
    <form method="post" action="{{ route('cliente.store') }}">        
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
            <label for="fono">fono :</label>           
            <input type="text" class="form-control" name="fono"/>        
        </div> 

        <div class="form-group">           
            <label for="correo">correo :</label>           
            <input type="text" class="form-control" name="correo"/>        
        </div>

        <div class="form-group">           
            <label for="clave">clave :</label>           
            <input type="text" class="form-control" name="clave"/>        
        </div>

        <button type="submit" class="btn btn-success mt-0 ml-3">Agregar</button>        
        <a href="{{ route('cliente.index') }}" class="btn btn-primary">Cancelar</a>               
    </form> 
 
  </div> 
 
</div> 
 
@endsection 