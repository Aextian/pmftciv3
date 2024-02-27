<?php

use App\Http\Controllers\Auth\Admin\AdminAuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;




Route::get('/dashboard', function () {

    $admin = auth()->guard('admin')->user();
        
    return Inertia::render('Admin/Index',[ 'admin' => $admin]);
    
})->name('Tesaxt');
