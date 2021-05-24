<?php

namespace App\Http\Controllers;

use App\Portadas;
use App\SubCategorias;
use App\Categorias;
use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Storage;

class subcategoriasController extends Controller
{
    public function __construct()
    {
    }
    
    public function index(Request $request)
    {
        $portadas = Subcategorias::paginate(10);
        $categorias = Categorias::all();
        return View('admin.subcategoria.index')->with('portadas',$portadas)->with('categorias',$categorias);
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $client = new Subcategorias;

        $client->category_id = $request->category_id;
        $client->title = $request->title;
        $client->state = $request->state;
        $client->save();
        return redirect()->route('subcategory.index');
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

    public function update(Request $request, Subcategorias $subcategory)
    {
        $subcategory->category_id = $request->category_id;
        $subcategory->title = $request->title;
        $subcategory->state = $request->state;
        $subcategory->save();

        return redirect()->route('subcategory.index');
    }

    public function destroy(Subcategorias $subcategory)
    {
        Storage::delete(public_path().'/img/', $subcategory->imagen);
        $subcategory->delete();

        return redirect()->route('subcategory.index');
    }
}
