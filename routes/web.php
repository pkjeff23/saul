<?php

use Illuminate\Support\Facades\Route;
use App\Products;
Route::get('search', function() {
    $query = '1'; // <-- Change the query for testing.

    $articles = App\Products::search($query)->get();

    return $articles;
});

Route::resource('/users', 'UserController');
Route::resource('/admin', 'adminController');
Route::resource('/catalogo', 'CatalogoController');
Route::resource('/contacto', 'ContactoController');
Route::resource('/quienesomos', 'QuienesController');
Route::resource('/servicios', 'ServiciosController');

Route::resource('/clients', 'ClientsController');

Route::resource('/portadas', 'PortadasController');
Route::resource('/secciones', 'SeccionController');
Route::resource('/productos', 'ProductosController');

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/', function () {
    return view('layout');
});

Route::resource('/', 'HomeController');

Auth::routes();

