@extends('layout') 
 
@section('content') 
 
<style>   
    .uper {     
        margin-top: 40px;   
    } 
</style> 
 
<div class="uper"> 
 
  <a href="/" class="btn btn-primary">  Inicio </a>    
  <a href="{{ route('admistrador.create') }}" class="btn btn-success mt-0 ml-0">  Agregar </a>  
 
  <font size=6>LISTADO DE PRODUCTOS</font> 
 
  @if(session()->get('success'))      
    <p class="text-right">         
        {{ session()->get('success') }}        
    </p>   
    @endif      
    
    <table class="table table-striped"> 
 
    <thead>         
        <tr>           
            <td>Rut_administrador</td>           
            <td>nombre</td>           
            <td>cargo</td>
            <td>correo</td>
            <td>clave</td>             
            <td width=20%></td>           
            <td colspan="2" width=20%>ACCION</td>         
        </tr>     
    </thead> 
 
    <tbody>         
        @foreach($admistradors as $adm)         
        <tr>             
            <td>{{$adm->Rut_Adm}}</td>             
            <td>{{$adm->nombre}}</td>             
            <td>{{$adm->cargo}}</td>
            <td>{{$adm->correo}}</td>  
            <td>{{$adm->clave}}</td>               
            <td></td>             
            <td><a href="{{ route('admistradors.edit',$adm->id)}}" class="btn btn-primary">Editar</a></td>             
            <td>                 
                <form action="{{ route('admistradors.destroy', $adm->id)}}" method="post">                   
                    @csrf                   
                    @method('DELETE')                   
                    <button class="btn btn-danger" type="submit">Eliminar</button>                 
                </form>             
            </td>         
        </tr>         
        @endforeach     
    </tbody> 
 
  </table> 
</div> 
 
@endsection