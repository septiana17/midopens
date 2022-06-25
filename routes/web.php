<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('index'); # diganti landing page
})->name('home');

Route::get('/request', function () {
    return view('request'); # diganti landing page
})->name('request');

Route::get('/public_post', function () {
    return view('public_post'); # diganti landing page
})->name('public_posted');

Route::get('/internal_post', function () {
    return view('internal_post'); # diganti landing page
})->name('internal_posted');

Route::get('/external_post', function () {
    return view('external_post'); # diganti landing page
})->name('external_posted');

Route::get('/internal_event', function () {
    return view('internal_event'); # diganti landing page
})->name('internal');

Route::get('/external_event', function () {
    return view('external_event'); # diganti landing page
})->name('external');

Route::get('/view_picture', function () {
    return view('view_picture'); # diganti landing page
});

Route::get('/view_text', function () {
    return view('view_text'); # diganti landing page
});

Route::get('/view_video', function() {
    return view('view_video');
});

Route::group(['prefix' => '/admin','middleware'=>'auth'], function ()
{
    # dashboard utama
    Route::get('/dashboard', [DashboardController::class, 'viewDashboard'])->name('admin.dashboard');

    # CRUD Public Informartion
    Route::get('/general', [DashboardController::class, 'viewPublic'])->name('admin.public_general');
    Route::get('/general/content/create', [DashboardController::class, 'createPublic'])->name('admin.public_general.create');
    Route::get('/general/content/edit/{id}', [DashboardController::class, 'editPublic'])->name('admin.public_general.edit');
    Route::post('/general/content/store', [DashboardController::class, 'store'])->name('admin.public_general.store');
    Route::put('/general/content/update/{id}', [DashboardController::class, 'update'])->name('admin.public_general.update');
    Route::delete('/general/content/delete/{id}', [DashboardController::class, 'delete'])->name('admin.public_general.delete');
    
    # CRUD Internal Information
    Route::get('/internal', [DashboardController::class, 'viewInternal'])->name('admin.internal_general');
    Route::get('/internal/content/create', [DashboardController::class, 'createInternal'])->name('admin.internal_general.create');
    Route::get('/internal/content/edit/{id}', [DashboardController::class, 'editInternal'])->name('admin.internal_general.edit');
    Route::post('/internal/content/store', [DashboardController::class, 'store'])->name('admin.internal_general.store');
    Route::put('/internal/content/update/{id}', [DashboardController::class, 'update'])->name('admin.internal_general.update');
    Route::delete('/internal/content/delete/{id}', [DashboardController::class, 'delete'])->name('admin.internal_general.delete');

    # CRUD External Information
    Route::get('/external', [DashboardController::class, 'viewExternal'])->name('admin.external_general');
    Route::get('/external/content/create', [DashboardController::class, 'createExternal'])->name('admin.external_general.create');
    Route::get('/external/content/edit/{id}', [DashboardController::class, 'editExternal'])->name('admin.external_general.edit');
    Route::post('/external/content/store', [DashboardController::class, 'store'])->name('admin.external_general.store');
    Route::put('/external/content/update/{id}', [DashboardController::class, 'update'])->name('admin.external_general.update');
    Route::delete('/external/content/delete/{id}', [DashboardController::class, 'delete'])->name('admin.external_general.delete');

    Route::get('/users/content', [ContentController::class, 'view'])->name('admin.post_request'); 

    # CRUD Category
    Route::get('/category', [DashboardController::class, 'viewCategory'])->name('admin.category');
    Route::post('/category/content/create', [DashboardController::class, 'createCategory'])->name('admin.category.create');
    Route::delete('/category/content/delete/{id}', [DashboardController::class, 'deleteCategory'])->name('admin.category.delete');
});

Route::group(['prefix' => '/comments', 'middleware'=>'auth'], function ()
{
    Route::post('/store', [CommentController::class, 'store'])->name('comments.store');
    Route::put('/update/{id}', [CommentController::class, 'update'])->name('comments.update');
    Route::delete('/delete/{id}', [CommentController::class, 'destroy'])->name('comments.delete');
});
