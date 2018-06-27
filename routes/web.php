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
    'middleware' => ['auth','role:paciente']],
    function () {
        Route::get('citas/tratamientos/{id}', 'CitasController@getTratamientos');
        Route::get('citas/cirujanos/{id}', 'CitasController@getCirujanos');
        Route::get('editar/{user}', 'PacienteController@edit')->name('paciente.datos.edit');
        Route::put('update/{user}', 'PacienteController@update')->name('paciente.datos.update');
        Route::post('update/{user}/foto', 'PacienteController@storefoto')->name('paciente.datos.storefoto');
        Route::get('citas/create', 'CitasController@create')->name('paciente.citas.create');
        Route::post('citas', 'CitasController@store')->name('paciente.citas.store');
        Route::get('cirujanotratante/{cirujano}', 'CitasController@cirujano')->name('paciente.infocirujano');
        Route::get('planificacion/{user}', 'CitasController@listadoplanificacion')->name('paciente.planificacion.index');
        Route::get('planificacion/ver/{planificacion}', 'CitasController@view')->name('paciente.planificacion.view');
    });
//fin de rutas de paciente logueado

//Rutas del usuario administrador
Route::group(['prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => ['auth','role:admin']],
    function () {
        //Pagina principal de administrador
        Route::get('/', 'AdminController@index')->name('dashboard');
        //Rutas relacionadas con el paciente
        Route::get('pacientes', 'PacienteController@listadopacientes')->name('admin.pacientes.index');
        Route::put('pacientes/delete/{paciente}', 'PacienteController@delete')->name('admin.paciente.delete');
        Route::get('pacientes/{paciente}', 'PacienteController@view')->name('admin.paciente.view');

        //Rutas relacionadas con clinicas
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
        Route::post('servicios/{servicio}/foto', 'ServiciosController@storefoto')->name('admin.servicio.storefoto');
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
        Route::delete('cirujanos/delete/{cirujano}', 'CirujanosController@delete')->name('admin.cirujano.delete');

//Planificar cirugias
        Route::get('planificar', 'PlanificarController@listadocitas')->name('admin.planificar.index');
        Route::get('planificar/{planificacion}', 'PlanificarController@edit')->name('admin.planificar.edit');
        Route::put('planificar/{planificacion}', 'PlanificarController@update')->name('admin.planificar.update');

    });

//Fin de Rutas del usuario administrador    

//Seccion Médica
Route::group(['prefix' => 'medico',
    'namespace' => 'Medico',
    'middleware' => ['auth','role:medico']],
    function () {
        //Pagina principal del médico
        Route::get('/', 'CirujanoController@index')->name('medico.dashboard');
        //Rutas de modificar el médico
        Route::get('cirujanos/{user}', 'CirujanoController@edit')->name('medico.cirujano.edit');
        Route::put('cirujanos/{user}', 'CirujanoController@update')->name('medico.cirujano.update');
        Route::post('cirujano/{user}/foto', 'CirujanoController@storefoto')->name('medico.cirujano.storefoto');
        //Rutas de consultar quirofanos
        Route::get('quirofanos', 'QuirofanosController@listadoquirofanos')->name('medico.quirofanos.index');
        Route::get('quirofanos/{quirofano}', 'QuirofanosController@view')->name('medico.quirofano.view');
        //Rutas de historias medicas
        Route::get('historias', 'HistoriasController@listadohistorias')->name('medico.historias.index');
        Route::get('historias/create', 'HistoriasController@create')->name('medico.historias.create');
        Route::get('historia/{historia}', 'HistoriasController@edit')->name('medico.historia.edit');
        Route::get('historia/ver/{historia}', 'HistoriasController@view')->name('medico.historia.view');
        Route::put('medico/{historia}', 'HistoriasController@update')->name('medico.historia.update');
        //Ruta de la agenda del cirujano
        Route::get('agenda/{user}', 'AgendaController@agenda')->name('medico.agenda.index');
        //Consultar Planificacion
        Route::get('planificacion/{user}', 'AgendaController@listadoplanificacion')->name('medico.planificacion.index');
        Route::get('planificacion/ver/{planificacion}', 'AgendaController@view')->name('medico.planificacion.view');
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
