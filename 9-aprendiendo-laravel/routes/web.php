<?php

use App\Http\Controllers\FrutaController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\UsuarioController;
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
    // return view('welcome');
    echo "<h1>Hola mundo</h1>";
});

Route::get('/peliculas/{pagina?}', [PeliculaController::class, 'index']);

Route::get('/detalle/{year?}', [PeliculaController::class, 'detalle'])
    ->name('detalle.pelicula')
    ->middleware('testyear');

Route::get('/redirigir', [PeliculaController::class, 'redirigir']);

Route::get('/formulario', [PeliculaController::class, 'formulario']);
Route::post('/recibir', [PeliculaController::class, 'recibir']);

Route::resource('usuario', UsuarioController::class);

// Rutas de fruta
Route::group(['prefix'=>'frutas'], function(){
    Route::get('/index', [FrutaController::class, 'index']);
    Route::get('/detalle/{id}', [FrutaController::class, 'detalle']);
    Route::get('crear', [FrutaController::class, 'create']);
    Route::post('save', [FrutaController::class, 'save']);
    Route::get('/delete/{id}', [FrutaController::class, 'delete']);
    Route::get('/edit/{id}', [FrutaController::class, 'edit']);
    Route::post('/update', [FrutaController::class, 'update']);
});




/* 
GET: Conseguir datos
POST: Guardar datos
PUT: Actualizar recursos
DELETE: Eliminar recursos
*/

/*
Route::get('/mostrar-fecha', function(){
    $titulo = "Estoy mostrando la fecha";
    return view('mostrar-fecha', array(
        'titulo' => $titulo
    ));
});


Route::get('/pelicula/{titulo}/{year?}', function($titulo = 'No hay una pelicula seleccionada', $year = 2019){
    return view('pelicula', array(
        'titulo' => $titulo,
        'year' => $year
    ));
})->where(array(
    'titulo' => '[a-zA-Z]+',
    'year' => '[0-9]+'
));


Route::get('/listado-peliculas', function(){
    $titulo = "Listado de peliculas";
    return view('peliculas.listado', array(
        'titulo' => $titulo
    ));
});


Route::get('/listado-peliculas', function(){
    $titulo = "Listado de peliculas";
    $listado = array('Batman', 'Spiderman', 'Gran Tornini');
    
    return view('peliculas.listado')
            ->with('titulo', $titulo)
            ->with('listado', $listado);
});

Route::get('/pagina-generica', function(){
    return view('pagina');
});
*/