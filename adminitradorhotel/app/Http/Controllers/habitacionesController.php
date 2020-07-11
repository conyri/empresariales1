<?php

namespace App\Http\Controllers;
use App\habitaciones;
use Illuminate\Http\Request;

class habitacionesController extends Controller
{
    public function index() {         
        $habitaciones = habitaciones::all();         
        return view('habitaciones.index', compact('habitaciones'));     
    } 
 
 
     
    public function create() {         
        return view('habitaciones.create');     
    } 
 
   
    public function store(Request $request){       
        $request->validate([         
            'N_hab'=>'required|integer',         
            'tipo' =>'required',         
            'diadisp'=>'required',
            'info'=>'required',
            'cant_p'=>'required',
            'precio_dia'=>'required'        
            ]);       
            
            $habitaciones = new habitaciones([         
                'N_hab' => $request->get('N_hab'),         
                'tipo'  => $request->get('tipo'),         
                'diadisp' => $request->get('diadisp'),
                'info' => $request->get('info'),
                'cant_p' => $request->get( 'cant_p'),
                'precio_dia' => $request->get('precio_dia')
            ]);       
            
            $habitaciones->save();       
            return redirect('/habitaciones')->with('success', 'Agregado !');     
        } 
 
        
    public function edit($id) {         
        $habitaciones = habitaciones::find($id);         
        return view('habitaciones.edit', [$id]);     
    }
    
     public function update(Request $request, $id) {         
         $request->validate([                    
            'N_hab'=>'required|integer',         
            'tipo' =>'required',         
            'diadisp'=>'required',
            'info'=>'required',
            'cant_p'=>'required',
            'precio_dia'=>'required'           
        ]);         
             
             $hab = $habitaciones::find($id);                  
             $hab->N_hab  = $request->get('N_hab');         
             $hab->tipo = $request->get('tipo');
             $hab->diadisp = $request->get('diadisp');
             $hab->info = $request->get('info');
             $hab->cant_p = $request->get('cant_p');
             $hab->precio_dia = $request->get('precio_dia');        
             $hab->save();         
             return redirect('/habitaciones')->with('success', 'Actualizado!');     
    } 
    
    public function destroy($id) {         
        $cot = habitaciones::find($id);         
        $cot->delete();         
        return redirect('/habitaciones')->with('success', 'Eliminado!');     
    } 
 
    // REGRESA A PAGINA welcome QUE ESTA EN LA CARPETA  PRINCIPAL     
    public function back() {        
        return view('/welcome');     
    } 
 
    public function show($id) { } 
}