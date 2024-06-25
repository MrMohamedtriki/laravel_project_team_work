<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\web\WebLoginController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

/*555gg*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [WebLoginController::class, 'offre'])->name('web.offre');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [ProductController::class, 'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/AdminProduit', [ProductController::class, 'index'])->name('admin.produit');
    Route::get('/AdminDashboard', [WebLoginController::class, 'index'])->name('web.index');
    Route::post('/produit', [ProductController::class, 'store'])->name('admin.produit.store');
    Route::get('/produit/create', [ProductController::class, 'create'])->name('produit.create');

    // Route::get('/produit/create', function () {
    //     return view('createproduit', ['user' => Auth::guard('admin')->user()]);
    // })->name('produit.create');
    

    Route::get('/produit/{id}/edit', [ProductController::class, 'edit'])->name('admin.produit.edit');
    Route::put('/produit/{id}', [ProductController::class, 'update'])->name('admin.produit.update');
    Route::delete('/produit/{id}', [ProductController::class, 'destroy'])->name('produit.destroy');
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    
        Route::get('/dashboard', function () {
            return view('dashboard', ['user' => Auth::guard('admin')->user()]);
        })->name('dashboard');

    Route::get('/home', [HomeController::class, 'index'])->name('admin.home');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard');
});

Route::prefix('admin')->group(function () {
Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/login-submit', [AdminController::class, 'login_submit'])->name('admin_login_submit');
Route::get('/logout', [AdminController::class, 'logout'])->name('admin_logout');

});
require __DIR__.'/auth.php';


