<?php

namespace App\Http\Controllers;

use App\Portadas;
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
        $clients = Clients::all();
        $productsNew = Products::where('state','=',1)->orderBy('created_at')->take(6)->get();
        $productsDes = Products::where('state','=',1)->orderBy('created_at')->take(6)->get();
        return View('layout')->with('portadas',$portadas)
            ->with('clients',$clients)
            ->with('productsNew',$productsNew)
            ->with('productsDes',$productsDes);
    }
}
