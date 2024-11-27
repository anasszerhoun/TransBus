<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\busController;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\voyageController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ItineraireController;
use App\Http\Controllers\scheduleController;





Route::get('/home', function () {
    return view('index');
});
// Route::get('/DestList', function () {
//     return view('ListeDestination');
// });

// Route::get('/destination',function(){
//     return view('destination');
// });

// Route::post('/ajout', [voyageController::class, "afficheMessage"]);
// Route::get('DestList', [voyageController::class, "afficheDestination"]);
// Route::get('reservation',[voyageController::class,"reservation"]);
// Route::get('/AjoutReservation',[voyageController::class,"AjoutReservation"])->name('AjoutReservation');




Route::get('/',[AcceuilController::class,"index"])->name('index');

Route::post('/destination',[scheduleController::class,"afficheMessage"])->name('destination');
Route::get('/reservation/{id}',[AcceuilController::class,"reservation"])->name('reservation');
Route::post('/AjoutReservation/{id}',[AcceuilController::class,"AjoutReservation"])->name('AjoutReservation');
//ajouter une route messagerie
Route::get('/messagerie',[AcceuilController::class,"messagerie"])->name('messagerie');
//ajouter une route propos
Route::get('/propos',[AcceuilController::class,"propos"])->name('propos');
Route::get('/Destinations',[AcceuilController::class,"afficheDestination"])->name('destinations');
Route::get('/ajout',[AcceuilController::class,"miseAjour"])->name('ajout');


Route::get('/menu', MenuController::class.'@dashboard')->name('dashboard');
Route::get('/drivers', DriverController::class.'@drivers')->name('drivers');

Route::get('/buses/index', BusController::class.'@index')->name('buses.index');
Route::post('/buses/create', BusController::class .'@create')->name('buses.create');
Route::post('/buses/edit/{immatriculation}', BusController::class.'@update')->name('buses.update');


Route::post('/drivers/edit/{idChauffeur}', DriverController::class.'@update')->name('driver.update');
Route::delete('/drivers/delete/{idChauffeur}', DriverController::class.'@deleteDriver')->name('driver.delete');
Route::post('/drivers/add', DriverController::class .'@create')->name('driver.add');


Route::get('/schedule',scheduleController::class.'@schedule')->name('schedule');
Route::post('/schedule/add', scheduleController::class .'@addSchedule')->name('schedule.add');
Route::post('/schedule/detail/{id}', scheduleController::class .'@detailSchedule')->name('schedule.detail');



Route::get('/itineraries', ItineraireController::class.'@itineraries')->name('itineraries');
Route::post('/itineraries/edit/{idItineraire}', ItineraireController::class.'@update')->name('itineraire.update');
Route::delete('/itineraries/delete/{idItineraire}', ItineraireController::class.'@delete')->name('itineraire.delete');
Route::post('/itineraries/add', ItineraireController::class .'@create')->name('itineraire.add');


Route::delete('/buses/delete/{immatriculation}', BusController::class.'@destroy')->name('buses.destroy');
Route::get('/live_search/action', 'BusController@action')->name('buses.action');
?>
