<?php

namespace App\Http\Controllers;

use App\Portadas;
use App\Categorias;
use App\Clients;
use App\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $portadas = Portadas::all();
        $categorias = Categorias::all();
        $clients = Clients::all();
        $productsNew = Products::where('state','=',1)->orderBy('created_at')->take(6)->get();
        $productsDes = Products::where('state','=',1)->orderBy('created_at')->take(6)->get();
        return View('index')->with('portadas',$portadas)
            ->with('clients',$clients)
            ->with('categorias',$categorias)
            ->with('productsNew',$productsNew)
            ->with('productsDes',$productsDes);
    }
}
