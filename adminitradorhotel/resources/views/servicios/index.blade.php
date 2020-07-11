@extends('layout') 
 
@section('content') 
 
<style>   
    .uper {     
        margin-top: 40px;   
    } 
</style> 
 
<div class="uper"> 
 
  <a href="/" class="btn btn-primary">  Inicio </a>    
  <a href="{{ route('servicios.create') }}" class="btn btn-success mt-0 ml-0">  Agregar </a>  
 
  <font size=6>LISTADO DE estado de reservas</font> 
 
  @if(session()->get('success'))      
    <p class="text-right">         
        {{ session()->get('success') }}        
    </p>   
    @endif      
    
    <table class="table table-striped"> 
 
    <thead>         
        <tr>           
            <td>N° DE SERVICIO</td>           
            <td>NOMBRE</td>           
            <td>DESCRIPCION</td>  
            <td>PRECIO DIA</td>          
            <td width=20%></td>           
            <td colspan="2" width=20%>ACCION</td>         
        </tr>     
    </thead> 
 
    <tbody>         
         @foreach($servicios as $ser)         
        <tr>             
            <td>{{$ser->Rut_serv}}</td>             
            <td>{{$ser->nombre}}</td>             
            <td>{{$ser->Descripts}}</td>  
            <td>{{$ser->Preciodia_S}}</td>             
            <td></td>             
            <td><a href="{{ route('servicios.edit', '$ser->id')}}" class="btn btn-primary">Editar</a></td>             
            <td>                 
                <form action="{{ route('servicios.destroy', '$ser->id' )}}" method="post">                   
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