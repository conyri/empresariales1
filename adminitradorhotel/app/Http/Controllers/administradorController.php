<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\administrador;

class administradorController extends Controller
{
    public function index() {         
        $administradors = administradors::all();         
        return view('administrador.index', compact('administradors'));     
    } 
 
 
     
    public function create() {         
        return view('administradors.create');     
    } 
 
   
    public function store(Request $request){       
        $request->validate([         
            'Rut_Adm'=>'required',         
            'nombre' =>'required',         
            'cargo'=>'required',
            'correo'=>'required', 
            'clave'=>'required|integer'     
            ]);       
            
            $administradors = new administrador([         
                'Rut_Adm' => $request->get('Rut_Adm'),         
                'nombre'  => $request->get('nombre'),         
                'cargo' => $request->get('cargo'),
                'correo' => $request->get( 'correo'),
                'clave' => $request->get( 'clave'),
            ]);       
            
            $administradors->save();       
            return redirect('/administrador')->with('success', 'Agregado !');     
        } 
 
        
    public function edit($id) {         
        $administradors = administrador::find($id);         
        return view('administradors.edit', [$id]);     
    }
    
     public function update(Request $request, $id) {         
         $request->validate([           
            'Rut_Adm'=>'required',         
            'nombre' =>'required',         
            'cargo'=>'required',
            'correo'=>'required', 
            'clave'=>'required|integer'          
             ]);         
             
             $adm = $administradors::find($id);         
             $adm->Rut = $request->get('Rut_Adm');         
             $adm->nombre  = $request->get('nombre');         
             $adm->cargo = $request->get('cargo');
             $adm->correo = $request->get('correo');
             $adm->clave = $request->get('clave');
             $adm->save();         
             return redirect('/administrador')->with('success', 'Actualizado!');     
    } 
    
    public function destroy($id) {         
        $cli = administrador::find($id);         
        $cli->delete();         
        return redirect('/administrador')->with('success', 'Eliminado!');     
    } 
 
    // REGRESA A PAGINA welcome QUE ESTA EN LA CARPETA  PRINCIPAL     
    public function back() {        
        return view('/welcome');     
    } 
 
    public function show($id) { }
}
