<?php

namespace App\Http\Controllers;
use App\reservas;
use Illuminate\Http\Request;

class reservasController extends Controller
{
    public function index() {         
        $reservas = reservas::all();         
        return view('reservas.index', compact('reservas'));     
    } 
 
 
     
    public function create() {         
        return view('reservas.create');     
    } 
 
   
    public function store(Request $request){       
        $request->validate([         
            'N_rsv'=>'required|integer',         
            'Rut_client' =>'required',         
            'N_hab'=>'required',
            'fecha_E'=>'required',
            'fecha_S'=>'required',
            'total_dias'=>'required',
            'servicios'=>'required',
            'costo_dia'=>'required',
            'costo_total'=>'required',
            'descuento'=>'required',
            'costobruto'=>'required'        
            ]);       
            
            $reservas = new reservas([         
                'N_rsv' => $request->get('N_rsv'),         
                'Rut_client'  => $request->get('Rut_client'),         
                'N_hab' => $request->get('N_hab'),
                'fecha_E' => $request->get('fecha_E'),
                'fecha_S' => $request->get( 'fecha_S'),
                'total_dias' => $request->get('total_dias'),
                'servicios' => $request->get('servicios'),
                'costo_dia' => $request->get('costo_dia'),
                'costo_total' => $request->get('costo_total'),
                'descuento' => $request->get('descuento'),
                'costobruto' => $request->get('costobruto')
            ]);       
            
            $reservas->save();       
            return redirect('/reservas')->with('success', 'Agregado !');     
        } 
 
        
    public function edit($id) {         
        $reservas = reservas::find($id);         
        return view('reservas.edit', [$id]);     
    }
    
     public function update(Request $request, $id) {         
         $request->validate([                    
            'N_rsv'=>'required|integer',         
            'Rut_client' =>'required',         
            'N_hab'=>'required',
            'fecha_E'=>'required',
            'fecha_S'=>'required',
            'total_dias'=>'required',
            'servicios'=>'required',
            'costo_dia'=>'required',
            'costo_total'=>'required',
            'descuento'=>'required',
            'costobruto'=>'required'            
        ]);         
             
             $res = $reservas::find($id);                  
             $res->N_rsv  = $request->get('N_rsv');         
             $res->Rut_client = $request->get('Rut_client');
             $res->N_hab = $request->get('N_hab');
             $res->fecha_E = $request->get('fecha_E');
             $res->fecha_S = $request->get('fecha_S');
             $res->total_dias = $request->get('total_dias');
             $res->servicios = $request->get('servicios');
             $res->costo_dia = $request->get('costo_dia');
             $res->costo_total = $request->get('costo_total');
             $res->descuento = $request->get('descuento');
             $res->costobruto = $request->get('costobruto');        
             $res->save();         
             return redirect('/reservas')->with('success', 'Actualizado!');     
    } 
    
    public function destroy($id) {         
        $cot = reservas::find($id);         
        $cot->delete();         
        return redirect('/reservas')->with('success', 'Eliminado!');     
    } 
 
    // REGRESA A PAGINA welcome QUE ESTA EN LA CARPETA  PRINCIPAL     
    public function back() {        
        return view('/welcome');     
    } 
 
    public function show($id) { } 
}