<?php

namespace App\Http\Controllers;

use App\Seccion;
use App\Seccionimg;
use Illuminate\Http\Request;
use App;

class SeccionController extends Controller
{
        public function __construct()
        {
        }
        
        public function index(Request $request)
        {
            $secciones = Seccion::where('state','=',1)->paginate(10);
            $imagenes = Seccionimg::all();
            return View('admin.secciones.index')->with('secciones',$secciones)->with('imagenes',$imagenes);
        }
    
        
        public function create()
        {
            //
        }
    
        public function store(Request $request)
        {
            if($request->hasFile('img')){
                $file = $request->file('img');
                $name = time().$file->getClientOriginalName();
                $file->move(public_path().'/img/productos/'.$request->category, $name);
            }
            $client = new Seccion;
            
            $client->title = $request->title;
            $client->type = $request->type;
            $client->state = $request->state;
            $client->user_id = 1;
            $client->save();
            return redirect()->route('secciones.index');
        }
    
        public function destroy(Seccion $seccione)
        {
            $seccione->delete();
    
            return redirect()->route('secciones.index');
        }
    }
    