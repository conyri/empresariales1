<?php 
 
namespace App\Http\Controllers; 
 
use Illuminate\Http\Request; 
use App\clientes; 
 
class ClienteController extends Controller { 
 
     
    public function index() {         
        $clientes = clientes::all();         
        return view('cliente.index', compact('clientes'));     
    } 
 
 
     
    public function create() {         
        return view('cliente.create');     
    } 
 
   
    public function store(Request $request){       
        $request->validate([         
            'Rut'=>'required|integer',         
            'nombre' =>'required',         
            'apellido'=>'required',
            'fono'=>'required|integer',
            'correo'=>'required',
            'clave'=>'required|integer'        
            ]);       
            
            $clientes = new clientes([         
                'Rut' => $request->get('Rut'),         
                'nombre'  => $request->get('nombre'),         
                'apellido' => $request->get('apellido'),
                'fono' => $request->get( 'fono'),
                'correo' => $request->get( 'correo'),
                'clave' => $request->get( 'clave')      
            ]);       
            
            $clientes->save();       
            return redirect('/cliente')->with('success', 'Agregado !');     
        } 
 
        
    public function edit($id) {         
        $clientes = clientes::find($id);         
        return view('cliente.edit', [$id]);     
    }
    
     public function update(Request $request, $id) {         
         $request->validate([                    
            'nombre' =>'required',         
            'apellido'=>'required',
            'fono'=>'required|integer',
            'correo'=>'required',
            'clave'=>'required|integer'           
        ]);         
             
             $cli = $clientes::find($id);                  
             $cli->nombre  = $request->get('nombre');         
             $cli->apellido = $request->get('apellido');
             $cli->fono = $request->get('fono');
             $cli->correo = $request->get('correo');
             $cli->clave = $request->get('clave');         
             $cli->save();         
             return redirect('/cliente')->with('success', 'Actualizado!');     
    } 
    
    public function destroy($id) {         
        $cli = clientes::find($id);         
        $cli->delete();         
        return redirect('/cliente')->with('success', 'Eliminado!');     
    } 
 
    // REGRESA A PAGINA welcome QUE ESTA EN LA CARPETA  PRINCIPAL     
    public function back() {        
        return view('/welcome');     
    } 
 
    public function show($id) { } 
} 