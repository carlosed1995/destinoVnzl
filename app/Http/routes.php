<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('pruebahome', function () {
    return view('homeprueba');
});
Route::get('/', 'WelcomeController@index');
//Route::group(['middleware' => 'web'], function () {

//Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/admin', 'AdminController@index');
Route::resource('terminos','TerminosController');
Route::resource('preguntas','PreguntasController');
Route::resource('modo','ModousoController');
Route::resource('hoteles', 'HotelesController');
Route::resource('tudestino', 'TuDestinoController');
Route::resource('restaurantes', 'RestaurantesController');
Route::resource('planunico', 'PlanesVipController');
Route::resource('promociones', 'PromocionesController');
Route::resource('detallehotel', 'DetalleHotelController');
Route::get('reservaplanvip', 'ReservaPlanVipController@store');
Route::resource('reservahotel', 'ReservaHotelController');
Route::resource('reservarestaurant', 'ReservaRestaurantController');
Route::resource('tags','TagsController');
Route::resource('contacto','ContactoController');
 


/*Route::get('tags/{id}/destroy', [
						'uses' => 'TagsController@destroy',
						'as' 	 => 'tags.destroy'
						]);*/


//// RUTAS CARLOS  ////////////////////


Route::get('/admin', function(){
	return view('auth.loginadmin');
});

Route::resource('registrar','UsuarioController');
Route::get('adminUsuario', 'FrontController@admin');
Route::resource('restaurantAdmin', 'restAdminController');
Route::resource('log', 'LogController');
Route::get('logoutad', 'LogController@logoutad');

Route::resource('agregarimagenhotel', 'imgHotel');
Route::resource('adminterminos', 'AdminTerminosController');
Route::resource('adminpreguntas', 'PreguntasAdminController');
Route::resource('adminmodo','ModousoAdminController');
Route::resource('eliminarterminos', 'AdminTerminosController');

 Route::resource('reservarestaurante', 'reservarestController');     
Route::resource('agregariconos', 'RestaurantesAdminController');
Route::resource('subirimagenes', 'SubeImagenesController');
Route::resource('subirimagenesHotl', 'subirimagenesHotelController');
Route::resource('usuarios','adminUsuariosController');
Route::resource('updatereserva', 'UpdateRController');

Route::resource('PlanesUnicos', 'PlanesUnicosController');

Route::get('proyecto/{id}/nombre','restAdminController@byProject');
Route::get('proyecto1/{id}/nombre','restAdminController@byProject1');
Route::get('proyecto2/{id}/nombre','restAdminController@byProject2');
Route::get('proyecto1/{id}/nombres','UsuarioController@byProject1');


 
  
Route::resource('activarrr', 'ActivarController');
Route::resource('hola' , 'InputOutputController');
Route::resource('elimnar' , 'AeliminarController@destroy');
Route::resource('iconos', 'iconosAdminController');    
Route::get('/search', 'iconosAdminController@search');
Route::resource('parques', 'parquesAdminController');

Route::resource('certificados', 'CertificadosAdminController');

Route::resource('SubirImg', 'subirImgPlanesController');

Route::resource('onoff','EncendidoApagadoController');

Route::resource('imagenediv' , 'SubimgDivController');

Route::resource('regiones', 'RegionesController');
  
Route::resource('diversion', 'DiversionHomeController');
Route::resource('diversionReserv', 'DiversionHomeController@store');
 
Route::resource('actplan', 'ActPlanesController');

Route::resource('actdestin', 'ActDestinosController');

Route::resource('texto', 'TextosController');

Route::resource('destiact', 'Tudestinoact3Controller');   
Route::resource('destiact4', 'Tudestinoact4Controller');
Route::resource('tudestinos', 'tudestinoAdminController');
Route::resource('subirdestinoimg', 'SubirImgDestinoController');


/////////Banner/////////
Route::resource('adminbanner', 'AdminBannerController');
Route::resource('adminbannersec','AdminBannerSecundarioController');




//// RUTAS CARLOS //////////////////////////////