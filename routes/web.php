<?php
use App\Event;

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

// Route::get('/', function () {
//     return view('welcome');   
// })->name('main');

// Route::get('events', 'EventController@index')->name('events.index');

// Route::get('events/create','EventController@create')->name('events.create');


// Route::post('events','EventController@store')->name('events.store');

    
// Route::get('events/{event}', 'EventController@show')->name('events.show');
    

// Route::get('events/{event}/edit','EventController@edit')->name('events.edit');


// Route::match(['put', 'patch'], 'events/{event}', 'EventController@update')->name('events.update');


// Route::delete('events/{event}','EventController@destroy')->name('events.destroy');  
 
Route::get('/', 'MainController@index')->name('welcome');
Route::resource('events', 'EventController');

Route::get('/dashboard', function () {
    return view('dashboard');
 })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//I will  replace routes with resources routes methodes later