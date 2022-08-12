<?php
use App\Http\Controllers\contactController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\aboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
    return view('welcome');
});
Route::get('/categories',[categoryController::class,'create']);
Route::get('/about',[aboutController::class,'about']);
Route::get('/contact',[contactController::class,'contact']);
Route::post('/send-message',[contactController::class,'SendMessage']);
Route::get('/category',[categoryController::class,'category']);


