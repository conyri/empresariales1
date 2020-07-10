@extends('layout') 
 
@section('content') 
 
<style>   
    .uper {     
        margin-top: 40px;   
    } 
</style> 
 
<div class="uper"> 
 
  <a href="/" class="btn btn-primary">  Inicio </a>    
  <a href="{{ route('cotizacion.create') }}" class="btn btn-success mt-0 ml-0">  Agregar </a>  
 
  <font size=6>LISTADO DE COTIZACIONES</font> 
 
  @if(session()->get('success'))      
    <p class="text-right">         
        {{ session()->get('success') }}        
    </p>   
    @endif      
    
    <table class="table table-striped"> 
 
    <thead>         
        <tr>           
            <td>N° COTIZACION</td>           
            <td>RUT</td>           
            <td>NOMBRE</td>  
            <td>APELLIDO</td>
            <td>CORREO</td>
            <td>TIPO DE HABITACION</td> 
            <td>FECHA DE ENTRADA</td> 
            <td>FECHA DE SALIDA</td> 
            <td>CONTIDAD DE PERSONAS</td> 
            <td>ADMINISTRADOR</td>          
            <td width=20%></td>           
            <td colspan="2" width=20%>ACCION</td>         
        </tr>     
    </thead> 
 
    <tbody>         
         @foreach($cotizacion as $cot)         
        <tr>             
            <td>{{$cot->id_cot}}</td>             
            <td>{{$cot->Rut}}</td>             
            <td>{{$cot->nombre}}</td>  
            <td>{{$cot->apellido}}</td>
            <td>{{$cot->correo}}</td> 
            <td>{{$cot->tipo_hab}}</td>
            <td>{{$cot->Fecha_E}}</td>
            <td>{{$cot->Fecha_S}}</td>
            <td>{{$cot->cant_per}}</td>
            <td>{{$cot->adm}}</td>             
            <td></td>             
            <td><a href="{{ route('cotizacion.edit', '$cot->id')}}" class="btn btn-primary">Editar</a></td>             
            <td>                 
                <form action="{{ route('cotizacion.destroy', '$cot->id' )}}" method="post">                   
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