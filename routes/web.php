<?php

use App\Http\Controllers\Admin\Content\DeviceController;
use App\Http\Controllers\Admin\Content\FormItemController;
use App\Http\Controllers\Admin\Content\ProjectController;
use App\Http\Controllers\Admin\Control\CollectController;
use App\Http\Controllers\Admin\Control\DocumentController;
use App\Http\Controllers\Admin\Control\EMControler;
use App\Http\Controllers\Admin\Control\EMController;
use App\Http\Controllers\Admin\Control\InstallController;
use App\Http\Controllers\Admin\Control\MarketingController;
use App\Http\Controllers\Admin\Control\PMController;
use App\Http\Controllers\Admin\Customer\MerchInfoController;
use App\Http\Controllers\Admin\Customer\CallController;
use App\Http\Controllers\Admin\Equipment\AttributionController;
use App\Http\Controllers\Admin\Equipment\EquipDashboardController;
use App\Http\Controllers\Admin\Equipment\PspDeliveryController;
use App\Http\Controllers\Admin\Equipment\ReceiptController;
use App\Http\Controllers\Admin\Equipment\RolDashboardController;
use App\Http\Controllers\Admin\Equipment\TechDeliveryController;
use App\Http\Controllers\Admin\Ticket\TicketController;
use App\Http\Controllers\Admin\Transaction\TransactionController;
use App\Http\Controllers\Admin\User\AdminUserController;
use App\Http\Controllers\Admin\User\PermissionController;
use App\Http\Controllers\Admin\User\RoleController;
use App\Http\Controllers\Admin\Vip\VipController;
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
    Route::prefix('ticket')->namespace('Ticket')->group(function(){

        Route::get('/new-tickets',[TicketController::class,'newTickets'])->name('admin.ticket.newTickets');
        Route::get('/open-tickets',[TicketController::class,'openTickets'])->name('admin.ticket.openTickets');
        Route::get('/close-tickets',[TicketController::class,'closeTickets'])->name('admin.ticket.closeTickets');
        Route::get('/',[TicketController::class,'index'])->name('admin.ticket.index');
        Route::get('/show',[TicketController::class,'show'])->name('admin.ticket.show');
        Route::get('/create',[TicketController::class,'create'])->name('admin.ticket.create');
        Route::post('/store',[TicketController::class,'store'])->name('admin.ticket.store');
        Route::get('/edit/{id}',[TicketController::class,'edit'])->name('admin.ticket.edit');
        Route::put('/update/{id}',[TicketController::class,'update'])->name('admin.ticket.update');
        Route::delete('/destroy/{id}',[TicketController::class,'destroy'])->name('admin.ticket.destroy');

    });

    //user
    Route::prefix('user')->namespace('User')->group(function(){



    });

    //content
    Route::prefix('content')->namespace('Content')->group(function(){

        Route::prefix('devices')->group(function(){

            Route::get('/',[DeviceController::class,'index'])->name('admin.content.device.index');
            Route::get('/create',[DeviceController::class,'create'])->name('admin.content.device.create');
            Route::post('/store',[DeviceController::class,'store'])->name('admin.content.device.store');
            Route::get('/edit/{id}',[DeviceController::class,'edit'])->name('admin.content.device.edit');
            Route::put('/update/{id}',[DeviceController::class,'update'])->name('admin.content.device.update');
            Route::delete('/destroy/{id}',[DeviceController::class,'destroy'])->name('admin.content.device..destroy');


        });
        Route::prefix('project')->group(function(){

            Route::get('/',[ProjectController::class,'index'])->name('admin.content.project.index');
            Route::get('/create',[ProjectController::class,'create'])->name('admin.content.project.create');
            Route::post('/store',[ProjectController::class,'store'])->name('admin.content.project.store');
            Route::get('/edit/{id}',[ProjectController::class,'edit'])->name('admin.content.project.edit');
            Route::put('/update/{id}',[ProjectController::class,'update'])->name('admin.content.project.update');
            Route::delete('/destroy/{id}',[ProjectController::class,'destroy'])->name('admin.content.project.destroy');

        });

        Route::prefix('form')->group(function(){

            Route::get('/',[FormItemController::class,'index'])->name('admin.content.form.index');
            Route::get('/create',[FormItemController::class,'create'])->name('admin.content.form.create');
            Route::get('/store',[FormItemController::class,'store'])->name('admin.content.form.store');
            Route::get('/edit/{id}',[FormItemController::class,'edit'])->name('admin.content.form.edit');
            Route::get('/update/{id}',[FormItemController::class,'update'])->name('admin.content.form.update');
            Route::get('/destroy/{id}',[FormItemController::class,'destroy'])->name('admin.content.form.destroy');

        });

        Route::prefix('dataUpdate')->group(function(){

            Route::get('/transaction-update',[UpdateController::class,'create'])->name('admin.content.update.transaction');
            Route::get('/merchant-update',[UpdateController::class,'create'])->name('admin.content.update.merchant');
            Route::get('/document-update',[UpdateController::class,'create'])->name('admin.content.update.document');


        });

    });

    //equipment
    Route::prefix('equipment')->namespace('Equipment')->group(function(){

        Route::prefix('psp-receipt')->group(function(){

            Route::get('/create',[ReceiptController::class,'create'])->name('admin.equipment.psp_receipt.create');
            Route::post('/store',[ReceiptController::class,'store'])->name('admin.equipment.psp_receipt.store');

        });

        Route::prefix('psp-delivery')->group(function(){

            Route::get('/create',[PspDeliveryController::class,'create'])->name('admin.equipment.psp_delivery.create');
            Route::post('/store',[PspDeliveryController::class,'store'])->name('admin.equipment.psp_delivery.store');

        });
        Route::prefix('technician-delivery')->group(function(){

            Route::get('/create',[TechDeliveryController::class,'create'])->name('admin.equipment.technician_delivery.create');
            Route::post('/store',[TechDeliveryController::class,'store'])->name('admin.equipment.technician_delivery.store');

        });
        Route::prefix('equipment_dashboard')->group(function(){

            Route::get('/',[EquipDashboardController::class,'index'])->name('admin.equipment.equip_dashboard.index');
            Route::get('/show',[EquipDashboardController::class,'show'])->name('admin.equipment.equip_dashboard.show');

        });

        Route::prefix('attribution')->group(function(){

            Route::get('/',[AttributionController::class,'create'])->name('admin.equipment.attribution.create');
            Route::get('/change-status',[AttributionController::class,'changeStatus'])->name('admin.equipment.attribution.changeStatus');
            Route::get('/attribution-history',[AttributionController::class,'attributionHistory'])->name('admin.equipment.attribution.attributionHistory');
            Route::get('/equipment-control',[AttributionController::class,'equipmentControl'])->name('admin.equipment.attribution.equipmentControl');
            Route::get('/attribution-conflict',[AttributionController::class,'attributionConflict'])->name('admin.equipment.attribution.attributionConflict');
            

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

    //control

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

        Route::prefix('PM')->group(function(){

            Route::get('/',[PMController::class,'index'])->name('admin.control.pm.index');
            Route::get('/PM-detail',[PMController::class,'pmDetail'])->name('admin.control.pm.pmDetail');
            Route::get('/not-pm',[PMController::class,'notPm'])->name('admin.control.pm.notPm');
            Route::get('/control-version',[PMController::class,'controlVersion'])->name('admin.control.pm.controlVersion');

        });

        Route::prefix('EM')->group(function(){

            Route::get('/',[EMController::class,'index'])->name('admin.control.em.index');
            Route::get('/new-EM',[EMController::class,'newEM'])->name('admin.control.em.newEM');

        });

        Route::prefix('document')->group(function(){

            Route::get('/',[DocumentController::class,'merchDocument'])->name('admin.control.document.merchDocument');
            Route::get('/document-project-detail',[DocumentController::class,'projectDetail'])->name('admin.control.document.projectDetail');
           

        });

        Route::prefix('collect')->group(function(){

            Route::get('/',[CollectController::class,'collect'])->name('admin.control.collect.collectReport');
           
        });
        

    });

    //vip
    Route::prefix('VIP')->namespace('Control')->group(function(){

        Route::get('/slump-vip',[VipController::class,'slumpVip'])->name('admin.vip.slumpVip');
        Route::get('/stop-vip',[VipController::class,'stopVip'])->name('admin.vip.stopVip');
        Route::get('/plans-vip',[VipController::class,'plansVip'])->name('admin.vip.plansVip');


    });

    //transaction

    Route::prefix('transaction')->namespace('Control')->group(function(){

        Route::get('/performance',[TransactionController::class,'performance'])->name('admin.transaction.performance');
        Route::get('/not-transaction',[TransactionController::class,'notTransaction'])->name('admin.transaction.notTransaction');

    });

    Route::prefix('user')->namespace('User')->group(function(){
        
        //admin-user
        Route::prefix('admin-user')->group(function(){ 

            Route::get('/',[AdminUserController::class,'index'])->name('admin.user.admin-user.index');
            Route::get('/create',[AdminUserController::class,'create'])->name('admin.user.admin-user.create');
            Route::post('/store',[AdminUserController::class,'store'])->name('admin.user.admin-user.store');
            Route::get('/edit/{id}',[AdminUserController::class,'edit'])->name('admin.user.admin-user.edit');
            Route::put('/update/{id}',[AdminUserController::class,'update'])->name('admin.user.admin-user.update');
            Route::delete('/destroy/{id}',[AdminUserController::class,'destroy'])->name('admin.user.admin-user.destroy');

        });

        //role
        Route::prefix('role')->group(function(){ 

            Route::get('/',[RoleController::class,'index'])->name('admin.user.role.index');
            Route::get('/create',[RoleController::class,'create'])->name('admin.user.role.create');
            Route::post('/store',[RoleController::class,'store'])->name('admin.user.role.store');
            Route::get('/edit/{id}',[RoleController::class,'edit'])->name('admin.user.role.edit');
            Route::put('/update/{id}',[RoleController::class,'update'])->name('admin.user.role.update');
            Route::delete('/destroy/{id}',[RoleController::class,'destroy'])->name('admin.user.role.destroy');

        });

        //permission
        Route::prefix('permission')->group(function(){ 

            Route::get('/',[PermissionController::class,'index'])->name('admin.user.permission.index');
            Route::get('/create',[PermissionController::class,'create'])->name('admin.user.permission.create');
            Route::post('/store',[PermissionController::class,'store'])->name('admin.user.permission.store');
            Route::get('/edit/{id}',[PermissionController::class,'edit'])->name('admin.user.permission.edit');
            Route::put('/update/{id}',[PermissionController::class,'update'])->name('admin.user.permission.update');
            Route::delete('/destroy/{id}',[PermissionController::class,'destroy'])->name('admin.user.permission.destroy');

        });

    });

    
    Route::prefix('setting')->namespace('Setting')->group(function(){

        Route::get('/',[SettingController::class,'index'])->name('admin.setting.index');
            Route::get('/create',[SettingController::class,'create'])->name('admin.user.setting.create');
            Route::post('/store',[SettingController::class,'store'])->name('admin.user.setting.store');
            Route::get('/edit/{id}',[SettingController::class,'edit'])->name('admin.user.setting.edit');
            Route::put('/update/{id}',[SettingController::class,'update'])->name('admin.user.setting.update');
            Route::delete('/destroy/{id}',[SettingController::class,'destroy'])->name('admin.user.setting.destroy');

    });



});