<?php

use Illuminate\Support\Facades\Route;

Route::resource('/users', 'UserController');
Route::resource('/admin', 'adminController')->middleware('auth');
Route::resource('/catalogo', 'CatalogoController');
Route::resource('/contacto', 'ContactoController');
Route::resource('/quienesomos', 'QuienesController');
Route::resource('/servicios', 'ServiciosController');

Route::resource('/clients', 'ClientsController')->middleware('auth');
Route::resource('/brands', 'BrandsController')->middleware('auth');

Route::resource('/category', 'categoriasController')->middleware('auth');
Route::resource('/subcategory', 'subcategoriasController')->middleware('auth');
Route::resource('/portadas', 'PortadasController')->middleware('auth');
Route::resource('/secciones', 'SeccionController')->middleware('auth');
Route::resource('/seccionesimg', 'SeccionimgController')->middleware('auth');
Route::resource('/productos', 'ProductosController')->middleware('auth');
Route::resource('/aboutus', 'Quienes1Controller')->middleware('auth');
Route::resource('/servicios1', 'Servicios1Controller')->middleware('auth');
Route::resource('/serviciosimg', 'ServicesimgController')->middleware('auth');

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/', function () {
    return view('layout');
});

Route::resource('/', 'HomeController');

Auth::routes();

