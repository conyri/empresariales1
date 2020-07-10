@extends('layout') 
 
@section('content') 
 
<style>   
    .uper {     
        margin-top: 40px;   
    } 
</style> 
 
<div class="card uper"> 
 
    <div class="card-header">     
        Editar CLIENTE  
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
 
    <form method="post" action="{{ route('cliente.update', $clientes->id) }}">        
        @method('PATCH')        
        @csrf 
 
        <div class="form-group">           
            <label for="name">Rut</label>           
            <input type="text" class="form-control" name="Rut" value={{ $clientes->Rut}} />        
        </div> 
 
        <div class="form-group">           
            <label for="price">nombre:</label>           
            <input type="text" class="form-control" name="nombre" value={{ $clientes->nombre}} />        
        </div> 
 
        <div class="form-group">           
            <label for="quantity">apellido:</label>           
            <input type="text" class="form-control" name="apellido" value={{ $clientes->apellido }} />        
        </div> 

        <div class="form-group">           
            <label for="quantity">Telefono:</label>           
            <input type="text" class="form-control" name="Telefono" value={{ $clientes->Telefono }} />        
        </div>
 
       <button type="submit" class="btn btn-success mt-0 ml-3">Actualizar</button>        
       <a href="{{ route('clientes.index') }}" class="btn btn-primary">Cancelar</a> 
 
    </form> 
 
  </div> 
 
</div> 
 
@endsection