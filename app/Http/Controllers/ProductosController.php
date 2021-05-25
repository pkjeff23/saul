<?php

namespace App\Http\Controllers;

use App\Products;
use App\Categorias;
use App\subcategorias;
use Illuminate\Http\Request;
use App;

class ProductosController extends Controller
{
    public function __construct()
    {
    }
    
    public function index(Request $request)
    {
        $clients = Products::paginate(10);
        $categorias = Categorias::all();
        $subcategorias = subcategorias::all();
        return View('admin.productos.index')->with('clients',$clients)->with('categorias',$categorias)->with('subcategorias',$subcategorias);
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
        $client->subcategory = $request->subcategory;
        $client->brand = $request->brand;
        $client->imagen = $name;
        $client->price = $request->price;
        $client->state = $request->state;
        $client->tienda = $request->tienda;
        $client->id_ventas = $request->id_ventas;
        $client->save();
        return redirect()->route('productos.index');
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

    public function update(Request $request, Products $Producto)
    {
        
        $Producto->title = $request->title;
        $Producto->description = $request->description;
        $Producto->category = $request->category;
        $Producto->subcategory = $request->subcategory;
        $Producto->brand = $request->brand;
        $Producto->price = $request->price;
        $Producto->state = $request->state;
        $Producto->tienda = $request->tienda;
        $Producto->id_ventas = $request->id_ventas;
        $Producto->save();

        return redirect()->route('productos.index');
    }

    public function destroy(Products $Producto)
    {

        $Producto->delete();

        return redirect()->route('productos.index');
    }
}
