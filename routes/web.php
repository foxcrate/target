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
Route::get('/category_index', [App\Http\Controllers\CategoryController::class, 'category_index'])->name('category_index');
Route::get('/all_packages', [App\Http\Controllers\PackageController::class, 'all_packages'])->name('all_packages');

Route::get('/company_profile/{company_id}', [App\Http\Controllers\CompanyController::class, 'company_profile'])->name('company_profile');

Auth::routes();

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/excel', function () {
    return view('home');
})->name('excel');

// Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/user_import', [App\Http\Controllers\UserController::class, 'user_import'])->name('user_import');
Route::get('/user_export', [App\Http\Controllers\UserController::class, 'user_export'])->name('user_export');

Route::post('/company_import', [App\Http\Controllers\CompanyController::class, 'company_import'])->name('company_import');
Route::get('/company_export', [App\Http\Controllers\CompanyController::class, 'company_export'])->name('company_export');



Route::group(['middleware' => 'auth'], function () {

    Route::group(['prefix'=>'admin', 'as'=>'admin.','middleware' => 'is_admin'], function () {

        Route::prefix('admin')->group(function () {

            Route::get('/dashboard', function () {
                return "Alo";
            });

        });

    });

    Route::group( ['prefix'=>'user', 'as'=>'user.'],function(){

        Route::get('/dashboard', function () {
            return view('user.dashboard');
        })->name('dashboard');

        Route::get('/my_company', function () {
            return view('user.my_company');
        })->name('my_company');

        // Route::get('/past_messages', [App\Http\Controllers\MessageController::class, 'past_messages'])->name('past_messages');
        // Route::get('/inbox', [App\Http\Controllers\MessageController::class, 'inbox'])->name('inbox');

    });

    Route::group( ['prefix'=>'company', 'as'=>'company.'],function(){

        Route::get('/add', function () {
            return view('company.add');
        })->name('add');

        Route::post('/add', [App\Http\Controllers\CompanyController::class, 'add'])->name('add_post');
        Route::post('/rate', [App\Http\Controllers\CompanyController::class, 'rate'])->name('rate');


    });

    Route::group( ['prefix'=>'message', 'as'=>'message.'],function(){

        Route::get('/past_messages/{sender_id}/{receiver_id}', [App\Http\Controllers\MessageController::class, 'past_messages'])->name('past_messages');
        Route::get('/inbox', [App\Http\Controllers\MessageController::class, 'inbox'])->name('inbox');
        Route::get('/message_to_company/{receiver_id}/{sender_id}', [App\Http\Controllers\MessageController::class, 'message_to_company'])->name('message_to_company');
        Route::post('/post_message_to_company', [App\Http\Controllers\MessageController::class, 'post_message_to_company'])->name('post_message_to_company');
        Route::post('/delete', [App\Http\Controllers\MessageController::class, 'delete'])->name('delete');

    });

    Route::group( ['prefix'=>'pdf', 'as'=>'pdf.'],function(){

        Route::get('/{company_id}', [App\Http\Controllers\PdfController::class, 'index'])->name('index');
        Route::post('/add', [App\Http\Controllers\PdfController::class, 'add'])->name('add');
        Route::get('delete/{pdf_id}', [App\Http\Controllers\PdfController::class, 'delete'])->name('delete');

    });

    Route::group( ['prefix'=>'image', 'as'=>'image.'],function(){

        Route::get('/{company_id}', [App\Http\Controllers\ImageController::class, 'index'])->name('index');
        Route::post('/add', [App\Http\Controllers\ImageController::class, 'add'])->name('add');
        Route::get('/delete/{image_id}', [App\Http\Controllers\ImageController::class, 'delete'])->name('delete');

    });

    Route::group( ['prefix'=>'video', 'as'=>'video.'],function(){

        Route::get('/{company_id}', [App\Http\Controllers\VideoController::class, 'index'])->name('index');
        Route::post('/add', [App\Http\Controllers\VideoController::class, 'add'])->name('add');
        Route::get('/delete/{video_id}', [App\Http\Controllers\VideoController::class, 'delete'])->name('delete');

    });

    Route::group( ['prefix'=>'branch', 'as'=>'branch.'],function(){

        Route::get('/{company_id}', [App\Http\Controllers\BranchController::class, 'index'])->name('index');
        Route::post('/add', [App\Http\Controllers\BranchController::class, 'add'])->name('add');
        Route::get('/delete/{branch_id}', [App\Http\Controllers\BranchController::class, 'delete'])->name('delete');
        Route::get('/edit/{branch_id}', [App\Http\Controllers\BranchController::class, 'edit'])->name('edit');
        Route::post('/edit_post', [App\Http\Controllers\BranchController::class, 'edit_post'])->name('edit_post');

    });

    Route::group( ['prefix'=>'blog', 'as'=>'blog.'],function(){

        Route::get('/{company_id}', [App\Http\Controllers\BlogController::class, 'index'])->name('index');
        Route::post('/add', [App\Http\Controllers\BlogController::class, 'add'])->name('add');

    });

    Route::group( ['prefix'=>'product', 'as'=>'product.'],function(){

        Route::get('/{company_id}', [App\Http\Controllers\ProductController::class, 'index'])->name('index');
        Route::post('/add', [App\Http\Controllers\ProductController::class, 'add'])->name('add');

    });

    Route::group( ['prefix'=>'ad', 'as'=>'ad.'],function(){

        Route::get('/add_get', [App\Http\Controllers\AdController::class, 'add_get'])->name('add_get');
        Route::get('/{user_id}', [App\Http\Controllers\AdController::class, 'index'])->name('index');
        Route::post('/add_post', [App\Http\Controllers\AdController::class, 'add_post'])->name('add_post');
        Route::get('/delete/{ad_id}', [App\Http\Controllers\AdController::class, 'delete'])->name('delete');
        Route::get('recharge/{ad_id}', [App\Http\Controllers\AdController::class, 'recharge'])->name('recharge');

    });

});

// Route::group( ['prefix'=>'user', 'as'=>'user.'],function(){

//         Route::group(['middleware' => 'auth'], function () {

//             Route::get('/dashboard', function () {
//                 return view('user.dashboard');
//             })->name('dashboard');

//             // Route::get('/', function () {
//             //     return view('index');
//             // })->name('index');

//         });

//     }
// );

// Route::prefix('user')->group(function () {

//     Route::group(['middleware' => 'auth'], function () {

//         Route::get('/dashboard', function () {
//             return view('user.dashboard');
//         })->name('dashboard');

//     });

// });


