<?php

namespace App\Http\Controllers;

use App\Portadas;
use App\Categorias;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Storage;

class categoriasController extends Controller
{
    public function __construct()
    {
    }
    
    public function index(Request $request)
    {
        $portadas = Categorias::all();
        return View('admin.categoria.index')->with('portadas',$portadas);
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
            $file->move(public_path().'/img/categorias', $name);
        }
        $client = new Categorias;

        $client->imagen = $name;
        $client->title = $request->title;
        $client->state = $request->state;
        $client->user_id = 1;
        $client->save();
        return redirect()->route('clients.index');
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

    public function update(Request $request, Clients $client)
    {
        $request->user()->authorizeRoles(['user', 'admin']);

        $client->name = $request->name;
        $client->dni = $request->dni;
        $client->email = $request->email;
        $client->address = $request->address;
        $client->save();

        return redirect()->route('clients.index');
    }

    public function destroy(Portadas $portada)
    {
        Storage::delete(public_path().'/img/', $portada->imagen);
        $portada->delete();

        return redirect()->route('portadas.index');
    }
}
