<?php

namespace App\Http\Controllers;

use App\Products;
use App\Categorias;
use App\Subcategorias;
use Illuminate\Http\Request;
use App;

class CatalogoController extends Controller
{
    public function __construct()
    {
    }
    
    public function index(Request $request)
    {   
        if($request->q == ''){
            if($request->category == ''){
                $portadas = Products::where('state', '=', 1)->paginate(15);
            }else {
                $portadas = Products::where('category', '=', $request->category)->paginate(15);
            }
        }else {
            $portadas = Products::where('title', 'like', '%'.$request->q.'%')->paginate(15);
        }
        $categorias = Categorias::all();
        $subcategorias = Subcategorias::all();
            return View('Catalogo.index')->with('portadas',$portadas)->with('categorias',$categorias)->with('subcategorias',$subcategorias);
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

    public function show($id)
    {
        $a = Products::find($id);
        $productCat = Products::where('category', '=', $a->category)->paginate(15);
        return view('Catalogo.show')
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

    public function destroy(Portadas $portada)
    {

        $portada->delete();

        return redirect()->route('portadas.index');
    }
}
