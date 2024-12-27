<?php

use App\Models\Postjob;
use App\Models\Appliedjob;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;


Route::get('/', [HomeController::class, 'view_home']);
Route::get('/registerPage', [HomeController::class, 'registerPage']);
Route::get('/view-job/{job}', [HomeController::class, 'viewJob']);

Route::get('/employer/register', function () {
    return view('employer.auth.register');
});

Route::get('/employerRegPage', function () {
    return view('employerRegPage');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/postGeneralInfo',[ProfileController::class, 'postGeneralInfo'])->name('profile.postGeneralInfo');
    Route::post('/postObjective',[ProfileController::class, 'postObjective'])->name('profile.postObjective');
    Route::post('/workExperiences',[ProfileController::class, 'workExperiences'])->name('profile.workExperiences');
    Route::post('/educationLevel',[ProfileController::class, 'educationLevel'])->name('profile.educationLevel');
    Route::post('/skills',[ProfileController::class, 'skills'])->name('profile.skills');
    
    Route::post('/applyJob',[ProfileController::class, 'applyJob']);
    Route::get('/getAppliedJobs', [ProfileController::class, 'getAppliedJobs']);

    Route::get('/user/cv', [ProfileController::class, 'user_cv']);
    Route::get('/appliedJobInfo/{job}', [ProfileController::class, 'appliedJobInfo']);
    
});

require __DIR__.'/auth.php';
require __DIR__.'/employer-auth.php';