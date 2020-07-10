@extends('layout') 
 
@section('content') 
 
<style>   
    .uper {     
        margin-top: 40px;   
    } 
</style> 
 
<div class="uper"> 
 
  <a href="/" class="btn btn-primary">  Inicio </a>    
  <a href="{{ route('cliente.create') }}" class="btn btn-success mt-0 ml-0">  Agregar </a>  
 
  <font size=6>LISTADO DE clientes</font> 
 
  @if(session()->get('success'))      
    <p class="text-right">         
        {{ session()->get('success') }}        
    </p>   
    @endif      
    
    <table class="table table-striped"> 
 
    <thead>         
        <tr>           
            <td>RUT</td>           
            <td>NOMBRE</td>           
            <td>APELLIDO</td>  
            <td>TELEFONO</td>
            <td>CORREO</td>
            <td>CLAVE</td>          
            <td width=20%></td>           
            <td colspan="2" width=20%>ACCION</td>         
        </tr>     
    </thead> 
 
    <tbody>         
         @foreach($clientes as $cli)         
        <tr>             
            <td>{{$cli->Rut}}</td>             
            <td>{{$cli->nombre}}</td>             
            <td>{{$cli->apellido}}</td>  
            <td>{{$cli->fono}}</td>
            <td>{{$cli->correo}}</td> 
            <td>{{$cli->clave}}</td>             
            <td></td>             
            <td><a href="{{ route('cliente.edit', '$cli->id')}}" class="btn btn-primary">Editar</a></td>             
            <td>                 
                <form action="{{ route('cliente.destroy', '$cli->id' )}}" method="post">                   
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