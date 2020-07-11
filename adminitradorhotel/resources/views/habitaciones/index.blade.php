@extends('layout') 
 
@section('content') 
 
<style>   
    .uper {     
        margin-top: 40px;   
    } 
</style> 
 
<div class="uper"> 
 
  <a href="/" class="btn btn-primary">  Inicio </a>    
  <a href="{{ route('habitaciones.create') }}" class="btn btn-success mt-0 ml-0">  Agregar </a>  
 
  <font size=6>LISTADO DE HABITACIONES</font> 
 
  @if(session()->get('success'))      
    <p class="text-right">         
        {{ session()->get('success') }}        
    </p>   
    @endif      
    
    <table class="table table-striped"> 
 
    <thead>         
        <tr>           
            <td>N° DE HABITACION</td>           
            <td>TIPO</td>           
            <td>DIA DIPONIBLE</td>  
            <td>INFORMACION</td>
            <td>CANTIDAD DE PERSONAS</td>
            <td>PRECIO POR DIA</td>          
            <td width=20%></td>           
            <td colspan="2" width=20%>ACCION</td>         
        </tr>     
    </thead> 
 
    <tbody>         
         @foreach($habitaciones as $hab)         
        <tr>             
            <td>{{$hab->N_hab}}</td>             
            <td>{{$hab->tipo}}</td>             
            <td>{{$hab->diadis}}</td>  
            <td>{{$hab->info}}</td>
            <td>{{$hab->cant_p}}</td>
            <td>{{$hab->precio_dia}}</td>             
            <td></td>             
            <td><a href="{{ route('habitaciones.edit', '$hab->id')}}" class="btn btn-primary">Editar</a></td>             
            <td>                 
                <form action="{{ route('habitaciones.destroy', '$hab->id' )}}" method="post">                   
                    @csrf                   
                    @method('DELETE')                   
                    <button class="btn btn-danger" type="submit" title='delete'>Eliminar</button>                 
                </form>             
            </td>         
        </tr>         
        @endforeach     
    </tbody> 
 
  </table> 
</div> 
 
@endsection