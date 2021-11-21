<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/test', [App\Http\Controllers\TestController::class, 'test']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/all_companies', [App\Http\Controllers\CompanyController::class, 'all_companies'])->name('all_companies');
Route::get('/company_profile/{company_id}', [App\Http\Controllers\CompanyController::class, 'company_profile'])->name('company_profile');

Auth::routes();

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

// Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/user_import', [App\Http\Controllers\UserController::class, 'user_import'])->name('user_import');
Route::get('/user_export', [App\Http\Controllers\UserController::class, 'user_export'])->name('user_export');

Route::post('/company_import', [App\Http\Controllers\CompanyController::class, 'company_import'])->name('company_import');
Route::get('/company_export', [App\Http\Controllers\CompanyController::class, 'company_export'])->name('company_export');



Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => 'is_admin'], function () {

        Route::prefix('admin')->group(function () {

            Route::get('/dashboard', function () {
                return "Alo";
            });

        });

    });

});

Route::group(
    [
    'prefix'=>'user',
    'as'=>'user.',
    ],function(){

        Route::group(['middleware' => 'auth'], function () {

            Route::get('/dashboard', function () {
                return view('user.dashboard');
            })->name('dashboard');

            // Route::get('/', function () {
            //     return view('index');
            // })->name('index');

        });

    }
);

// Route::prefix('user')->group(function () {

//     Route::group(['middleware' => 'auth'], function () {

//         Route::get('/dashboard', function () {
//             return view('user.dashboard');
//         })->name('dashboard');

//     });

// });


