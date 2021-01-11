<?php

namespace App\Http\Controllers;

use App\Products;
use App\Categorias;
use Illuminate\Http\Request;
use App;

class ProductosController extends Controller
{
    public function __construct()
    {
    }
    
    public function index(Request $request)
    {
        $clients = Products::where('state','=',1)->paginate(10);
        $categorias = Categorias::all();
        return View('admin.productos.index')->with('clients',$clients)->with('categorias',$categorias);
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
        $client = new Products;
        
        $client->title = $request->title;
        $client->description = $request->description;
        $client->category = $request->category;
        $client->brand = $request->brand;
        $client->imagen = $name;
        $client->price = $request->price;
        $client->state = $request->state;
        $client->tienda = $request->tienda;
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
