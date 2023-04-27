<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\EssamController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\permissionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\ViewerController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('cms/')->middleware('guest:admin')->group(function() {
    Route::get('{guard}/login' , [UserAuthController::class , 'showLogin'])->name('view.login');
    Route::post('{guard}/login' , [UserAuthController::class , 'login']);
});

Route::prefix('cms/admin')->middleware('auth:admin')->group(function() {
    Route::get('logout' , [UserAuthController::class , 'logout'])->name('view.logout');
});

Route::prefix('cms/admin/')->middleware('auth:admin')->group(function () {
    Route::view('' , 'cms.home')->name('view.home');
    Route::view('temp' , 'cms.temp');

    // Admin-Route
    Route::resource('admins' , AdminController::class);
    Route::post('admins_update/{id}' , [AdminController::class , 'update' ])->name('admins_update');

    Route::get('trashed' , [AdminController::class , 'trashed'])->name('trashed');

    Route::get('forceDelete/{id}' , [AdminController::class , 'forceDelete']);
    Route::get('softDelete/{id}' , [AdminController::class , 'softDelete']);
    Route::get('restore/{id}',[AdminController::class, 'restore']);
    Route::get('restore-all',[AdminController::class, 'restoreAll'])->name('restore-all');




});

