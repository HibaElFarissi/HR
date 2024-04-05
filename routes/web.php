<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserAuth;
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

Route::get('/', function () {
    return view('welcome');

});
Route::POST("user",[UserAuth::class,'userLogin']);
Route::view("login",'login');

// Route::get('/login', function () {
//     return view('login');
// });
// Route::view("login",'login');


// Home page:

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    });

    Route::resource('personnels' ,'PersonnelsController');



       // VacationReuqest:
       Route::get('/personnels/{id}/vacation', 'PersonnelsController@VacationRequest')->name('vacation.request');

       //  CertificateRequest:
       Route::get('/personnels/{id}/certificate', 'PersonnelsController@CertificateRequest')->name('certificate.request');

       //  SalaireRequest:
       Route::get('/personnels/{id}/salaire', 'PersonnelsController@SalaireRequest')->name('salaire.request');

});

Route::get('/email', [App\Http\Controllers\EmailController::class, 'create']);
Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
