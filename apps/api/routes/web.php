<?php

use App\Http\Controllers\Api\V1\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/profile', [
        PortfolioController::class,
        'profile',
    ]);

    Route::get('/experiences', [
        PortfolioController::class,
        'experiences',
    ]);

    Route::get('/education', [
        PortfolioController::class,
        'education',
    ]);

    Route::get('/skills', [
        PortfolioController::class,
        'skills',
    ]);

    Route::get('/projects', [
        PortfolioController::class,
        'projects',
    ]);

    Route::get('/projects/{project:slug}', [
        PortfolioController::class,
        'project',
    ]);

    Route::get('/certifications', [
        PortfolioController::class,
        'certifications',
    ]);

    Route::get('/achievements', [
        PortfolioController::class,
        'achievements',
    ]);

    Route::get('/social-links', [
        PortfolioController::class,
        'socialLinks',
    ]);
});