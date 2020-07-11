@extends('layout') 
 
@section('content') 
 
<style>   
    .uper {     
        margin-top: 40px;   
    } 
</style> 
 
<div class="card uper"> 
 
    <div class="card-header">     
        Nueva reserva  
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
 
    <form method="post" action="{{ route('reservas.store') }}">        
        <div class="form-group">           
            @csrf           
            <label for="N_rsv">N_rsv:</label>           
            <input type="text" class="form-control" name="N_rsv"/>        
        </div>        
        
        <div class="form-group">           
            @csrf           
            <label for="Rut_client">Rut client:</label>           
            <input type="text" class="form-control" name="Rut_client"/>        
        </div> 
        
        <div class="form-group">           
            @csrf           
            <label for="N_hab">N_hab:</label>           
            <input type="text" class="form-control" name="N_hab"/>        
        </div>                  
        
        <div class="form-group">           
            <label for="fecha_E">fecha_E :</label>           
            <input type="date" class="form-control" name="fecha_E"/>        
        </div>

        <div class="form-group">           
            <label for="fecha_S">fecha_S :</label>           
            <input type="date" class="form-control" name="fecha_S"/>        
        </div>

        <div class="form-group">           
            <label for="total_dias">total_dias :</label>           
            <input type="text" class="form-control" name="total_dias"/>        
        </div>        

        <div class="form-group">           
            <label for="servicios">servicios :</label>           
            <input type="text" class="form-control" name="servicios"/>        
        </div>

        <div class="form-group">           
            <label for="costo_dia">costo dia :</label>           
            <input type="text" class="form-control" name="costo_dia"/>        
        </div>

        <div class="form-group">           
            <label for="costo_total">costo total :</label>           
            <input type="text" class="form-control" name="costo_total"/>        
        </div>

        <div class="form-group">           
            <label for="descuento">descuento :</label>           
            <input type="text" class="form-control" name="descuento"/>        
        </div>

        <div class="form-group">           
            <label for="costobruto">costobruto :</label>           
            <input type="text" class="form-control" name="costobruto"/>        
        </div>

        <button type="submit" class="btn btn-success mt-0 ml-3">Agregar</button>        
        <a href="{{ route('reservas.index') }}" class="btn btn-primary">Cancelar</a>               
    </form> 
 
  </div> 
 
</div> 
 
@endsection 