<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CartController;



// Te manda a index
Route::get('/index', function () {
    return view('index');
})->name('index');

//Te manda a cart/index donde se encuentra el carrito
Route::group(['prefix' => 'cart'], function () {
    Route::get('/', [CartController::class, 'showCart'])->name('cart.index');
    //Necesita el id del usuario
    Route::post('/add/{id}', [CartController::class, 'addToCart'])->name('cart.addToCart');
    Route::patch('/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/{id}', [CartController::class, 'remove'])->name('cart.remove');
});

//Te manda a productos/index
Route::get('/productos', [ProductosController::class, 'index'])->name('productos.index');
Route::get('/producto/{producto}', [ProductosController::class, 'show'])->name('producto.show');
//Los siguientes sirven para realizar el update, el delete y la creación de los productos si eres admin
Route::middleware(['admin'])->group(function () {
Route::put('/productos/{producto}', [ProductosController::class, 'update'])->name('productos.update');
Route::delete('/productos/{producto}', [ProductosController::class, 'destroy'])->name('productos.destroy');
Route::post('/productos', [ProductosController::class, 'store'])->name('productos.store');
Route::get('/productos/create', [ProductosController::class, 'create'])->name('productos.create');
});

// Te manda a sobre nosotros
Route::get('/sobre-nosotros', function () {
    return view('sobre-nosotros');
})->name('sobre-nosotros');

// Te manda a para aprender
Route::get('/para-aprender', function () {
    return view('para-aprender');
})->name('para-aprender');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
