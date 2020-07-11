@extends('layout') 
 
@section('content') 
 
<style>   
    .uper {     
        margin-top: 40px;   
    } 
</style> 
 
<div class="card uper"> 
 
    <div class="card-header">     
        Nuevo Servicio  
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
 
    <form method="post" action="{{ route('servicios.store') }}">        
        <div class="form-group">           
            @csrf           
            <label for="Rut_serv">Rut_serv:</label>           
            <input type="text" class="form-control" name="Rut_serv"/>        
        </div>        
        
        <div class="form-group">           
            @csrf           
            <label for="nombre">nombre:</label>           
            <input type="text" class="form-control" name="nombre"/>        
        </div> 
        
        <div class="form-group">           
            @csrf           
            <label for="Descripts">Descripcion:</label>           
            <input type="text" class="form-control" name="Descripts"/>        
        </div>                  
        
        <div class="form-group">           
            <label for="Preciodia_S">Precio dia :</label>           
            <input type="text" class="form-control" name="Preciodia_S"/>        
        </div>        

        <button type="submit" class="btn btn-success mt-0 ml-3">Agregar</button>        
        <a href="{{ route('servicios.index') }}" class="btn btn-primary">Cancelar</a>               
    </form> 
 
  </div> 
 
</div> 
 
@endsection 