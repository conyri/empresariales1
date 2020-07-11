@extends('layout') 
 
@section('content') 
 
<style>   
    .uper {     
        margin-top: 40px;   
    } 
</style> 
 
<div class="uper"> 
 
  <a href="/" class="btn btn-primary">  Inicio </a>    
  <a href="{{ route('reservas.create') }}" class="btn btn-success mt-0 ml-0">  Agregar </a>  
 
  <font size=6>LISTADO DE COTIZACIONES</font> 
 
  @if(session()->get('success'))      
    <p class="text-right">         
        {{ session()->get('success') }}        
    </p>   
    @endif      
    
    <table class="table table-striped"> 
 
    <thead>         
        <tr>           
            <td>N° DE RESERVA</td>           
            <td>RUT DEL CLIENTE </td>           
            <td>N° DE HABITACION</td>  
            <td>FECHA DE ENTRADA</td>
            <td>FECHA DE SALIDA</td>
            <td>TIPO DE HABITACION</td> 
            <td>TOTAL DE DIAS</td> 
            <td>FECHA DE SALIDA</td> 
            <td>SERVICIOS</td> 
            <td>COSTO DIA</td>
            <td>CCOSTO TOTAL</td> 
            <td>DESCUENTOS</td>
            <td>COSTO BRUTO</td>           
            <td width=20%></td>           
            <td colspan="2" width=20%>ACCION</td>         
        </tr>     
    </thead> 
 
    <tbody>         
         @foreach($reservas as $res)         
        <tr>             
            <td>{{$res->N_rsv}}</td>             
            <td>{{$res->Rut_client}}</td>             
            <td>{{$res->N_hab}}</td>  
            <td>{{$res->fecha_E}}</td>
            <td>{{$res->fecha_S}}</td> 
            <td>{{$res->total_dias}}</td>
            <td>{{$res->servicios}}</td>
            <td>{{$res->costo_dia}}</td>
            <td>{{$res->costo_total}}</td> 
            <td>{{$res->descuentol}}</td> 
            <td>{{$res->costobruto}}</td>             
            <td></td>             
            <td><a href="{{ route('reservas.edit', '$res->id')}}" class="btn btn-primary">Editar</a></td>             
            <td>                 
                <form action="{{ route('reservas.destroy', '$res->id' )}}" method="post">                   
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