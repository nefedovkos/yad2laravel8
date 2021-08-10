<?php

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


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/i', function () {
    return view('index');
});




Route::get('/', function () {
    return view('add-apartment');
});








//Route::group(['namespace'=>'User'], function (){
//    Route::get('/users', 'IndexController')->name('users.index');
//    Route::get('/users/create', 'CreateController')->name('users.create');
//    Route::post('/users', 'StoreController')->name('users.store');
//    Route::get('/users/{user}', 'ShowController')->name('users.show');
//    Route::get('/users/{user}/edit', 'EditController')->name('users.edit');
//    Route::patch('/users/{user}', 'UpdateController')->name('users.update');
//    Route::delete('/users/{user}', 'DestroyController')->name('users.destroy');
//});
//
//Route::group(['namespace'=>'Apartment'], function (){
//    Route::get('/apartments', 'IndexController')->name('apartments.index');
//    Route::get('/apartments/create', 'CreateController')->name('apartments.create');
//    Route::post('/apartments', 'StoreController')->name('apartments.store');
//    Route::get('/apartments/{apartment}', 'ShowController')->name('apartments.show');
//    Route::get('/apartments/{apartment}/edit', 'EditController')->name('apartments.edit');
//    Route::patch('/apartments/{apartment}', 'UpdateController')->name('apartments.update');
//    Route::delete('/apartments/{apartment}', 'DestroyController')->name('apartments.destroy');
//});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
