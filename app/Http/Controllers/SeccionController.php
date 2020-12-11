<?php

namespace App\Http\Controllers;

use App\Clients;
use Illuminate\Http\Request;
use App;

class SeccionController extends Controller
{
    public function __construct()
    {
    }
    
    public function index(Request $request)
    {
        return View('admin.secciones.index');
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);

        $client = new Clients;
        $client->name = $request->name;
        $client->dni = $request->dni;
        $client->email = $request->email;
        $client->address = $request->address;
        $client->save();

        return back()->with('agregar', '"Gracias por ser parte de Vind!!"

        Hemos recibido la información de tu vehículo.
        
        Estamos trabajando por encontrar la mejor oferta"');
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

    public function destroy(Clients $client)
    {
        $request->user()->authorizeRoles(['user', 'admin']);

        $client->delete();

        return redirect()->route('clients.index');
    }
}
