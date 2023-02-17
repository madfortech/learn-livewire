<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\UserHomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\ChangePasswordController;
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
Auth::routes([
    'verify' => true,
    'register' => true,
]);
/** Admin Routes */
Route::group([
    'prefix' => 'admin', 
    'as' => 'admin.', 
    'namespace' => 'Admin', 
    'middleware' => ['auth','role:super-admin','verified' ] // <= This is our new middleware
], function () {
    // ... other admin routes
    Route::get('/home', [App\Http\Controllers\Admin\AdminHomeController::class, 'index'])->name('admin.home');
});	

/** User Routes */
Route::group([
    'prefix' => 'user', 
    'as' => 'user.', 
    'namespace' => 'User', 
    'middleware' => ['auth','verified'] // <= This is our user routes here
], function () {
    // ... other users routes
    Route::get('/dashboard', [App\Http\Controllers\User\UserHomeController::class, 'index'])
    ->name('user.home');     
});	

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])
->name('profile.edit');  
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'update'])
->name('profile.update');  
Route::post('/profile/destroy', [App\Http\Controllers\ProfileController::class, 'destroy'])
->name('profile.destroy')->middleware('password.confirm'); 

Route::get('/password', [App\Http\Controllers\ChangePasswordController::class, 'edit'])
->name('password.edit');  
Route::post('/password', [App\Http\Controllers\ChangePasswordController::class, 'update'])
->name('password.change');  
 