<?php

use App\Http\Controllers\Admin\Content\DeviceController;
use App\Http\Controllers\Admin\Content\FormItemController;
use App\Http\Controllers\Admin\Content\ProjectController;
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

// Route::get('/', function () {
//     return view('auth.login');
// });


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('admin')->namespace('Admin')->group(function(){

    Route::get('/','AdminDashboardController@index')->name('admin.home');

    //cartable
    Route::prefix('cartable')->namespace('Cartable')->group(function(){



    });

    //user
    Route::prefix('user')->namespace('User')->group(function(){



    });

    //content
    Route::prefix('content')->namespace('Content')->group(function(){

        Route::prefix('devices')->group(function(){

            Route::get('/',[DeviceController::class,'index'])->name('admin.content.device.index');
            Route::get('/create',[DeviceController::class,'create'])->name('admin.content.device.create');

        });
        Route::prefix('project')->group(function(){

            Route::get('/',[ProjectController::class,'index'])->name('admin.content.project.index');
            Route::get('/create',[ProjectController::class,'create'])->name('admin.content.project.create');

        });

        Route::prefix('form')->group(function(){

            Route::get('/',[FormItemController::class,'index'])->name('admin.content.form.index');
            Route::get('/create',[FormItemController::class,'create'])->name('admin.content.form.create');

        });

        Route::prefix('dataUpdate')->group(function(){

            Route::get('/transaction-update',[UpdateController::class,'create'])->name('admin.content.update.transaction');
            Route::get('/merchant-update',[UpdateController::class,'create'])->name('admin.content.update.merchant');
            Route::get('/document-update',[UpdateController::class,'create'])->name('admin.content.update.document');


        });

    });

    //equipment
    Route::prefix('equipment')->namespace('Equipment')->group(function(){

        Route::prefix('entrepot')->group(function(){

        });
        Route::prefix('attribute')->group(function(){

        });


    });


    //merchant
    Route::prefix('customers')->namespace('Customer')->group(function(){

    
        Route::prefix('merchant')->group(function(){

        });


    });

    //pm

    //vip

    //transaction

});