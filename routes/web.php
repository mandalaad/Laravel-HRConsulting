<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OurclientController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;

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
    return view('welcome');
});
Route::get('/Services',[ServicesController::class,'index']);
Route::get('/aboutus',[AboutusController::class,'index']);
Route::get('/Landingpage',[LandingpageController::class, 'index']);
Route::get('/Ourclient',[OurclientController::class,'index']);
Route::get('/Login',[LoginController::class, 'index']);
// Route::get('/service'[ServicesController::class, 'ind'])
