<?php

namespace App\Http\Controllers;

use App\Products;
use App\Portadas;
use App\Aboutus;
use Illuminate\Http\Request;
use App;

class Quienes1Controller extends Controller
{
    public function __construct()
    {
    }
    
    public function index(Request $request)
    {   
        $portadas = Aboutus::all();
        return View('admin.Quienes.index')->with('portadas',$portadas);
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
            $file->move(public_path().'/img/aboutus', $name);
        }
        $client = new Aboutus;

        $client->imagen = $name;
        $client->mision = $request->mision;
        $client->vision = $request->vision;
        $client->save();
        return redirect()->route('aboutus.index');
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

    public function destroy(Aboutus $aboutu)
    {

        $aboutu->delete();

        return redirect()->route('aboutus.index');
    }
}
