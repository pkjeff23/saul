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
        $portadas = Categorias::where('state','=',1)->paginate(10);
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
        return redirect()->route('category.index');
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

    public function update(Request $request, Categorias $category)
    {
        if($request->hasFile('img')){
            Storage::delete(public_path().'/img/', $category->imagen);
            $file = $request->file('img');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/img/categorias', $name);
            $category->imagen = $name;
        }

        $category->title = $request->title;
        $category->state = $request->state;
        $category->user_id = 1;
        $category->save();

        return redirect()->route('category.index');
    }

    public function destroy(Categorias $category)
    {
        Storage::delete(public_path().'/img/', $category->imagen);
        $category->delete();

        return redirect()->route('category.index');
    }
}
