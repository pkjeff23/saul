<?php

namespace App\Http\Controllers;

use App\Seccionimg;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Storage;
class SeccionimgController extends Controller
{
        public function __construct()
        {
        }
        
        public function index(Request $request)
        {

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
                $file->move(public_path().'/img/seccion/'.$request->category, $name);
            }
            $client = new Seccionimg;

            $client->seccion_id = $request->seccion_id;
            $client->title = $request->title;
            $client->imagen = $name;
            $client->save();
            return redirect()->route('secciones.index');
        }
    
        public function show(Clients $clients)
        {
            //
        }
    
        public function edit(Clients $client)
        {
            $request->user()->authorizeRoles(['user', 'admin']);
    
            return view('clients.edit')
                ->with('client', $client);
        }
    
        public function update(Request $request, Seccionimg $client)
        {
            if($request->hasFile('img')){
                Storage::delete(public_path().'/img/seccion', $client->imagen);
                $file = $request->file('img');
                $name = time().$file->getClientOriginalName();
                $file->move(public_path().'/img/seccion', $name);
                $client->imagen = $name;
            }else {
                $client->imagen = $request->imagen;
            }

            $client->seccion_id = $request->seccion_id;
            $client->title = $request->title;
            $client->save();
    
            return redirect()->route('secciones.index');
        }
    
        public function destroy(Seccion $portada)
        {
    
            $portada->delete();
    
            return redirect()->route('secciones.index');
        }
    }
    