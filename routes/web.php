<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\userAuth;
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
// Route::post('/user', function () {
//     return view('welcome');
// });
Route::view('signup','signup');//for signup.blade.php route connection
Route::view('login','login');//for login.blade.php path
Route::post("user",[userAuth::class,'userlogin']);//for controller path
