<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cotizacion; 

class cotizacionController extends Controller
{
    public function index() {         
        $cotizacion = cotizacion::all();         
        return view('cotizacion.index', compact('cotizacion'));     
    } 
 
 
     
    public function create() {         
        return view('cotizacion.create');     
    } 
 
   
    public function store(Request $request){       
        $request->validate([         
            'id_cot'=>'required|integer',         
            'Rut' =>'required',         
            'nombre'=>'required',
            'apellido'=>'required',
            'correo'=>'required',
            'tipo_hab'=>'required',
            'Fecha_E'=>'required',
            'Fecha_S'=>'required',
            'cant_per'=>'required',
            'adm'=>'required'        
            ]);       
            
            $cotizacion = new cotizacion([         
                'id_cot' => $request->get('id_cot'),         
                'Rut'  => $request->get('Rut'),         
                'nombre' => $request->get('nombre'),
                'apellido' => $request->get('apellido'),
                'correo' => $request->get( 'correo'),
                'tipo_hab' => $request->get('tipo_hab'),
                'Fecha_E' => $request->get('Fecha_E'),
                'Fecha_S' => $request->get('Fecha_S'),
                'cant_per' => $request->get('cant_per'),
                'adm' => $request->get('adm')      
            ]);       
            
            $cotizacion->save();       
            return redirect('/cotizacion')->with('success', 'Agregado !');     
        } 
 
        
    public function edit($id) {         
        $cotizacion = cotizacion::find($id);         
        return view('cotizacion.edit', [$id]);     
    }
    
     public function update(Request $request, $id) {         
         $request->validate([                    
            'id_cot'=>'required|integer',         
            'Rut' =>'required',         
            'nombre'=>'required',
            'apellido'=>'required',
            'correo'=>'required',
            'tipo_hab'=>'required',
            'Fecha_E'=>'required',
            'Fecha_S'=>'required',
            'cant_per'=>'required',
            'adm'=>'required'           
        ]);         
             
             $cot = $cotizacion::find($id);                  
             $cot->id_cot  = $request->get('id_cot');         
             $cot->Rut = $request->get('Rut');
             $cot->nombre = $request->get('nombre');
             $cot->apellido = $request->get('apellido');
             $cot->correo = $request->get('correo');
             $cot->tipo_hab = $request->get('tipo_hab');
             $cot->Fecha_E = $request->get('Fecha_E');
             $cot->Fecha_S = $request->get('Fecha_S');
             $cot->cant_per = $request->get('cant_per');
             $cot->adm = $request->get('adm');         
             $cot->save();         
             return redirect('/cotizacion')->with('success', 'Actualizado!');     
    } 
    
    public function destroy($id) {         
        $cot = cotizacion::find($id);         
        $cot->delete();         
        return redirect('/cotizacion')->with('success', 'Eliminado!');     
    } 
 
    // REGRESA A PAGINA welcome QUE ESTA EN LA CARPETA  PRINCIPAL     
    public function back() {        
        return view('/welcome');     
    } 
 
    public function show($id) { } 
} 