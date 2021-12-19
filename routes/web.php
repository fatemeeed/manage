<?php

use App\Http\Controllers\Admin\Content\DeviceController;
use App\Http\Controllers\Admin\Content\FormItemController;
use App\Http\Controllers\Admin\Content\ProjectController;
use App\Http\Controllers\Admin\Control\InstallController;
use App\Http\Controllers\Admin\Control\MarketingController;
use App\Http\Controllers\Admin\Customer\MerchInfoController;
use App\Http\Controllers\Admin\Customer\CallController;
use App\Http\Controllers\Admin\Equipment\EquipDashboardController;
use App\Http\Controllers\Admin\Equipment\PspDeliveryController;
use App\Http\Controllers\Admin\Equipment\ReceiptController;
use App\Http\Controllers\Admin\Equipment\RolDashboardController;
use App\Http\Controllers\Admin\Equipment\TechDeliveryController;
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

        Route::prefix('psp_receipt')->group(function(){

            Route::get('/create',[ReceiptController::class,'create'])->name('admin.equipment.psp_receipt.create');
            Route::post('/store',[ReceiptController::class,'store'])->name('admin.equipment.psp_receipt.store');

        });

        Route::prefix('psp_delivery')->group(function(){

            Route::get('/create',[PspDeliveryController::class,'create'])->name('admin.equipment.psp_delivery.create');
            Route::post('/store',[PspDeliveryController::class,'store'])->name('admin.equipment.psp_delivery.store');

        });
        Route::prefix('technician_delivery')->group(function(){

            Route::get('/create',[TechDeliveryController::class,'create'])->name('admin.equipment.technician_delivery.create');
            Route::post('/store',[TechDeliveryController::class,'store'])->name('admin.equipment.technician_delivery.store');

        });
        Route::prefix('equipment_dashboard')->group(function(){

            Route::get('/',[EquipDashboardController::class,'index'])->name('admin.equipment.equip_dashboard.index');
            Route::get('/show',[EquipDashboardController::class,'show'])->name('admin.equipment.equip_dashboard.show');

        });
        
        


    });


    //merchant
    Route::prefix('customers')->namespace('Customer')->group(function(){

    
        Route::prefix('merchant')->group(function(){

            Route::get('/',[MerchInfoController::class,'index'])->name('admin.merchant.index');
            Route::get('/edit',[MerchInfoController::class,'edit'])->name('admin.merchant.edit');
            Route::post('/update',[MerchInfoController::class,'update'])->name('admin.merchant.update');
            Route::get('/call-report',[MerchInfoController::class,'callReport'])->name('admin.merchant.callReport');

        });


    });

    //pm

    Route::prefix('control')->namespace('Control')->group(function(){

    
        Route::prefix('marketing')->group(function(){

            Route::get('/',[MarketingController::class,'index'])->name('admin.control.marketing.index');
            Route::get('/create',[MarketingController::class,'create'])->name('admin.control.marketing.create');
            Route::post('/store',[MarketingController::class,'store'])->name('admin.control.marketing.store');
            Route::get('/edit',[MarketingController::class,'edit'])->name('admin.control.marketing.edit');
            Route::post('/update',[MarketingController::class,'update'])->name('admin.control.marketing.update');
            Route::get('/marketing-evaluation',[MarketingController::class,'marketingEvaluation'])->name('admin.control.marketing.evaluation');

        });

        Route::prefix('install')->group(function(){

            Route::get('/waiting-install',[InstallController::class,'waitingInstall'])->name('admin.control.install.waitingInstall');
            Route::get('/install-no-transaction',[InstallController::class,'installNoTransaction'])->name('admin.control.install.installNoTransaction');
            Route::get('/install-evaluation',[InstallController::class,'installEvaluation'])->name('admin.control.install.installEvaluation');

        });

        

    });

    //vip

    //transaction

});