<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('login', [AuthController::class, 'login']);
Route::post('login_admin', [AuthController::class, 'login_admin']);

Route::group(['middleware' => 'admin'], function(){

    // route::get('Admin/home' , [DashboardController::class, 'home']);
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('admin/table-details', [DashboardController::class, 'tables']);
    Route::get('admin/create-about', [DashboardController::class, 'create']);
    // Route::post('/', [DashboardController::class, 'logout']);

});

Route::get('/', [HomeController::class, 'index']);

Route::get('forgot-password', [AuthController::class,'forgot']);

Route::post('email-confirmation', [AuthController::class,'email_confirmation']);
