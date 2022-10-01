<?php

use App\Http\Controllers\UserController;
use App\Models\Address;
use App\Models\User;
use Faker\Factory;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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
Route::get('/user',function(){
    $users = User::all();
    return view("index",compact('users'));
});
// Route::get('/user',[UserController::class,'getUser']);
Route::get('/address',function(){
    $addresses = Address::all();
    return view('index1',compact('addresses'));
});