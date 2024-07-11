<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[\App\Http\Controllers\HomeController::class, 'index']);
Route::resource('home', \App\Http\Controllers\HomeController::class);

// admin disini
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [\App\Http\Controllers\LoginController::class, 'index']);
    Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
    Route::resource('user', \App\Http\Controllers\UserController::class);
    Route::resource('profile', \App\Http\Controllers\ProfileController::class);
    Route::resource('experience', \App\Http\Controllers\ExperienceController::class);
    Route::resource('education', \App\Http\Controllers\EducationController::class);
    Route::resource('skill', \App\Http\Controllers\SkillController::class);
    Route::resource('interest', \App\Http\Controllers\InterestController::class);
    Route::resource('awards', \App\Http\Controllers\AwardsController::class);
    Route::resource('setting', \App\Http\Controllers\SettingController::class);
});
