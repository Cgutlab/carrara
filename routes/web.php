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

Route::post('contacto/enviar', ['uses' => 'page\ContactoController@enviarMail', 'as' => 'contacto.enviar']);
Route::post('presupuesto/enviar', ['uses' => 'page\PresupuestoController@enviarMail', 'as' => 'presupuesto.enviar']);

Route::get('/', function () {
    return view('page.home');
});
	
	Route::get('/', ['uses' => 'page\HomeController@index', 'as' => 'home']);
	Route::get('empresa', ['uses' => 'page\EmpresaController@index', 'as' => 'empresa']);
	Route::get('familia', ['uses' => 'page\ProductoController@index', 'as' => 'familia']);
	Route::get('familia/{id}', ['uses' => 'page\ProductoController@productos', 'as' => 'productos']);
	Route::get('producto/{id}', ['uses' => 'page\ProductoController@producto', 'as' => 'producto']);
	Route::get('buscador', ['uses' => 'page\BuscadorController@index', 'as' => 'buscado']);
	Route::post('filtro', ['uses' => 'page\BuscadorController@filtro', 'as' => 'filtro']);
	Route::get('buscar',['uses'=>'page\BuscarController@index',	'as'=>'buscar' ]);
	Route::post('buscador',['uses'=>'page\BuscarController@getResults', 'as'=>'buscador']);
	Route::get('catalogo', ['uses' => 'page\CatalogoController@index', 'as' => 'catalogo']);
	Route::get('presupuesto', ['uses' => 'page\PresupuestoController@index', 'as' => 'presupuesto']);
	Route::get('contacto', ['uses' => 'page\ContactoController@index', 'as' => 'contacto']);
	Route::get('logout', ['uses' => 'page\ZonaPrivadaController@logout', 'as' => 'salir']);
	Route::post('/registro',['uses'=>'page\ZonaPrivadaController@store', 'as' => 'cliente.store']);
	Route::get('/nuevo',['uses'=>'page\ZonaPrivadaController@registroCreate', 'as' => 'registro']);
	Route::post('/nuevocliente',['uses'=>'page\ZonaPrivadaController@registroStore', 'as' => 'registro.store']);
	Route::get('descargas', ['uses' => 'page\ZonaPrivadaController@descarga', 'as' => 'descarga']);

	Route::group(['prefix' => 'adm'], function() {
			Route::resource('login', 'adm\LoginController');
			Route::get('logout', ['uses' => 'adm\LoginController@logout' , 'as' => 'adm.logout']);
		});

		Route::group(['prefix' => 'adm', 'middleware' => 'guest'], function() {

			Route::get('/', function() {
				$usuario = Auth::user();
				return view('adm.index', compact('usuario'));
			});


		Route::resource('metadatos', 'adm\MetadatosController');
		Route::resource('usuarios', 'adm\UserController');
		Route::resource('slider', 'adm\SliderController');
		Route::resource('datos', 'adm\DatosController');
		Route::resource('logos', 'adm\LogosController');
		Route::resource('redes', 'adm\RedesController');
		Route::resource('catalogos', 'adm\CatalogoController');
		Route::resource('descargas', 'adm\DescargaController');
		Route::resource('clientes', 'adm\ClienteController');

		Route::group(['prefix' => 'home', 'as' => 'home'], function() {		
			Route::group(['prefix' => 'slider'], function() {
				Route::get('create',  ['uses' => 'adm\HomeController@crearSlider', 'as' => '.slider.create']);
				Route::get('show',  ['uses' => 'adm\HomeController@editarSliders', 'as' => '.slider.show']);
				Route::get('edit/{id}', ['uses' => 'adm\HomeController@editarSlider', 'as' => '.slider.edit']);
				Route::put('update/{id}',  ['uses' => 'adm\HomeController@updateSlider', 'as' => '.slider.update']);
			});

			Route::group(['prefix' => 'texto', 'as' => 'texto'], function() {
				Route::get('edit', ['uses' => 'adm\HomeController@edit', 'as' => '.edit']);
				Route::put('update/{id}',  ['uses' => 'adm\HomeController@update', 'as' => '.update']);
			});

			Route::group(['prefix' => 'texto2', 'as' => 'texto2'], function() {
				Route::get('edit', ['uses' => 'adm\HomeController@edit2', 'as' => '.edit']);
				Route::put('update/{id}',  ['uses' => 'adm\HomeController@update2', 'as' => '.update']);
			});
		});

		Route::group(['prefix' => 'empresa', 'as' => 'empresa'], function() {
			Route::get('edit', ['uses' => 'adm\EmpresaController@editarContenido', 'as' => '.edit']);
			Route::put('update/{id}', ['uses' => 'adm\EmpresaController@updateContenido', 'as' => '.contenido.update']);

			Route::group(['prefix' => 'slider'], function() {
				Route::get('create',  ['uses' => 'adm\EmpresaController@crearSlider', 'as' => '.slider.create']);
				Route::get('show',  ['uses' => 'adm\EmpresaController@editarSliders', 'as' => '.slider.show']);
				Route::get('edit/{id}', ['uses' => 'adm\EmpresaController@editarSlider', 'as' => '.slider.edit']);
				Route::put('update/{id}',  ['uses' => 'adm\EmpresaController@updateSlider', 'as' => '.slider.update']);
			});
		});

		Route::group(['prefix' => 'producto', 'as' => 'producto'], function() {	
			Route::get('create',  ['uses' => 'adm\ProductoController@createProducto', 'as' => '.create']);
				Route::post('store',  ['uses' => 'adm\ProductoController@storeProducto', 'as' => '.store']);
				Route::get('select',  ['uses' => 'adm\ProductoController@selectProducto', 'as' => '.select']);
				Route::post('show',  ['uses' => 'adm\ProductoController@showProducto', 'as' => '.show']);
				Route::get('edit/{id}', ['uses' => 'adm\ProductoController@editProducto', 'as' => '.edit']);
				Route::put('update/{id}',  ['uses' => 'adm\ProductoController@updateProducto', 'as' => '.update']);
				Route::delete('destroy/{id}',  ['uses' => 'adm\ProductoController@destroyProducto', 'as' => '.destroy']);

			Route::group(['prefix' => 'galeria', 'as' => 'galeria'], function() {
				Route::get('create',  ['uses' => 'adm\ProductoController@crearGaleria', 'as' => '.create']);
				Route::post('store',  ['uses' => 'adm\ProductoController@storeGaleria', 'as' => '.store']);
				Route::get('show/{id}',  ['uses' => 'adm\ProductoController@Galerias', 'as' => '.show']);
				Route::get('edit/{id}', ['uses' => 'adm\ProductoController@Galeria', 'as' => '.edit']);
				Route::put('update/{id}',  ['uses' => 'adm\ProductoController@updateGaleria', 'as' => '.update']);
				Route::delete('destroy/{id}',  ['uses' => 'adm\ProductoController@destroyGaleria', 'as' => '.destroy']);
			});

			Route::group(['prefix' => 'familia'], function() {
				Route::get('create',  ['uses' => 'adm\ProductoController@createFamilia', 'as' => '.familia.create']);
				Route::post('store',  ['uses' => 'adm\ProductoController@storeFamilia', 'as' => '.familia.store']);
				Route::get('show',  ['uses' => 'adm\ProductoController@showFamilia', 'as' => '.familia.show']);
				Route::get('edit/{id}', ['uses' => 'adm\ProductoController@editFamilia', 'as' => '.familia.edit']);
				Route::put('update/{id}',  ['uses' => 'adm\ProductoController@updateFamilia', 'as' => '.familia.update']);
				Route::delete('destroy/{id}',  ['uses' => 'adm\ProductoController@destroyFamilia', 'as' => '.familia.destroy']);
			});
		});

		Route::group(['prefix' => 'contacto', 'as' => 'contacto'], function() {
			Route::get('edit', ['uses' => 'adm\ContactoController@edit', 'as' => '.edit']);
			Route::put('update/{id}',  ['uses' => 'adm\ContactoController@update', 'as' => '.update']);
		});
	});