@extends('layout') 
 
@section('content') 
 
<style>   
    .uper {     
        margin-top: 40px;   
    } 
</style> 
 
<div class="card uper"> 
    <a href="{{ route('est_revs.index') }}" class="btn btn-primary">  ATRAS </a>
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
 
    <form method="post" action="{{ route('est_revs.store') }}">        
        <div class="form-group">           
            @csrf           
            <label for="id_est">id_est:</label>           
            <input type="text" class="form-control" name="id_est"/>        
        </div>        
        
        <div class="form-group">           
            @csrf           
            <label for="reserva">reserva:</label>           
            <input type="text" class="form-control" name="reserva"/>        
        </div> 
        
        <div class="form-group">           
            @csrf           
            <label for="estado">estado:</label>           
            <input type="text" class="form-control" name="estado"/>        
        </div>                  
        
        <div class="form-group">           
            <label for="admin">admin :</label>           
            <input type="text" class="form-control" name="admin"/>        
        </div>        

        <button type="submit" class="btn btn-success mt-0 ml-3">Agregar</button>        
        <a href="{{ route('est_revs.index') }}" class="btn btn-primary">Cancelar</a>               
    </form> 
 
  </div> 
 
</div> 
 
@endsection 