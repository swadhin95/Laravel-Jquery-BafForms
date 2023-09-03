<?php

use Illuminate\Support\Facades\Route;

// Beginning Of Form600AController Routes
use Pondit\BAF\Bafform\Http\Controllers\Form600AController;
Route::group(['middleware' => ['web'], 'prefix' => 'form-600As', 'as' => 'form600As.'], function () {

    Route::get('/', [Form600AController::class, 'index'])->name('index');
    Route::get('/create', [Form600AController::class, 'create'])->name('create');
    Route::get('/view/{form600A}', [Form600AController::class, 'view'])->name('view');
    Route::get('/edit/{form600A}', [Form600AController::class, 'edit'])->name('edit');

    Route::post('/store', [Form600AController::class, 'store'])->name('store');
    Route::post('/update/{form600A}', [Form600AController::class, 'update'])->name('update');

    Route::post('/trash/{form600A}', [Form600AController::class, 'delete'])->name('delete');
    
});
// End Of Form600AController Routes

// Beginning Of Form600AController Routes
use Pondit\BAF\Bafform\Http\Controllers\Form675Controller;
Route::group(['middleware' => ['web'], 'prefix' => 'form-675', 'as' => 'form675.'], function () {

    Route::get('/', [Form675Controller::class, 'index'])->name('index');
    Route::get('/create', [Form675Controller::class, 'create'])->name('create');
    Route::get('/view/{form675}', [Form675Controller::class, 'view'])->name('view');
    Route::get('/edit/{form675}', [Form675Controller::class, 'edit'])->name('edit');
    Route::post('/store', [Form675Controller::class, 'store'])->name('store');
    //Route::post('/update/{form675}', [Form675Controller::class, 'update'])->name('update');
    Route::post('/update/{form675}', [Form675Controller::class, 'update'])->name('update');
    Route::get('/trash/{form675}', [Form675Controller::class, 'delete'])->name('delete');
    Route::get('/pdf/{form675}', [Form675Controller::class, 'downloadPdf'])->name('downloadPdf');
});
// End Of Form600AController Routes


// Beginning Of Form673Controller Routes

use Pondit\BAF\Bafform\Http\Controllers\Form673Controller;

Route::group(['middleware' => ['web'], 'prefix' => 'form-673', 'as' => 'form673.'], function () {

    Route::get('/', [Form673Controller::class, 'index'])->name('index');
    Route::get('/create', [Form673Controller::class, 'create'])->name('create');
    Route::get('/view/{form673}', [Form673Controller::class, 'view'])->name('view');
    Route::get('/edit/{form673}', [Form673Controller::class, 'edit'])->name('edit');

    Route::post('/store', [Form673Controller::class, 'store'])->name('store');
    Route::post('/update/{form673}', [Form673Controller::class, 'update'])->name('update');

    Route::post('/trash/{form673}', [Form673Controller::class, 'delete'])->name('delete');
    
});

// End Of Form673Controller Routes


// Beginning Of Form674Controller Routes

use Pondit\BAF\Bafform\Http\Controllers\Form674Controller;

Route::group(['middleware' => ['web'], 'prefix' => 'form-674', 'as' => 'form674.'], function () {

    Route::get('/', [Form674Controller::class, 'index'])->name('index');
    Route::get('/create', [Form674Controller::class, 'create'])->name('create');
    Route::get('/view/{form674}', [Form674Controller::class, 'view'])->name('view');
    Route::get('/edit/{form674}', [Form674Controller::class, 'edit'])->name('edit');

    Route::post('/store', [Form674Controller::class, 'store'])->name('store');
    Route::post('/update/{form674}', [Form674Controller::class, 'update'])->name('update');

    Route::post('/trash/{form674}', [Form674Controller::class, 'delete'])->name('delete');
    Route::get('/pdf/{form674}', [Form674Controller::class, 'downloadPdf'])->name('downloadPdf');
    
});

// End Of Form673Controller Routes


// Beginning Of Form530Controller Routes

use Pondit\BAF\Bafform\Http\Controllers\Form530Controller;

Route::group(['middleware' => ['web'], 'prefix' => 'form-530', 'as' => 'form530.'], function () {

    Route::get('/', [Form530Controller::class, 'index'])->name('index');
    Route::get('/create', [Form530Controller::class, 'create'])->name('create');
    Route::get('/view/{form530}', [Form530Controller::class, 'view'])->name('view');
    Route::get('/edit/{form530}', [Form530Controller::class, 'edit'])->name('edit');

    Route::post('/store', [Form530Controller::class, 'store'])->name('store');
    Route::post('/update/{form530}', [Form530Controller::class, 'update'])->name('update');

    Route::post('/trash/{form530}', [Form530Controller::class, 'delete'])->name('delete');
    
});

// End Of Form530Controller Routes

