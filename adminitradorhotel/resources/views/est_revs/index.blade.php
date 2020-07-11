@extends('layout') 
 
@section('content') 
 
<style>   
    .uper {     
        margin-top: 40px;   
    } 
</style> 
 
<div class="uper"> 
 
  <a href="/" class="btn btn-primary">  Inicio </a>    
  <a href="{{ route('est_revs.create') }}" class="btn btn-success mt-0 ml-0">  Agregar </a>  
  
 
  <font size=6>LISTADO DE estado de reservas</font> 
 
  @if(session()->get('success'))      
    <p class="text-right">         
        {{ session()->get('success') }}        
    </p>   
    @endif      
    
    <table class="table table-striped"> 
 
    <thead>         
        <tr>           
            <td>N° DE ESTADO</td>           
            <td>RESERVA</td>           
            <td>ESTADO</td>  
            <td>ADMINITADOR</td>          
            <td width=20%></td>           
            <td colspan="2" width=20%>ACCION</td>         
        </tr>     
    </thead> 
 
    <tbody>         
         @foreach($esta_resv as $esta)         
        <tr>             
            <td>{{$esta->id_est}}</td>             
            <td>{{$esta->reserva}}</td>             
            <td>{{$esta->estado}}</td>  
            <td>{{$esta->admin}}</td>             
            <td></td>             
            <td><a href="{{ route('est_revs.edit', '$esta->id')}}" class="btn btn-primary">Editar</a></td>             
            <td>                 
                <form action="{{ route('est_revs.destroy', '$esta->id' )}}" method="post">                   
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