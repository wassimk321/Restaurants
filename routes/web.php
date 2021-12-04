<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('cat-list', 'categoryController@catList');

Route::get('/', function () {
    return view('home');
});

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);
Route::get('logout', 'Auth\LoginController@logout');
Route::middleware(['admin'])->group(function(){

Route::resource('role', "roleController");
Route::resource('user', "userController");
Route::get('pagination-role',"roleController@page");
Route::get('pagination-user',"userController@page");
Route::get('user/{id}/deleted',"userController@deleted");
Route::get('role/{id}/deleted',"roleController@deleted");
  });
Route::middleware(['resturent'])->group(function(){
	
	Route::resource('resturnt', "resturentController");
    Route::get('pagination-resturent',"resturentController@page");
	Route::get('resturnt/{id}/deleted',"resturentController@deleted");
});
Route::middleware(['meal'])->group(function(){
Route::resource('category', "categoryController");
Route::get('category/{id}/deleted',"categoryController@deleted");

Route::resource('mealType', "mealTypeController");
Route::get('mealType/{id}/deleted',"mealTypeController@deleted");
Route::resource('meal', "mealController");
Route::get('meal/{id}/deleted',"mealController@deleted");
Route::get('pagination-mealType',"mealTypeController@page");
Route::get('pagination-meal',"mealController@page");
});
Auth::routes();



Route::get('/index','viewController@index')->name('index');
Route::get('/','viewController@index')->name('index');
Route::get('/menu','viewController@menu')->name('ui.menu');


Route::get('/results', 'viewController@res')->name('results');
Route::get('cat/{id}', 'viewController@category')->name('cat.show');
Route::get('menu/{id}', 'viewController@menu')->name('menu');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
