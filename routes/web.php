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

// Como se ve el correo
Route::get('email', function () {
    return new App\Mail\LoginCredentials(App\User::first(),'asd123');
});

//rutas a las que puede acceder un usuario invitado
Route::get('/', 'PagesController@home')->name('home');
Route::get('/clinicas', 'PagesController@clinicas')->name('clinicas');
Route::get('/servicios', 'PagesController@servicios')->name('servicios');
Route::get('/cirujanos', 'PagesController@cirujanos')->name('cirujanos');
Route::get('cirujanos/{cirujano}', 'PagesController@cirujano')->name('usuario.cirujano.view');
Route::get('/tratamientos', 'PagesController@tratamientos')->name('tratamientos');
Route::get('clinicas/{clinica}', 'PagesController@clinica')->name('usuario.clinica.view');
Route::get('servicios/{servicio}', 'PagesController@servicio')->name('usuario.servicio.view');
Route::get('tratamientos/{tratamiento}', 'PagesController@tipocirugia')->name('usuario.tratamiento.view');

//Fin de las rutas publicas
//Rutas de paciente logueado
Route::group(['prefix' => 'paciente',
    'namespace' => 'Paciente',
    'middleware' => 'auth'],
    function () {
        Route::get('editar/{user}', 'PacienteController@edit')->name('paciente.datos.edit');
        Route::put('update/{user}', 'PacienteController@update')->name('paciente.datos.update');
    });
//fin de rutas de paciente logueado

//Rutas del usuario administrador
Route::group(['prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => ['auth','role:admin']],
    function () {
        //Pagina principal de administrador
        Route::get('/', 'AdminController@index')->name('dashboard');
        //Rutas relacionadas con clinicas
        Route::get('pacientes', 'PacienteController@listadopacientes')->name('admin.pacientes.index');
        Route::get('clinicas', 'ClinicasController@listadoclinicas')->name('admin.clinicas.index');
        Route::get('clinicas/create', 'ClinicasController@create')->name('admin.clinicas.create');
        Route::post('clinicas', 'ClinicasController@store')->name('admin.clinicas.store');
        Route::get('clinicas/{clinica}', 'ClinicasController@edit')->name('admin.clinica.edit');
        Route::put('clinicas/{clinica}', 'ClinicasController@update')->name('admin.clinica.update');
        Route::put('clinicas/delete/{clinica}', 'ClinicasController@delete')->name('admin.clinica.delete');

        Route::post('clinicas/{clinica}/foto', 'ClinicasController@storefoto')->name('admin.clinica.storefoto');
        //Rutas relacionadas con los tipos de cirugías
        Route::get('tiposcirugias', 'TipoCirugiasController@listadotiposcirugias')->name('admin.tipocirugia.index');
        Route::get('tiposcirugias/create', 'TipoCirugiasController@create')->name('admin.tipocirugia.create');
        Route::post('tiposcirugias', 'TipoCirugiasController@store')->name('admin.tipocirugia.store');
        Route::get('tiposcirugias/{tipocirugia}', 'TipoCirugiasController@edit')->name('admin.tipocirugia.edit');
        Route::put('tiposcirugias/{tipocirugia}', 'TipoCirugiasController@update')->name('admin.tipocirugia.update');
        Route::put('tiposcirugias/delete/{tipocirugia}', 'TipoCirugiasController@delete')->name('admin.tipocirugia.delete');
        //Rutas relacionadas con los servicios adicionales
        Route::get('servicios', 'ServiciosController@listadoservicios')->name('admin.servicios.index');
        Route::get('servicios/create', 'ServiciosController@create')->name('admin.servicios.create');
        Route::post('servicios', 'ServiciosController@store')->name('admin.servicios.store');
        Route::get('servicios/{servicio}', 'ServiciosController@edit')->name('admin.servicios.edit');
        Route::put('servicios/{servicio}', 'ServiciosController@update')->name('admin.servicios.update');
        Route::put('servicios/delete/{servicio}', 'ServiciosController@delete')->name('admin.servicios.delete');
        //Rutas relacionadas con los Quirofanos
        Route::get('quirofanos', 'QuirofanosController@listadoquirofanos')->name('admin.quirofanos.index');
        Route::get('quirofanos/create', 'QuirofanosController@create')->name('admin.quirofanos.create');
        Route::post('quirofanos', 'QuirofanosController@store')->name('admin.quirofanos.store');
        Route::get('quirofanos/{quirofano}', 'QuirofanosController@edit')->name('admin.quirofanos.edit');
        Route::put('quirofanos/{quirofano}', 'QuirofanosController@update')->name('admin.quirofanos.update');
        Route::put('quirofanos/delete/{quirofano}', 'QuirofanosController@delete')->name('admin.quirofanos.delete');
//Rutas relacionadas con cirujanos
        Route::get('cirujanos', 'CirujanosController@listadocirujanos')->name('admin.cirujanos.index');
        Route::get('cirujanos/create', 'CirujanosController@create')->name('admin.cirujanos.create');
        Route::post('cirujanos', 'CirujanosController@store')->name('admin.cirujanos.store');
        Route::get('cirujanos/{cirujano}', 'CirujanosController@edit')->name('admin.cirujano.edit');
        Route::put('cirujanos/{cirujano}', 'CirujanosController@update')->name('admin.cirujano.update');
        Route::delete('cirujanos/delete/{cirujano}', 'CirujanosController@delete')->name('admin.cirujano.delete');

    });

//Fin de Rutas del usuario administrador    

//Seccion Médica
Route::group(['prefix' => 'medico',
    'namespace' => 'Medico',
    'middleware' => ['auth','role:medico']],
    function () {
        //Pagina principal de administrador
        Route::get('/', 'MedicoController@index')->name('medico.dashboard');

    });

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->get('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');
Auth::routes();
