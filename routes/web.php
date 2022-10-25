<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\InstituicaosController;

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

Route::get('/', ['uses' => 'Controller@homepage']);
Route::get('/cadastrar', ['uses' => 'Controller@cadastrar']);


//Rotas para login do usuario

Route::get('/login', ['uses' => 'Controller@fazerlogin']);


Route::post('/login', ['as'=> 'user.login', 'uses' => 'PostsController@auth']);

Route::get('/dashboard', ['as'=> 'user.dashboard', 'uses' => 'DashBoardController@index']);

Route::resource('user', 'UsersController');

Route::resource('instituition', 'InstituitionsController');

Route::resource('group', 'GroupsController');