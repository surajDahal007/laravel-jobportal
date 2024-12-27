<?php

use App\Http\Controllers\Employer\Auth\LoginController;
use App\Http\Controllers\Employer\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::prefix('employer')->middleware('guest:employer')->group(function () {

    Route::get('register', [RegisteredUserController::class, 'create'])->name('employer.register');
    Route::post('register', [RegisteredUserController::class, 'store']);
    
    Route::get('login', [LoginController::class, 'create'])->name('employer.login');
    Route::post('login', [LoginController::class, 'store']);
});

Route::prefix('employer')->middleware('auth:employer')->group(function () {
    
    Route::get('/dashboard', function () {

        $emp_id = Auth::guard('employer')->id();
        $jobs = DB::table('postjobs')->where('employer_id', '=', $emp_id)->get();

        return view('employer.dashboard',[
            'jobs' => $jobs
        ]);
    })->name('employer.dashboard');

    Route::get('/postJobs', function () {
        return view('employer.postJobs');
    })->name('employer.postJobs');

    Route::post('logout', [LoginController::class, 'destroy'])->name('employer.logout');
    Route::post('postJob', [LoginController::class, 'postJob'])->name('employer.postJob');

});
