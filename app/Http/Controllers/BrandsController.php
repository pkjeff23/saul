<?php

namespace App\Http\Controllers;

use App\Brands;
use Illuminate\Http\Request;
use App;

class BrandsController extends Controller
{
    public function __construct()
    {
    }
    
    public function index(Request $request)
    {
        $clients = Brands::where('state', '!=', 2)->paginate(4);
        return View('admin.brand.index')->with('clients',$clients);
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
            $file->move(public_path().'/img/marcas', $name);
        }
        $client = new Brands;

        $client->name = $request->name;
        $client->imagen = $name;
        $client->state = $request->state;
        $client->user_id = 1;
        $client->save();
        return redirect()->route('brands.index');
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

    public function update(Request $request, Brands $brand)
    {
        if($request->hasFile('img')){
            $file = $request->file('img');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/img/marcas', $name);
            $client->imagen = $name;
        }
        
        $brand->name = $request->name;
        $brand->state = $request->state;
        $brand->save();
        return redirect()->route('brands.index');
    }

    public function destroy(Brands $brand)
    {
        $brand->delete();

        return redirect()->route('brands.index');
    }
}
