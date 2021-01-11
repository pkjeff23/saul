<?php

use Illuminate\Support\Facades\Route;
use App\Products;

Route::resource('/users', 'UserController');
Route::resource('/admin', 'adminController');
Route::resource('/catalogo', 'CatalogoController');
Route::resource('/contacto', 'ContactoController');
Route::resource('/quienesomos', 'QuienesController');
Route::resource('/servicios', 'ServiciosController');

Route::resource('/clients', 'ClientsController');

Route::resource('/category', 'categoriasController');
Route::resource('/portadas', 'PortadasController');
Route::resource('/secciones', 'SeccionController');
Route::resource('/productos', 'ProductosController');
Route::resource('/aboutus', 'Quienes1Controller');
Route::resource('/servicios1', 'Servicios1Controller');

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/', function () {
    return view('layout');
});

Route::resource('/', 'HomeController');

Auth::routes();

