<?php

namespace App\Http\Controllers;
use App\servicio;
use Illuminate\Http\Request;

class serviciosController extends Controller
{
    public function index() {         
        $servicios = servicio::all();         
        return view('servicios.index', compact('servicios'));     
    } 
 
 
     
    public function create() {         
        return view('servicios.create');     
    } 
 
   
    public function store(Request $request){       
        $request->validate([         
            'Rut_serv'=>'required|integer',         
            'nombre' =>'required',         
            'Descripts'=>'required',
            'Preciodia_S'=>'required'        
            ]);       
            
            $servicios = new servicio([         
                'Rut_serv' => $request->get('Rut_serv'),         
                'nombre'  => $request->get('nombre'),         
                'Descripts' => $request->get('Descripts'),
                'Preciodia_S' => $request->get('Preciodia_S')      
            ]);       
            
            $servicios->save();       
            return redirect('/servicios')->with('success', 'Agregado !');     
        } 
 
        
    public function edit($id) {         
        $servicios = servicio::find($id);         
        return view('servicios.edit', [$id]);     
    }
    
     public function update(Request $request, $id) {         
         $request->validate([                    
            'Rut_serv'=>'required|integer',         
            'nombre' =>'required',         
            'Descripts'=>'required',
            'Preciodia_S'=>'required'                   
            ]);          
             $serv = $servicios::find($id);                  
             $serv->Rut_serv  = $request->get('Rut_serv');         
             $serv->nombre = $request->get('nombre');
             $serv->Descripts = $request->get('Descripts');
             $serv->Preciodia_S = $request->get('Preciodia_S');         
             $serv->save();         
             return redirect('/servicios')->with('success', 'Actualizado!');     
    } 
    
    public function destroy($id) {         
        $serv = servicio::find($id);         
        $serv->delete();         
        return redirect('/servicios')->with('success', 'Eliminado!');     
    } 
 
    // REGRESA A PAGINA welcome QUE ESTA EN LA CARPETA  PRINCIPAL     
    public function back() {        
        return view('/welcome');     
    } 
 
    public function show($id) { } 
} 