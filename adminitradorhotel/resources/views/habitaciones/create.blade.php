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
 
    <form method="post" action="{{ route('habitaciones.store') }}">        
        <div class="form-group">           
            @csrf           
            <label for="N_hab">N_hab:</label>           
            <input type="text" class="form-control" name="N_hab"/>        
        </div>        
        
        <div class="form-group">           
            @csrf           
            <label for="tipo">tipo:</label>           
            <input type="text" class="form-control" name="tipo"/>        
        </div> 
        
        <div class="form-group">           
            @csrf           
            <label for="diadisp">dia disponible:</label>           
            <input type="date" class="form-control" name="diadisp"/>        
        </div>                  
        
        <div class="form-group">           
            <label for="info">informacion :</label>           
            <input type="text" class="form-control" name="info"/>        
        </div>

        <div class="form-group">           
            <label for="cant_p">cantidad de personas :</label>           
            <input type="text" class="form-control" name="cant_p"/>        
        </div>

        <div class="form-group">           
            <label for="precio_dia">precio dia :</label>           
            <input type="text" class="form-control" name="precio_dia"/>        
        </div>        

        <button type="submit" class="btn btn-success mt-0 ml-3">Agregar</button>        
        <a href="{{ route('habitaciones.index') }}" class="btn btn-primary">Cancelar</a>               
    </form> 
 
  </div> 
 
</div> 
 
@endsection 