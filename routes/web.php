<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash; 
use App\Models\Category;
use App\Models\Banner;
use App\Models\Product;
use App\Http\Controllers\BannerController;
Route::get('/', [ProductController::class, 'publicHome'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::post('/login', function (Request $request) {
    $user = User::where('email', $request->email)->first();
    if ($user && Hash::check($request->password, $user->password)) {
        Auth::login($user);
        return redirect()->route('categories.index');
    }
    return back()->withErrors([
        'email' => 'Email hoặc mật khẩu không đúng.',
    ]);
})->name('doLogin');

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/login');
})->name('logout');

Route::resource('banners', BannerController::class)->middleware('auth');
Route::get('/gioi-thieu', function () {
    $categories = category::all(); // nếu header dùng categories
    $banners = Banner::all(); // nếu header dùng banners
    return view('partials.about', compact('categories', 'banners'));
});
Route::get('/product/{id}', [ProductController::class, 'show'])->name('products.custom_show');
// routes/web.php
Route::get('/danh-muc/{id}', [ProductController::class, 'category'])->name('category.products');
Route::get('/dao-tao-hoc-vien', function () {
    $categories = category::all(); // nếu header dùng categories
    $banners = Banner::all(); // nếu header dùng banners
    return view('partials.training', compact('categories', 'banners'));
});
Route::get('/dich-vu-xo-khuyen', function () {
    $categories = category::all(); // nếu header dùng categories
    $banners = Banner::all(); // nếu header dùng banners
    return view('partials.piercing', compact('categories', 'banners'));
});