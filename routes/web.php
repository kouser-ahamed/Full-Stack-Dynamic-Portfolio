<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;

Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/register', [AuthenticationController::class, 'register'])->name('register');


Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', [AuthenticationController::class, 'login'])->name('login');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/lp1', function () {
    return view('lp1');
});

// Dynamic route for services
Route::get('/services/{service}', function ($service) {
    // Validate service name to prevent injection
    $validServices = [
        'mobile-app-design', 
        'website-design', 
        'dashboard-design',
        'product-design',
        'branding-design',
        'graphics-design'
    ];
    
    if (!in_array($service, $validServices)) {
        abort(404);
    }
    
    // Convert slug to title case for display
    $title = ucwords(str_replace('-', ' ', $service));
    
    return view('service-detail', [
        'service' => $service,
        'title' => $title
    ]);
})->name('service.detail');
