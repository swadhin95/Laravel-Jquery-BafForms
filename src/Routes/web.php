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
    // Route::get('/trash/{form675}', [Form675Controller::class, 'delete'])->name('delete');
    Route::post('/trash/{form675}', [Form675Controller::class, 'delete'])->name('delete');
    Route::get('/pdf/{form675}', [Form675Controller::class, 'downloadPdf'])->name('downloadPdf');
});
// End Of Form600AController Routes


use Pondit\BAF\Bafform\Http\Controllers\EscCallLetterController;

Route::group(['middleware' => ['web'], 'prefix' => 'esc-call-letter', 'as' => 'EscCallLetter.'], function () {

    Route::get('/', [EscCallLetterController::class, 'index'])->name('index');
    Route::get('/create', [EscCallLetterController::class, 'create'])->name('create');
    Route::post('/store', [EscCallLetterController::class, 'store'])->name('store');
    Route::get('/view/{esc_calls}', [EscCallLetterController::class, 'view'])->name('view');
    Route::get('/edit/{esc_calls}', [EscCallLetterController::class, 'edit'])->name('edit');
    
    Route::post('/update/{esc_calls}', [EscCallLetterController::class, 'update'])->name('update');
    // Route::get('/trash/{form675}', [EscCallLetterController::class, 'delete'])->name('delete');
    Route::get('/trash/{esc_calls}', [EscCallLetterController::class, 'delete'])->name('delete');
    Route::get('/pdf/{escCall}', [EscCallLetterController::class, 'downloadPdf'])->name('downloadPdf');
});


use Pondit\BAF\Bafform\Http\Controllers\PresentStockQtyController;
Route::group(['middleware' => ['web'], 'prefix' => 'present-stock-qty', 'as' => 'PresentStockQty.'], function () {

    Route::get('/', [PresentStockQtyController::class, 'index'])->name('index');
    Route::get('/create', [PresentStockQtyController::class, 'create'])->name('create');
    Route::post('/store', [PresentStockQtyController::class, 'store'])->name('store');
    Route::get('/view/{PresentSQID}', [PresentStockQtyController::class, 'view'])->name('view');
    Route::get('/edit/{PresentSQID}', [PresentStockQtyController::class, 'edit'])->name('edit');
    
    Route::post('/update/{PresentSQID}', [PresentStockQtyController::class, 'update'])->name('update');
    Route::get('/trash/{PresentSQID}', [PresentStockQtyController::class, 'delete'])->name('delete');
    Route::get('/pdf/{PresentSQID}', [PresentStockQtyController::class, 'downloadPdf'])->name('downloadPdf');
});



// Beginning Of InfoSheetEscController Routes
use Pondit\BAF\Bafform\Http\Controllers\InfoSheetEscController;
Route::group(['middleware' => ['web'], 'prefix' => 'info-sheet', 'as' => 'InfoSheetEsc.'], function () {

    Route::get('index',[InfoSheetEscController::class,'index'])->name('index');
    Route::get('create',[InfoSheetEscController::class,'create'])->name('create');
    Route::post('store',[InfoSheetEscController::class,'store'])->name('store');
    Route::get('show/{id}',[InfoSheetEscController::class,'show'])->name('show');
    Route::get('edit/{id}',[InfoSheetEscController::class,'edit'])->name('edit');
    Route::post('update/{id}',[InfoSheetEscController::class,'update'])->name('update');
    Route::post('destroy',[InfoSheetEscController::class,'destroy'])->name('destroy');
    Route::get('/pdf/{id}', [InfoSheetEscController::class, 'downloadPdf'])->name('downloadPdf');

});



// Beginning Of MinutesApprovalLetterController Routes
use Pondit\BAF\Bafform\Http\Controllers\MinutesApprovalLetterController;
Route::group(['middleware' => ['web'], 'prefix' => 'minutes-approval-letter', 'as' => 'MinutesApprovalLetter.'], function () {


    Route::get('index',[MinutesApprovalLetterController::class,'index'])->name('index');
    Route::get('create',[MinutesApprovalLetterController::class,'create'])->name('create');
    Route::post('store',[MinutesApprovalLetterController::class,'store'])->name('store');
    Route::get('show/{id}',[MinutesApprovalLetterController::class,'show'])->name('show');
    Route::get('edit/{id}',[MinutesApprovalLetterController::class,'edit'])->name('edit');
    Route::post('update/{id}',[MinutesApprovalLetterController::class,'update'])->name('update');
    Route::post('destroy',[MinutesApprovalLetterController::class,'destroy'])->name('destroy');
    Route::get('/pdf/{id}', [MinutesApprovalLetterController::class, 'downloadPdf'])->name('downloadPdf');


});


// Beginning Of Form6Controller Routes
use Pondit\BAF\Bafform\Http\Controllers\Form6Controller;

Route::group(['middleware' => ['web'], 'prefix' => 'form-6', 'as' => 'form6.'], function () {

    Route::get('/', [Form6Controller::class, 'index'])->name('index');
    Route::get('/create', [Form6Controller::class, 'create'])->name('create');
    Route::get('/view/{form6}', [Form6Controller::class, 'view'])->name('view');
    Route::get('/edit/{form6}', [Form6Controller::class, 'edit'])->name('edit');
    Route::post('/store', [Form6Controller::class, 'store'])->name('store');
    Route::post('/update/{form6}', [Form6Controller::class, 'update'])->name('update');
    Route::get('/trash/{form6}', [Form6Controller::class, 'delete'])->name('delete');
    Route::get('/pdf/{form6}', [Form6Controller::class, 'downloadPdf'])->name('downloadPdf');
});
// End Of Form6Controller Routes

// Beginning Of Esc1Controller Routes
use Pondit\BAF\Bafform\Http\Controllers\esc1Controller;

Route::group(['middleware' => ['web'], 'prefix' => 'esc-1', 'as' => 'esc1.'], function () {

    Route::get('/', [esc1Controller::class, 'index'])->name('index');
    Route::get('/create', [esc1Controller::class, 'create'])->name('create');
    Route::get('/view/{esc1}', [esc1Controller::class, 'view'])->name('view');
    Route::get('/edit/{esc1}', [esc1Controller::class, 'edit'])->name('edit');
    Route::post('/store', [esc1Controller::class, 'store'])->name('store');
    Route::post('/update/{esc1}', [esc1Controller::class, 'update'])->name('update');
    Route::get('/trash/{esc1}', [esc1Controller::class, 'delete'])->name('delete');
    Route::get('/pdf/{esc1}', [esc1Controller::class, 'downloadPdf'])->name('downloadPdf');
});
// End Of Esc1Controller Routes

// Beginning Of Form34Controller Routes
use Pondit\BAF\Bafform\Http\Controllers\Form34Controller;

Route::group(['middleware' => ['web'], 'prefix' => 'form-34', 'as' => 'form34.'], function () {

    Route::get('/', [Form34Controller::class, 'index'])->name('index');
    Route::get('/create', [Form34Controller::class, 'create'])->name('create');
    Route::get('/view/{form34}', [Form34Controller::class, 'view'])->name('view');
    Route::get('/edit/{form34}', [Form34Controller::class, 'edit'])->name('edit');
    Route::post('/store', [Form34Controller::class, 'store'])->name('store');
    Route::post('/update/{form34}', [Form34Controller::class, 'update'])->name('update');
    Route::get('/trash/{form34}', [Form34Controller::class, 'delete'])->name('delete');
    Route::get('/pdf/{form34}', [Form34Controller::class, 'downloadPdf'])->name('downloadPdf');
});
// End Of Form34Controller Routes


// Beginning Of Form10289Controller Routes
use Pondit\BAF\Bafform\Http\Controllers\Form10289Controller;

Route::group(['middleware' => ['web'], 'prefix' => 'form-10289', 'as' => 'form10289.'], function () {

    Route::get('/', [Form10289Controller::class, 'index'])->name('index');
    Route::get('/create', [Form10289Controller::class, 'create'])->name('create');
    Route::get('/view/{form10289}', [Form10289Controller::class, 'view'])->name('view');
    Route::get('/edit/{form10289}', [Form10289Controller::class, 'edit'])->name('edit');
    Route::post('/store', [Form10289Controller::class, 'store'])->name('store');
    Route::post('/update/{form10289}', [Form10289Controller::class, 'update'])->name('update');
    Route::get('/trash/{form10289}', [Form10289Controller::class, 'delete'])->name('delete');
    Route::get('/pdf/{form10289}', [Form10289Controller::class, 'downloadPdf'])->name('downloadPdf');
});
// End Of Form10289Controller Routes

// Beginning Of Form664Controller Routes
use Pondit\BAF\Bafform\Http\Controllers\Form664Controller;

Route::group(['middleware' => ['web'], 'prefix' => 'form-664', 'as' => 'form664.'], function () {

    Route::get('/', [Form664Controller::class, 'index'])->name('index');
    Route::get('/create', [Form664Controller::class, 'create'])->name('create');
    Route::get('/view/{form664}', [Form664Controller::class, 'view'])->name('view');
    Route::get('/edit/{form664}', [Form664Controller::class, 'edit'])->name('edit');
    Route::post('/store', [Form664Controller::class, 'store'])->name('store');
    Route::post('/update/{form664}', [Form664Controller::class, 'update'])->name('update');
    Route::get('/trash/{form664}', [Form664Controller::class, 'delete'])->name('delete');
    Route::get('/pdf/{form664}', [Form664Controller::class, 'downloadPdf'])->name('downloadPdf');
});
// End Of Form664Controller Routes

// Beginning Of Form87Controller Routes
use Pondit\BAF\Bafform\Http\Controllers\Form87Controller;

Route::group(['middleware' => ['web'], 'prefix' => 'form-87', 'as' => 'form87.'], function () {

    Route::get('/', [Form87Controller::class, 'index'])->name('index');
    Route::get('/create', [Form87Controller::class, 'create'])->name('create');
    Route::get('/view/{form87}', [Form87Controller::class, 'view'])->name('view');
    Route::get('/edit/{form87}', [Form87Controller::class, 'edit'])->name('edit');
    Route::post('/store', [Form87Controller::class, 'store'])->name('store');
    Route::post('/update/{form87}', [Form87Controller::class, 'update'])->name('update');
    Route::get('/trash/{form87}', [Form87Controller::class, 'delete'])->name('delete');
    Route::get('/pdf/{form87}', [Form87Controller::class, 'downloadPdf'])->name('downloadPdf');
});
// End Of Form87Controller Routes