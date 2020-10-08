<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestDriveController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/test-drive', function () {
    return redirect('/kh/test-drive');
});

Route::redirect('/', '/kh');//redirect homepage to /en

Route::group(['prefix' => '{language}'], function(){
    Route::get('/', function($language=null){
        App::setLocale($language);
        return view('index');
    })->name('home');

    Route::get('/contact', function($language=null){
        App::setLocale($language);
        return view('contact');
    })->name('contact');

    Route::get('/product', function($language=null){
        App::setLocale($language);
        return view('product');
    })->name('product');

    Route::get('/test-drive', function($language=null){
        App::setLocale($language);
        return view('test_drive');
    })->name('test_drive');

    Route::get('/dealer', function($language=null){
        App::setLocale($language);
        return view('dealer');
    })->name('dealer');

    Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send-email');
    Route::post('/submit-test-drive', [TestDriveController::class, 'submitTestDriveEmail'])->name('submit-test-drive-email');
});
