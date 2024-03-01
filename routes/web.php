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

    // dashboard pages
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('admin/table-details', [DashboardController::class, 'tables']);
    Route::get('logout', [AuthController::class, 'logout']);
    // end dashboard pages


    // about pages
    Route::get('admin/create-about', [DashboardController::class, 'create']);

    Route::post('admin/create-about-post', [DashboardController::class, 'edit_about_store']);

    Route::get('admin/edit-about/{id}', [DashboardController::class, 'edit_about']);

    Route::PUT('admin/edit-about-details-update/{id}', [DashboardController::class, 'edit_about_update']);

    // end about pages

    // Experience pages
    Route::get('admin/exprience', [DashboardController::class, 'index_experience']);

    Route::post('admin/create-exprience', [DashboardController::class, 'create_experience']);

    Route::get('admin/edit-experience/{id}', [DashboardController::class, 'edit_exp']);

    Route::put('admin/edit-experience-update/{id}', [DashboardController::class, 'edit_update_exp']);

    // end Experience pages

    // education pages

    Route::get('admin/education', [DashboardController::class, 'education']);

    Route::post('admin/create-education', [DashboardController::class, 'create_education']);

    Route::get('admin/edit-education/{id}', [DashboardController::class, 'edit_education']);

    Route::put('admin/edit-education-update/{id}', [DashboardController::class, 'update_education']);

    // end education pages

    // Skill pages Create and edit pages
    Route::get('admin/create-skill', [DashboardController::class, 'create_skill']);

    Route::post('admin/create-skill-store', [DashboardController::class, 'create_skill_store']);

    Route::get('admin/edit-skill/{id}', [DashboardController::class, 'edit_skill']);

    Route::put('admin/update-skill/{id}', [DashboardController::class, 'update_skill']);

    // end function for skills pages

    // preview index page

    Route::get('admin/preview-indexpages', [DashboardController::class, 'preview']);

    Route::get('admin/preview-create-indexpages', [DashboardController::class, 'create_index']);

    Route::post('admin/preview-insert-newindex-view', [DashboardController::class, 'create_new_index_view']);

    Route::get('admin/preview-edit-indexpages/{id}', [DashboardController::class, 'edit_index_view']);

    route::put('admin/preview-update-indexpages/{id}', [DashboardController::class, 'update_index_view']);

    // end index page

    // preview portfolio pages

    Route::get('admin/preview-portfolio', [DashboardController::class, 'preview_portfolio']);

    Route::get('admin/preview-portfolio-create-portfolio', [DashboardController::class, 'create_portfolio_index']);

    Route::post('admin/preview-portfolio-create-portfolio-newindex-view', [DashboardController::class, 'create_portfolio_new_index']);

    Route::get('admin/preview-portfolio-edit-portfolio/{id}', [DashboardController::class, 'edit_portfolio_index']);

    Route::put('admin/preview-portfolio-update-portfolio/{id]', [DashboardController::class, 'update_portfolio_index']);

    // function for delete of about
    Route::get('admin/delete-about-detail/{id}', [DashboardController::class, 'destroy']);
    // end delete table detail

       // function for delete of experience
       Route::get('admin/delete-experience-detail/{id}', [DashboardController::class, 'destroy_experience']);
       // end delete table detail

       // function for delete of skill
       Route::get('admin/delete-skill-detail/{id}', [DashboardController::class, 'destroy_skill']);
       // end delete table detail

       // function for delete of education
       Route::get('admin/delete-education-detail/{id}', [DashboardController::class, 'destroy_education']);
       // end delete table detail

});

Route::get('/', [HomeController::class, 'index']);

Route::get('forgot-password', [AuthController::class,'forgot']);

Route::post('email-confirmation', [AuthController::class,'email_confirmation']);
