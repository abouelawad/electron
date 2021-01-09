<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\AdminAuth\LoginController as AdminLoginController ;
use App\Http\Controllers\AdminAuth\RegisterController as AdminRegisterController ;

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
// });

Route::get('/' , [HomeController::class , 'index']);

// Route::get('/theadmin' ,function(){return "admin";});


// user Auth (predefined)
Auth::routes();

// admin Auth (user defined ) for multi auth 

Route::prefix('/dashboard')->group(function () {
  
  Route::get('/' , [AdminController::class , 'index']);
  Route::get('/products' , [AdminProductController::class , 'index']);

  Route::get('login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
  Route::post('login', [AdminLoginController::class, 'login'])->name('admin.login.post');
  
  Route::post('logout', [AdminLoginController::class, 'login'])->name('admin.login.post');

  Route::get('register', [AdminRegisterController::class, 'showRegistrationForm'])->name('admin.register');
  Route::post('register', [AdminRegisterController ::class, 'register'])->name('admin.register.post'); 
});



