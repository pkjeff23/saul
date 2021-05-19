<?php

namespace App\Http\Controllers;

use App\Clients;
use Illuminate\Http\Request;
use App;

class ClientsController extends Controller
{
    public function __construct()
    {
    }
    
    public function index(Request $request)
    {
        $clients = Clients::where('state', '!=', 2)->paginate(4);
        return View('admin.clients.index')->with('clients',$clients);
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
            $file->move(public_path().'/img/clients', $name);
        }
        $client = new Clients;

        $client->name = $request->name;
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
        if($request->hasFile('img')){
            $file = $request->file('img');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/img/clients', $name);
            $client->imagen = $name;
        }
        
        $client->name = $request->name;
        $client->state = $request->state;
        $client->save();
        return redirect()->route('clients.index');
    }

    public function destroy(Clients $client)
    {
        $client->delete();

        return redirect()->route('clients.index');
    }
}
