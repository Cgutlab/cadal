<?php

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

// Route::get('/', function () {
//     return view('home');
// });
Route::group(['middleware' => 'idioma'], function() {
	

	Route::resource('/','PaginasController');
	Route::get('empresa',[
		'uses' => 'PaginasController@empresa',
		'as' => 'empresa'
	]);

	Route::get('familia',[
		'uses' => 'PaginasController@familia',
		'as' => 'familia'
	]);

	Route::get('familia/{id}/subproducto',[
		'uses'=>'PaginasController@subproducto',
		'as'=>'subproducto'
	]);
	Route::get('familia/producto/{id}/galeria',[
		'uses'=>'PaginasController@subgaleria',
		'as'=>'subgaleria'
	]);

	Route::get('inyeccion',[
		'uses' => 'PaginasController@inyeccion',
		'as' => 'inyeccion'
	]);
	Route::get('matriceria',[
		'uses' => 'PaginasController@matricerio',
		'as' => 'matricerio'
	]);
	Route::get('contacto',[
		'uses' => 'PaginasController@contacto',
		'as' => 'contacto'
	]);

	Route::get('impresion',[
		'uses' => 'PaginasController@impresion',
		'as' => 'impresion'
	]);
	Route::post('enviar_presupuesto',[
		'uses'=>'PaginasController@enviar_presupuesto',
		'as'=>'enviar_presupuesto'
	]);
	// Route::get('buscador',[
	// 	'uses'=>'PaginasController@buscador',
	// 	'as'=>'buscador'
	// ]);
	Route::post('productos/buscar',[
		'uses'=>'PaginasController@buscar',
		'as'=>'buscar'
	]);
	Route::post('enviar-mail',[
		'uses'=>'PaginasController@mail',
		'as'=>'mail'
	]);
	Route::get('idioma/{idioma}', 'IdiomaController@cambiarIdioma');
});
Route::group(['prefix' => 'adm'], function(){
	/*-----------------------login administrador----------------------------*/

    Route::post('usuario/authentificate', [
		'uses' => 'UsuarioController@authentificate',
		'as'   => 'usuario.authentificate'
	]);
	Route::get('/', [
		'uses' => 'UsuarioController@login',
		'as'   => 'usuario.login'
	]);
	Route::get('logout', [
		'uses' => 'UsuarioController@logout',
		'as'   => 'usuario.logout'
	]);
});

Route::group(['prefix' => 'adm', 'middleware' => 'admin'], function(){

    /*------------usuario----------------*/
    Route::get('usuario/{id}/destroy',[
			'uses'=>'UsuarioController@destroy',
			'as'=>'usuario.destroy'
	]);
    Route::resource('usuario', 'UsuarioController');
	/*----------slider-----------*/
	
	Route::get('sliders/create-soplado',[
				'uses'=>'SliderController@create_soplado',
				'as'=>'sliders.create_soplado'
    ]);
    Route::get('sliders/soplado',[
				'uses'=>'SliderController@index_soplado',
				'as'=>'sliders.index_soplado'
    ]);
    Route::get('sliders/create-empresa',[
				'uses'=>'SliderController@create_empresa',
				'as'=>'sliders.create_empresa'
    ]);
    Route::get('sliders/empresa',[
				'uses'=>'SliderController@index_empresa',
				'as'=>'sliders.index_empresa'
    ]);
    Route::get('sliders/{id}/destroy',[
			'uses'=>'SliderController@destroy',
			'as'=>'sliders.destroy'
	]);
	Route::resource('sliders','SliderController');

    /*-------redes -------------*/
    Route::get('redes/{id}/destroy',[
				'uses'=>'RedController@destroy',
				'as'=>'redes.destroy'
		]);
	Route::resource('redes','RedController');
	
    /*----------productos-----------*/
	Route::resource('productos-destacados','ProductosController');

    /*----------Contenido-----------*/
	Route::resource('contenido','ContenidoController');

    /*-------logos -------------*/
    Route::resource('logos','LogoController');
    /*----------productos generales-----------*/
    Route::get('productos/{id}/create/general',[
			'uses'=>'ProductosGeneralesController@create_general',
			'as'=>'productos.create_general'
	]);
	Route::get('productos/{id}/index/general',[
			'uses'=>'ProductosGeneralesController@index_general',
			'as'=>'productos.index_general'
	]);
    Route::get('productos/{id}/destroy',[
			'uses'=>'ProductosGeneralesController@destroy',
			'as'=>'productos.destroy'
	]);
	Route::resource('productos','ProductosGeneralesController');
	  /*----------galeria de subproductos -----------*/
	Route::get('galeria/{id}/create',[
			'uses'=>'ImagenesController@create_galeria',
			'as'=>'galeria.create_galeria'
	]);
    Route::get('galeria/{id}/index',[
			'uses'=>'ImagenesController@index_galeria',
			'as'=>'galeria.index_galeria'
	]);
	Route::get('galeria/{id}/destroy',[
			'uses'=>'ImagenesController@destroy',
			'as'=>'galeria.destroy'
	]);
	Route::resource('galeria','ImagenesController');
	/*----------subproductos-----------*/
    Route::get('subproductos/{id}/destroy',[
			'uses'=>'SubproductoController@destroy',
			'as'=>'subproductos.destroy'
	]);
	Route::resource('subproductos','SubproductoController');
	/*------- Metadato-------------*/
    Route::resource('metadatos','MetadatoController');
	/*------- Natural-------------*/
    Route::get('natural/{id}/destroy',[
			'uses'=>'NaturalController@destroy',
			'as'=>'natural.destroy'
	]);
	  /*----------galeria de Natural -----------*/
	Route::get('natural/galeria/{id}/destroy',[
			'uses'=>'NaturalImagenController@destroy',
			'as'=>'imgnatural.destroy'
	]);
	Route::resource('imgnatural','NaturalImagenController');
	/*-------------Servicios--------------*/
    Route::get('servicios/{id}/destroy',[
			'uses'=>'ServicioController@destroy',
			'as'=>'servicios.destroy'
	]);
	Route::resource('servicios','ServicioController');
	/*------- Datos de la empresa-------------*/
    Route::resource('datos','DatoController');
    /*------------Home----------------*/
    Route::resource('home', 'HomeController');
});