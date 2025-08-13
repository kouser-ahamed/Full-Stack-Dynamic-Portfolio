<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\ExperienceController;

// Admin Routes
Route::middleware(['auth', ])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('/admin/users', UserController::class, ['as' => 'admin']);
    Route::resource('/admin/projects', ProjectController::class, ['as' => 'admin']);
    Route::resource('/admin/skills', SkillController::class, ['as' => 'admin']);
    Route::resource('/admin/education', EducationController::class, ['as' => 'admin']);
    Route::resource('/admin/achievements', AchievementController::class, ['as' => 'admin']);
    Route::resource('/admin/experiences', ExperienceController::class, ['as' => 'admin']);
    Route::post('/admin/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('admin.logout');
});


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
