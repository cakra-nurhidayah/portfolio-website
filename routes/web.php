<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminSkilsController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminProjectController;





// Admin pages 
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/skills', [AdminSkilsController::class, 'index'])->name('skills');
    Route::get('/skills/create', [AdminSkilsController::class, 'create'])->name('skills.create');
    Route::post('/skills', [AdminSkilsController::class, 'store'])->name('skills.store');
    Route::get('/skills/{skill}/edit', [AdminSkilsController::class, 'edit'])->name('skills.edit');
    Route::put('/skills/{skill}', [AdminSkilsController::class, 'update'])->name('skills.update');
    Route::delete('/skills/{skill}', [AdminSkilsController::class, 'destroy'])->name('skills.destroy');
    Route::get('/services', [AdminServiceController::class, 'index'])->name('services');
    Route::get('/services/create', [AdminServiceController::class, 'create'])->name('services.create');
    Route::post('/services', [AdminServiceController::class, 'store'])->name('services.store');
    Route::get('/services/{service}/edit', [AdminServiceController::class, 'edit'])->name('services.edit');
    Route::put('/services/{service}', [AdminServiceController::class, 'update'])->name('services.update');
    Route::delete('/services/{service}', [AdminServiceController::class, 'destroy'])->name('services.destroy');
    Route::get('/projects', [AdminProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/create', [AdminProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects', [AdminProjectController::class, 'store'])->name('projects.store');
    Route::get('/projects/{id}', [AdminProjectController::class, 'show'])->name('projects.show');
    Route::get('/projects/{id}/edit', [AdminProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{id}', [AdminProjectController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{id}', [AdminProjectController::class, 'destroy'])->name('projects.destroy');
    Route::delete('/projects/image/{id}', [AdminProjectController::class, 'deleteImage'])->name('projects.image.delete');
});



// route untuk user 
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
Route::get('/project/{id}', [HomeController::class, 'projectDetail'])->name('project.detail');
Route::get('/about', function() { return view('user/aboutme'); })->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
