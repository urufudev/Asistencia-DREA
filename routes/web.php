<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\LaboralController;
use App\Http\Controllers\PensionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PresencialWorkController;
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

Route::get('/',[HomeController::class, 'index']);

require __DIR__.'/auth.php';
Route::view('/pages/form-wizard', 'form-wizard');
/* Auth::routes();
 */
//Regimen Laboral
Route::middleware(['auth'])->group(function () {
     
     //Roles
     Route::resource('roles',RoleController::class)->except(['show']);

     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

     Route::get('/profile',  [ProfileController::class, 'index'])->name('profile');
     Route::get('/account-setting', [ProfileController::class, 'setting'])->name('account-setting');
     Route::put('/account-setting/{user}',[ProfileController::class, 'updateInfo'])->name('account-setting.updateInfo');
     
     Route::put('/update-laboral/{user}',[ProfileController::class, 'updateLaboralInfo'])->name('account-setting.updateLaboralInfo');
     
     Route::put('/update-address/{user}',[ProfileController::class, 'updateAddress'])->name('account-setting.updateAddress');

     Route::put('/update-password/{user}',[ProfileController::class, 'updatePassword'])->name('account-setting.updatePassword');

     Route::resource('laborals',LaboralController::class)->except(['show']);
     Route::resource('offices',OfficeController::class)->except(['show']);
     Route::resource('users',UserController::class);
     Route::resource('pensions',PensionController::class)->except(['show']);
     Route::resource('conditions',ConditionController::class)->except(['show']);
     Route::resource('positions',PositionController::class)->except(['show']);
     Route::resource('events',EventController::class);
     Route::get('events/{event}/pdf', [EventController::class, 'pdf'])->name('events.pdf');


     Route::resource('presencials',PresencialWorkController::class);

     Route::get('/events/{event}/attendance', [PresencialWorkController::class, 'attendance'])->name('attendance');
     


     Route::get('wizard', [FormController::class, 'formWizard'])->name('form-wizard');
     //Roles
});
