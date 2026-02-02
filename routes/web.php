<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\StoreController;
use App\Models\Store;

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

use App\Http\Controllers\FrontendStoreController;

$live_slug = [];
$admin_slug = ['prefix' => 'admin'];

if (config('app.env') === 'server') {
    $admin_slug['domain'] = "admin.radio2pir.com";
    $live_slug['domain'] = "live.radio2pir.com";
}

// Frontend Store Routes
Route::group($live_slug, function () {
    Route::get('/', function () {
        return redirect('admin/login');
    });
    Route::get('/1/{slug}', [FrontendStoreController::class, 'showLegacy'])->name('front.store.legacy');
    Route::get('/{slug}', [FrontendStoreController::class, 'show'])->name('front.store');
});

Route::group($admin_slug, function () {
    Route::get('/', function () {
        return redirect('admin/login');
    });

    Auth::routes([
        'register' => false, // Registration Routes...
        'reset' => false, // Password Reset Routes...
        'verify' => false, // Email Verification Routes...
        'confirm' => false, // Password Reset Routes...
      ]); 

    // Home routes
    Route::get('/home', [HomeController::class, 'index'])->name('admin.home')->middleware('Role:dashboard');
    
    //User Route
    Route::get('/user', [UsersController::class, 'index'])->name('admin.user')->middleware('Role:user');
    Route::get('/user/add', [UsersController::class, 'add'])->name('admin.user.add')->middleware('Role:user');
    Route::post('/user/create', [UsersController::class, 'create'])->name('admin.user.create')->middleware('Role:user');
    Route::get('/user/edit/{id}', [UsersController::class, 'edit'])->name('admin.user.edit')->middleware('Role:user');
    Route::post('/user/update', [UsersController::class, 'update'])->name('admin.user.update')->middleware('Role:user');
    Route::get('/user/delete/{id}', [UsersController::class, 'delete'])->name('admin.user.delete')->middleware('Role:user');

    // Store Route
    Route::get('/store', [StoreController::class, 'index'])->name('admin.store')->middleware('Role:dashboard');
    Route::get('/store/add', [StoreController::class, 'add'])->name('admin.store.add')->middleware('Role:dashboard');
    Route::post('/store/insert', [StoreController::class, 'insert'])->name('admin.store.insert')->middleware('Role:dashboard');
    Route::get('/store/edit/{id}', [StoreController::class, 'edit'])->name('admin.store.edit')->middleware('Role:user');
    Route::post('/store/update', [StoreController::class, 'update'])->name('admin.store.update')->middleware('Role:user');
    Route::get('/store/delete/{id}', [StoreController::class, 'delete'])->name('admin.store.delete')->middleware('Role:user');
});
