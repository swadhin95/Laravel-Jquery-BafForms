<?php

use Illuminate\Support\Facades\Route;

// Beginning Of form600AApiController Routes

use Pondit\BAF\Bafform\Http\Controllers\Api\Form600AApiController;

Route::middleware(['api'])->prefix('form600As/api')->group(function () {

        Route::post('/', [Form600AApiController::class, 'index']);
        Route::post('/view/{form600A}', [Form600AApiController::class, 'view']);
        Route::post('/edit/{form600A}', [Form600AApiController::class, 'edit']);
        Route::post('/store', [Form600AApiController::class, 'store']);
        Route::post('/update', [Form600AApiController::class, 'update']);
        Route::post('/trash/{form600A}', [Form600AApiController::class, 'delete']);

});

// End Of form600AApiController Routes

// Start Of form675ApiController Routes
// use Pondit\BAF\Bafform\Http\Controllers\Api\Form675ApiController;

// Route::middleware(['api'])->prefix('form675/api')->group(function () {

//         Route::post('/', [Form675ApiController::class, 'index']);
//         Route::post('/view/{form675}', [Form675ApiController::class, 'view']);
//         Route::post('/edit/{form675}', [Form675ApiController::class, 'edit']);
//         Route::post('/store', [Form675ApiController::class, 'store']);
//         Route::post('/update', [Form675ApiController::class, 'update']);
//         Route::post('/trash/{form675}', [Form675ApiController::class, 'delete']);

// });
// End Of form675ApiController Routes


// Start Of form674ApiController Routes
use Pondit\BAF\Bafform\Http\Controllers\Api\Form674ApiController;

Route::middleware(['api'])->prefix('form674/api')->group(function () {

        Route::post('/', [Form674ApiController::class, 'index']);
        Route::post('/view/{form674}', [Form674ApiController::class, 'view']);
        Route::post('/edit/{form674}', [Form674ApiController::class, 'edit']);
        Route::post('/store', [Form674ApiController::class, 'store']);
        Route::post('/update', [Form674ApiController::class, 'update']);
        Route::post('/trash/{form674}', [Form674ApiController::class, 'delete']);

});

// End Of form674ApiController Routes


// Start Of form673ApiController Routes
use Pondit\BAF\Bafform\Http\Controllers\Api\Form673ApiController;

Route::middleware(['api'])->prefix('form673/api')->group(function () {

        Route::post('/', [Form673ApiController::class, 'index']);
        Route::post('/view/{form673}', [Form673ApiController::class, 'view']);
        Route::post('/edit/{form673}', [Form673ApiController::class, 'edit']);
        Route::post('/store', [Form673ApiController::class, 'store']);
        Route::post('/update', [Form673ApiController::class, 'update']);
        Route::post('/trash/{form673}', [Form673ApiController::class, 'delete']);

});

// End Of form673ApiController Routes



// Start Of form530ApiController Routes
use Pondit\BAF\Bafform\Http\Controllers\Api\Form530ApiController;

Route::middleware(['api'])->prefix('form530/api')->group(function () {

        Route::post('/', [Form530ApiController::class, 'index']);
        Route::post('/view/{form530}', [Form530ApiController::class, 'view']);
        Route::post('/edit/{form530}', [Form530ApiController::class, 'edit']);
        Route::post('/store', [Form530ApiController::class, 'store']);
        Route::post('/update', [Form530ApiController::class, 'update']);
        Route::post('/trash/{form530}', [Form530ApiController::class, 'delete']);

});
// End Of form530ApiController Routes