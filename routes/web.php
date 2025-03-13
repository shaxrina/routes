<?php

use Illuminate\Support\Facades\Route;

Route::get('/city/{name}', function ($name) {
    return "Welcome to {$name}!";
})->name('city.show');

Route::prefix('admin')->group(function () {
    Route::get('/users/{id}', function ($id) {
        return "User ID: {$id}";
    })->name('admin.users.show');
});

Route::prefix('profile')->group(function () {
    Route::get('/view', function () {
        return "Profile view";
    })->name('profile.view');

    Route::get('/edit', function () {
        return "Profile edit";
    })->name('profile.edit');

    Route::get('/settings', function () {
        return "Profile settings";
    })->name('profile.settings');
});

Route::prefix('products')->group(function () {
    Route::get('/', function () {
        return "All products";
    })->name('products.index');

    Route::get('/{id}', function ($id) {
        return "Product ID: {$id}";
    })->name('products.show');

    Route::get('/{id}/edit', function ($id) {
        return "Edit Product ID: {$id}";
    })->name('products.edit');
});

Route::redirect('/old-url', '/new-url');
