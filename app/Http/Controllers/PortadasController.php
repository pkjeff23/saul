<?php

namespace App\Http\Controllers;

use App\Portadas;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Storage;

class PortadasController extends Controller
{
    public function __construct()
    {
    }
    
    public function index(Request $request)
    {
        $portadas = Portadas::all();
        return View('admin.portada.index')->with('portadas',$portadas);
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
            $file->move(public_path().'/img/portadas', $name);
        }
        $client = new Portadas;

        $client->imagen = $name;
        $client->state = $request->state;
        $client->user_id = 1;
        $client->save();
        return redirect()->route('portadas.index');
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

    public function update(Request $request, Portadas $portada)
    {
        if($request->hasFile('img')){
            $file = $request->file('img');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/img/portadas', $name);
            $portada->imagen = $name;
        }

        $portada->state = $request->state;
        $portada->user_id = 1;
        $portada->save();

        return redirect()->route('portadas.index');
    }

    public function destroy(Portadas $portada)
    {
        Storage::delete(public_path().'/img/', $portada->imagen);
        $portada->delete();

        return redirect()->route('portadas.index');
    }
}
