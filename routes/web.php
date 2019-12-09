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

Route::get('/', function () {
    return view('/principal');
});

Route::get('/', function () {
    return view('contenido/contenido');
});

Route::get('/usr2/{id}', function ($id) {
    return "Mostrando datos del usuario: {$id}";
})->where ('id', '[0-9]+');

Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname = null) {
    if($nickname){
      return "Saludos {$name} tu nickname es {$nickname}";
    }else{
      return "Saludos {$name} tú no tienes apodo";
    }
});

/*  Estas rutas son para la enlazar al controlador de la seccion de categorias
*/  

  Route::get('categoria', 'CategoriaController@index');
  Route::post('categoria/registrar', 'CategoriaController@store');
  Route::put('categoria/actualizar', 'CategoriaController@update');
  Route::put('categoria/activar', 'CategoriaController@activar');
  Route::put('categoria/desactivar', 'CategoriaController@desactivar');
  Route::get('categoria/selectCategoria', 'CategoriaController@selectCategoria');
  Route::get('categoria/listarPdf','CategoriaController@listarPdf')->name('categorias_pdf');



/*  Estas rutas son para la enlazar al controlador de la seccion de articulos
*/  
        Route::get('/articulo', 'ArticuloController@index');
        Route::post('/articulo/registrar', 'ArticuloController@store');
        Route::put('/articulo/actualizar', 'ArticuloController@update');
        Route::put('/articulo/desactivar', 'ArticuloController@desactivar');
        Route::put('/articulo/activar', 'ArticuloController@activar');
        Route::get('/articulo/buscarArticulo', 'ArticuloController@buscarArticulo');
        Route::get('/articulo/listarArticulo', 'ArticuloController@listarArticulo');
        Route::get('/articulo/buscarArticuloVenta', 'ArticuloController@buscarArticuloVenta');
        Route::get('/articulo/listarArticuloVenta', 'ArticuloController@listarArticuloVenta');
        Route::get('/articulo/listarPdf','ArticuloController@listarPdf')->name('articulos_pdf');


/*  Estas rutas son para la enlazar al controlador de la seccion de proveedores
*/  
        Route::get('/proveedor', 'ProveedorController@index');
        Route::post('/proveedor/registrar', 'ProveedorController@store');
        Route::put('/proveedor/actualizar', 'ProveedorController@update');
        Route::get('/proveedor/selectProveedor', 'ProveedorController@selectProveedor');
        Route::get('/proveedor/listarPdf','ProveedorController@listarPdf')->name('proveedores_pdf');
   



/*  Estas rutas son para la enlazar al controlador de la seccion de ingresos
*/  
        Route::get('/ingreso', 'IngresoController@index');
        Route::post('/ingreso/registrar', 'IngresoController@store');
        Route::put('/ingreso/desactivar', 'IngresoController@desactivar');
        Route::get('/ingreso/obtenerCabecera', 'IngresoController@obtenerCabecera');
        Route::get('/ingreso/obtenerDetalles', 'IngresoController@obtenerDetalles');
        Route::get('/ingreso/pdf/{id}','IngresoController@pdf')->name('ingreso_pdf');
        Route::get('/ingreso/listarPdf','IngresoController@listarPdf')->name('ingresos_pdf');

/*  Estas rutas son para la enlazar al controlador de la seccion categorias
*/     
        Route::get('/cliente', 'ClienteController@index');
        Route::post('/cliente/registrar', 'ClienteController@store');
        Route::put('/cliente/actualizar', 'ClienteController@update');
        Route::get('/cliente/selectCliente', 'ClienteController@selectCliente');
        Route::get('/cliente/listarPdf','ClienteController@listarPdf')->name('clientes_pdf');

/*  Estas rutas son para la enlazar al controlador de la seccion de vendedor
*/  
        Route::get('/venta', 'VentaController@index');
        Route::post('/venta/registrar', 'VentaController@store');
        Route::put('/venta/desactivar', 'VentaController@desactivar');
        Route::get('/venta/obtenerCabecera', 'VentaController@obtenerCabecera');
        Route::get('/venta/obtenerDetalles', 'VentaController@obtenerDetalles');
        Route::get('/venta/pdf/{id}','VentaController@pdf')->name('venta_pdf');
        Route::get('/venta/pdfTicket/{id}','VentaController@pdfTicket')->name('ventaticket_pdf');
        Route::get('/venta/listarPdf','VentaController@listarPdf')->name('ventas_pdf');



/*  Estas rutas son para la enlazar al controlador de la seccion de rol
*/  
        Route::get('/rol', 'RolController@index');
        Route::get('/rol/selectRol', 'RolController@selectRol');



/*  Estas rutas son para la enlazar al controlador de la seccion de usuarioss
*/  

        Route::get('/user', 'UserController@index');
        Route::post('/user/registrar', 'UserController@store');
        Route::put('/user/actualizar', 'UserController@update');
        Route::put('/user/desactivar', 'UserController@desactivar');
        Route::put('/user/activar', 'UserController@activar');
        Route::get('/user/listarPdf','UserController@listarPdf')->name('usuarios_pdf');