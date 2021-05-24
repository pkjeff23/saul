<?php

namespace App\Http\Controllers;

use App\ServiceImg;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Storage;
class ServicesimgController extends Controller
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
                $file->move(public_path().'/img/services/', $name);
            }
            $client = new ServiceImg;

            $client->services_id = $request->services_id;
            $client->title = $request->title;
            $client->description = $request->description;
            $client->imagen = $name;
            $client->save();
            return redirect()->route('servicios1.index');
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
    
        public function update(Request $request, ServiceImg $serviciosimg)
        {
            if($request->hasFile('img')){
                Storage::delete(public_path().'/img/services/', $serviciosimg->imagen);
                $file = $request->file('img');
                $name = time().$file->getClientOriginalName();
                $file->move(public_path().'/img/services/', $name);
                $serviciosimg->imagen = $name;
            }else{
                $serviciosimg->imagen = $request->imagen;
            }

            $serviciosimg->services_id = $request->services_id;
            $serviciosimg->title = $request->title;
            $serviciosimg->description = $request->description;
            $serviciosimg->save();
    
            return redirect()->route('servicios1.index');
        }
    
        public function destroy(Seccion $portada)
        {
    
            $portada->delete();
    
            return redirect()->route('secciones.index');
        }
    }
    