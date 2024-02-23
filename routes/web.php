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
    Route::post('admin/create-about-post', [DashboardController::class, 'store']);
    Route::get('admin/edit-about', [DashboardController::class, 'edit_about']);
    // Route::put('admin/edit-about-details-update', [DashboardController::class, 'edit_about_update']);

    Route::delete('admin/about-delete', [DashboardController::class, 'destroy_about']);
    // Route::post('/', [DashboardController::class, 'logout']);

    Route::get('admin/exprience', [DashboardController::class, 'index_experience']);
    Route::post('admin/create-exprience', [DashboardController::class, 'create_experience']);

});

Route::get('/', [HomeController::class, 'index']);

Route::get('forgot-password', [AuthController::class,'forgot']);

Route::post('email-confirmation', [AuthController::class,'email_confirmation']);
