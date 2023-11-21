<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\JerseyController;
use App\Http\Controllers\Jersey2Controller;
use App\Http\Controllers\Jersey3Controller;
use App\Http\Controllers\Jersey4Controller;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\TeamsLCKController;
use App\Http\Controllers\TeamsNBAController;
use App\Http\Controllers\TeamsPUBGController;
use App\Http\Controllers\TeamsROCKETController;
use App\Http\Controllers\TeamsTIGERController;
use App\Http\Controllers\TeamsVALORANTController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ChatBotController;
use BotMan\BotMan\BotMan;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\PlayerasController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Shop', [ShopController::class, 'index'])->name('ShopHome');

Route::get('/GenGJersey2', [Jersey2Controller::class, 'index'])->name('Jersey2');
Route::get('/GenGJersey3', [Jersey3Controller::class, 'index'])->name('Jersey3');
Route::get('/GenGJersey4', [Jersey4Controller::class, 'index'])->name('Jersey4');
Route::get('/Teams', [TeamsController::class, 'index'])->name('TeamsIndex');
Route::get('/TeamsLCK', [TeamsLCKController::class, 'index'])->name('TeamsLCK');
Route::get('/TeamsNBA', [TeamsNBAController::class, 'index'])->name('TeamsNBA');
Route::get('/TeamsPUBG', [TeamsPUBGController::class, 'index'])->name('TeamsPUBG');
Route::get('/TeamsROCKET', [TeamsROCKETController::class, 'index'])->name('TeamsROCKET');
Route::get('/TeamsTIGER', [TeamsTIGERController::class, 'index'])->name('TeamsTIGER');
Route::get('/TeamsVALORANT', [TeamsROCKETController::class, 'index'])->name('TeamsVALORANT');
Route::get('/About', [AboutController::class, 'index'])->name('AboutIndex');
Route::get('/GenG', [PrincipalController::class, 'index'])->name('InicioIndex');

Route::get('/chatbot', [ChatBotController::class, 'index'])->name('IndexChatbot'); ;
Route::match(['get', 'post'], '/chatbot/handle', [ChatBotController::class, 'handle'])->name('ChatBot');

Route::get('/preguntas', [PreguntaController::class, 'index'])->name('IndexPreguntas'); ;

Route::resource('preguntas', PreguntaController::class);

Route::post('/preguntas', [PreguntaController::class, 'store'])->name('preguntas.store');

Route::put('/preguntas/{id}', [PreguntaController::class, 'update'])->name('preguntas.update');





// Lo ultimo de pedro del template que se me ocurrio que listo que sos goku

Route::get('/jerseys', [JerseyController::class, 'index'])->name('jerseys.index');

Route::get('/jerseys/{id}', [JerseyController::class, 'show'])->name('jerseys.show');

Route::resource('playeras', PlayerasController::class);