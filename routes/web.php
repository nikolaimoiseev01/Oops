<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\Portal\PortalController::class, 'index'])->name('home');

Route::get('/instructions', function () {
    return view('portal.instruction_page');
})->name('instruction_page');

Route::get('/about', function () {
    return view('portal.about_page');
})->name('about_page');

Route::get('/posts', function () {
    return view('portal.posts_page');
})->name('posts_page');

Route::get('/where2buy', function () {
    return view('portal.where2buy_page');
})->name('where2buy_page');

Route::get('/goods', function () {
    return view('portal.goods_page');
})->name('goods_page');

Route::get('/posts/{post_id}', [App\Http\Controllers\Portal\PortalController::class, 'post_page'])->name('post_page');
Route::get('/goods/{good_id}', [App\Http\Controllers\Portal\PortalController::class, 'good_page'])->name('good_page');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
