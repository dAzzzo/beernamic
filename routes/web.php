<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\HomeController;

// Rutas de autenticación generadas por Laravel
Auth::routes();

// Ruta pública: Página de inicio
Route::get('/', function () {
    return view('index');
})->name('index');

// Ruta pública: Productos (index y show)
Route::get('/productos', [ProductosController::class, 'index'])->name('productos.index');
Route::get('/producto/{producto}', [ProductosController::class, 'show'])->name('producto.show');

// Ruta pública: Sobre nosotros
Route::get('/sobre-nosotros', function () {
    return view('sobre-nosotros');
})->name('sobre-nosotros');

// Ruta pública: Para aprender
Route::get('/para-aprender', function () {
    return view('para-aprender');
})->name('para-aprender');

// Ruta pública: Página de inicio para usuarios autenticados (HomeController)
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rutas que requieren autenticación
Route::middleware(['auth'])->group(function () {
    // Rutas del carrito de compras
    Route::group(['prefix' => 'cart'], function () {
        Route::get('/', [CartController::class, 'showCart'])->name('cart.index');
        Route::get('/cart', [CartController::class, 'index'])->name('cart.show'); 
        Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
        Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');  
    });

    // Rutas para el administrador
         Route::put('/productos/{producto}', [ProductosController::class, 'update'])->name('productos.update');
        Route::delete('/productos/{producto}', [ProductosController::class, 'destroy'])->name('productos.destroy');
        Route::post('/productos', [ProductosController::class, 'store'])->name('productos.store');
        Route::get('/productos/create', [ProductosController::class, 'create'])->name('productos.create');
   

    // Otras rutas que cualquier usuario autenticado puede acceder, en este caso es el usuario, que aparece cuando pulsas en "Hola, <nombre de usuario>"
    Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil.index');
});

// Ruta para el logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
