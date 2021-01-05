<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\StoreController;

Route::match(['GET', 'POST'], 'account', [AccountController::class, 'index'])->name('account.index');
Route::match(['GET', 'POST'], 'account-login', [AccountController::class, 'login'])->name('account.login');
Route::match(['GET', 'POST'], 'account-signup', [AccountController::class, 'signup'])->name('account.signup');
Route::any('account-store', [AccountController::class, 'store'])->name('account.store');
Route::match(['GET', 'POST'], 'account-logout', [AccountController::class, 'logout'])->name('account.logout');
Route::match(['GET', 'POST'], 'account-forgot', [AccountController::class, 'forgot'])->name('account.forgot');
Route::match(['GET', 'POST'], 'account-orders', [AccountController::class, 'orders'])->name('account.orders');
Route::match(['GET', 'POST'], 'account-wishlist', [AccountController::class, 'wishlist'])->name('account.wishlist');
Route::match(['GET', 'POST'], 'account-wallet', [AccountController::class, 'wallet'])->name('account.wallet');
Route::match(['GET', 'POST'], 'account-address', [AccountController::class, 'address'])->name('account.address');

Route::match(['GET', 'POST'], 'categoria', [CategoriaController::class, 'index'])->name('categoria.index');

Route::match(['GET', 'POST'], 'blog', [PostController::class, 'index'])->name('blog.index');

Route::match(['GET', 'POST'], 'contact', [ContactController::class, 'index'])->name('contact.index');

Route::match(['GET', 'POST'], 'help', [HelpController::class, 'index'])->name('help.index');
Route::get('help', [HelpController::class, 'create'])->name('help.create');
Route::post('help', [HelpController::class, 'store'])->name('help.store');
Route::get('help/{id}', [HelpController::class, 'show'])->name('help.show');
Route::get('help/{id}/edit', [HelpController::class, 'edit'])->name('help.edit');
Route::match(['PUT', 'PATCH'], 'help/{id}', [HelpController::class, 'update'])->name('help.update');
Route::delete('help/{id}', [HelpController::class, 'destroy'])->name('help.destroy');

Route::match(['GET', 'POST'], 'home', [HomeController::class, 'index'])->name('home.index');

Route::match(['GET', 'POST'], 'order', [OrderController::class, 'index'])->name('order.index');
Route::match(['GET', 'POST'], 'order-shipping', [OrderController::class, 'shipping'])->name('order.shipping');
Route::match(['GET', 'POST'], 'order-payment', [OrderController::class, 'payment'])->name('order.payment');
Route::match(['GET', 'POST'], 'order-completed', [OrderController::class, 'completed'])->name('order.completed');

Route::match(['GET', 'POST'], 'produto', [ProdutoController::class, 'index'])->name('produto.index');

Route::match(['GET', 'POST'], 'store', [StoreController::class, 'index'])->name('store.index');


Route::redirect('/', 'home');
