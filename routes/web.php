<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/one', function () {
    return view('welcome');
});

Route::post('/', function (Request $request) {
    if ($request->isJson()) {
        return $request->input('name');
    }

    return $request->role;
});

Route::get('/person/{id}', function(Request $request, int $id) {
    return view('person', [
        'data' => $request->all(),
        'id' => $id
    ]);
});

Route::get('/product', [ProductController::class, 'index']);

Route::get('/product/create', [ProductController::class, 'create'])
    ->name('product.create');

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/product/{id}/edit', [ProductController::class, 'edit'])
    ->name('product.edit');

Route::post('/product', [ProductController::class, 'store'])
    ->name('product.store');

Route::put('/product/{id}', [ProductController::class, 'update'])
    ->name('product.update');