<?php

namespace App\Http\Controllers;

use App\Portadas;
use Illuminate\Http\Request;
use App;

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
            $file->move(public_path().'/img/', $name);
        }
        $client = new Portadas;

        $client->imagen = $name;
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

        $portada->delete();

        return redirect()->route('portadas.index');
    }
}
