<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/inicio', function () {
    return view('index');
});

Route::get('/preguntasFrecuentes', function () {
    return view('fqa');
});

Route::get('/contacto', function () {
    return view('contacto');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/bonAppetit', function () {
    return view('bonAppetit');
});


Route::get('/condimentos', function () {
    return view('condimentos');
});

Route::get('/bonAppetit!', function () {
    return view('/bonAppetit!');
});

Route::get('/elartedecocinar', function () {
    return view('/elartedecocinar');
});

Route::get('/mandala03', function () {
    return view('/mandala03');
});

Route::get('/guitarra02', function () {
    return view('/guitarra02');
});


Route::get('/frase01', function () {
    return view('/frase01');
});

Route::get('/infantil02', function () {
    return view('/infantil02');
});


Route::get('/receta', function () {
    return view('/receta');
});

Route::get('/utensillos', function () {
    return view('/utensillos');
});

Route::get('/cocina', function () {
    return view('/cocina');
});

Route::get('/frase02', function () {
    return view('/frase02');
});

Route::get('/frase03', function () {
    return view('/frase03');
});

Route::get('/frase04', function () {
    return view('/frase04');
});

Route::get('/frase05', function () {
    return view('/frase05');
});

Route::get('/frase06', function () {
    return view('/frase06');
});

Route::get('/infantil01', function () {
    return view('/infantil01');
});

Route::get('/infantil03', function () {
    return view('/infantil03');
});

Route::get('/infantil04', function () {
    return view('/infantil04');
});

Route::get('/infantil05', function () {
    return view('/infantil05');
});

Route::get('/infantil06', function () {
    return view('/infantil06');
});

Route::get('/musica01', function () {
    return view('/musica01');
});

Route::get('/musica02', function () {
    return view('/musica02');
});

Route::get('/musica03', function () {
    return view('/musica03');
});

Route::get('/musica04', function () {
    return view('/musica04');
});

Route::get('/musica06', function () {
    return view('/musica06');
});

Route::get('/zen01', function () {
    return view('/zen01');
});

Route::get('/zen02', function () {
    return view('/zen02');
});

Route::get('/zen04', function () {
    return view('/zen04');
});

Route::get('/zen05', function () {
    return view('/zen05');
});

Route::get('/zen06', function () {
    return view('/zen06');
});


Route::get('/infantil', function () {
    return view('/infantil');
});

Route::get('/musica', function () {
    return view('/musica');
});

Route::get('/frases', function () {
    return view('/frases');
});

Route::get('/zen', function () {
    return view('/zen');
});

Route::get('/administrador', function () {
    return view('iniciarsesionadmin');
});

Route::get('/administrador/menu', function () {
    return view('menuadmin');
});

Route::get('/administrador/agregarproducto', function() {
    return view('agregarproducto');
});

Route::post('/administrador/agregarproducto', 'ProductosController@agregar');

Route::get('/administrador/modificarproducto', function() {
    return view('modificarproducto');
});

Route::post('/administrador/modificarproducto', 'ProductosController@modificar');


Route::get('/administrador/agregarseccion', function() {
    return view('agregarseccion');
});

Route::post('/administrador/agregarseccion', 'SeccionesController@agregar');


Route::get('/administrador/agregaradministrador', function() {
    return view('agregaradministrador');
});

Route::post('/administrador/agregaradministrador', 'AdministradorController@agregar');


Route::get('/administrador/listaadministradores', 'AdministradorController@listado');


Route::get('/administrador/modificaradministrador', function() {
    return view('modificaradmin');
});

Route::post('/administrador/modificaradministrador', 'AdministradoresController@modificar');

Route::get('/administrador/listadeproductos', function() {
    return view('listaproductos');
});

Route::get('/administrador/listadeusuarios', function() {
    return view('listadeusuarios');
});

Route::get('/administrador/listadesecciones', function() {
    return view('listadesecciones');
});

Route::get('/administrador/listadeadministradores', function() {
    return view('listadeadministradores');
});

