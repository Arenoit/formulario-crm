<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProvincesController;
use App\Http\Controllers\FormUserController;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/form', function () {
    return view('form');
})->name('form');
Route::get('/provinces', function () {
    return view('provinces');
})->name('provinces');
Route::post('apply1', 'ProvincesController@data_provinces')->name('send-province');
Route::post('apply2', 'FormUserController@data_users')->name('send-form');
Route::put('apply3', 'ProvincesController@edit')->name('edit-province');
Route::delete('apply4/{id}', 'ProvincesController@delete')->name('delete-province');
Route::get('/edit-province/{id}', function ($id) {
    return view('edit-provinces', compact('id'));
})->name('edit-provincia');
Route::get('/registers', function () {
    return view('registers');
})->name('registers');
Route::get('/edit-register/{id}', function ($id) {
    return view('edit-registers', compact('id'));
})->name('edit-register');
Route::put('apply5/{id}', 'FormUserController@edit')->name('edit-user');
Route::delete('apply6/{id}', 'FormUserController@delete')->name('delete-user');
Route::get('/form-suitecrm', function () {
    return view('form-suitecrm');
})->name('form-suitecrm');
Route::get('/provi-suitecrm', function () {
    return view('form-suitecrm2');
})->name('provi-suitecrm');