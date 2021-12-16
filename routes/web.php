<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class , 'home']);
Route::get('/productlist/{catid}',[HomeController::class , 'productlist']);
Route::get('/productdetail/{pid}',[HomeController::class , 'productdetail']);
Route::get('/addtocart/{pid}',[HomeController::class , 'addtocart']);
Route::get('/loginregister',[HomeController::class , 'loginregister']);
Route::post('/login',[HomeController::class , 'login']);
Route::get('/logout',[HomeController::class , 'logout']);
Route::get('/error',function (){
    return "errorpage";
});
Route::post('/register',[HomeController::class , 'register']);
Route::get('/cart',[HomeController::class , 'cart']);
Route::get('/cartdelete/{pid}',[HomeController::class , 'cartdelete']);
Route::get('/buydetail/{pid}',[HomeController::class,'buydetail']);
Route::post('/buy',[HomeController::class,'buy']);
Route::get('/orders',[HomeController::class,'orders']);

