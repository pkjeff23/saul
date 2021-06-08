<?php

namespace App\Http\Controllers;

use App\Products;
use App\Service;
use App\ServiceImg;
use Illuminate\Http\Request;
use App;

class Servicios1Controller extends Controller
{
    public function __construct()
    {
    }
    
    public function index(Request $request)
    {   
        $services = Service::all();
        $imagenes = ServiceImg::all();
        return View('admin.Servicios.index')->with('services',$services)->with('imagenes',$imagenes);
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
            $file->move(public_path().'/img/services', $name);
        }
        $client = new Service;

        $client->portada = $name;
        $client->save();
        return redirect()->route('servicios1.index');
    }

    public function show($id)
    {
        $a = Products::find($id);
        $productCat = Products::where('category', '=', $a->category)->paginate(15);
        return view('catalogo.show')
            ->with('Products', $a)        
            ->with('productsCat', $productCat);        
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

    public function destroy(Service $servicios1)
    {

        $servicios1->delete();

        return redirect()->route('servicios1.index');
    }
}
