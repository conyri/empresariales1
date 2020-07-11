<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Esta_resv;

class est_resvsController extends Controller
{
    public function index() {         
        $esta_resv = esta_resv::all();         
        return view('est_revs.index', compact('esta_resv'));     
    } 
 
 
     
    public function create() {         
        return view('est_revs.create');     
    } 
 
   
    public function store(Request $request){       
        $request->validate([         
            'id_est'=>'required|integer',         
            'reserva' =>'required',         
            'estado'=>'required',
            'admin'=>'required'        
            ]);       
            
            $esta_resv = new esta_resv([         
                'id_est' => $request->get('id_est'),         
                'reserva'  => $request->get('reserva'),         
                'estado' => $request->get('estado'),
                'admin' => $request->get('admin')      
            ]);       
            
            $esta_resv->save();       
            return redirect('/est_revs')->with('success', 'Agregado !');     
        } 
 
        
    public function edit($id) {         
        $esta_resv = esta_resv::find($id);         
        return view('est_revs.edit', [$id]);     
    }
    
     public function update(Request $request, $id) {         
         $request->validate([                    
            'id_est'=>'required|integer',         
            'reserva' =>'required',         
            'estado'=>'required',
            'admin'=>'required'           
        ]);         
             
             $esta = $esta_resv::find($id);                  
             $esta->id_est  = $request->get('id_est');         
             $esta->reserva = $request->get('reserva');
             $esta->estado = $request->get('estado');
             $esta->admin = $request->get('admin');         
             $esta->save();         
             return redirect('/est_revs')->with('success', 'Actualizado!');     
    } 
    
    public function destroy($id) {         
        $esta = esta_resv::find($id);         
        $esta->delete();         
        return redirect('/est_revs')->with('success', 'Eliminado!');     
    } 
 
    // REGRESA A PAGINA welcome QUE ESTA EN LA CARPETA  PRINCIPAL     
    public function back() {        
        return view('/welcome');     
    } 
 
    public function show($id) { } 
} 