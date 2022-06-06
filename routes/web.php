<?php

use App\Mail\BirthdayMailable;
use App\Mail\ConfirmEventMailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\LaboralController;
use App\Http\Controllers\PensionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InfectedController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserInfectedController;
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

Route::get('/', [HomeController::class, 'index']);

require __DIR__ . '/auth.php';
Route::view('/pages/form-wizard', 'form-wizard');
/* Auth::routes();
 */
//Regimen Laboral
Route::get('/users-list', [UserController::class, 'userApi'])->name('usersapi.list');

Route::middleware(['auth'])->group(function () {

     Route::get('/send-mail', function () {
          $user = Auth::user();
          Mail::to($user)->send(new BirthdayMailable($user));

          return 'A message has been sent to Mailtrap!';
     });

     //Roles
     Route::resource('roles', RoleController::class)->except(['show']);

     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

     Route::get('/profile',  [ProfileController::class, 'index'])->name('profile');
     Route::get('/account-setting', [ProfileController::class, 'setting'])->name('account-setting');
     Route::get('/users/{user}/edit-profile', [ProfileController::class, 'editProfile'])->name('edit-profile');
     Route::put('/account-setting/{user}', [ProfileController::class, 'updateInfo'])->name('account-setting.updateInfo');

     Route::put('/update-laboral/{user}', [ProfileController::class, 'updateLaboralInfo'])->name('account-setting.updateLaboralInfo');

     Route::put('/update-address/{user}', [ProfileController::class, 'updateAddress'])->name('account-setting.updateAddress');

     Route::put('/update-password/{user}', [ProfileController::class, 'updatePassword'])->name('account-setting.updatePassword');
     Route::put('/update-vaccine/{user}', [ProfileController::class, 'updateVaccineInfo'])->name('account-setting.updateVaccine');

     Route::resource('laborals', LaboralController::class);
     Route::resource('offices', OfficeController::class);
     Route::resource('users', UserController::class);
     Route::resource('pensions', PensionController::class);
     Route::resource('conditions', ConditionController::class);
     Route::resource('positions', PositionController::class)->except(['show']);

     Route::delete('events/{id}/delete', [EventController::class, 'destroyuser'])->name('events.destroyuser');

     Route::resource('events', EventController::class);
     Route::get('events/{event}/pdf', [EventController::class, 'pdf'])->name('events.pdf');


     Route::resource('presencials', PresencialWorkController::class);


     Route::get('/attendance-list', [PresencialWorkController::class, 'attendacelist'])->name('presencials.attendance-list');


     Route::get('/events/{event}/attendance', [PresencialWorkController::class, 'attendance'])->name('attendance');

     Route::get('/myattendance', [PresencialWorkController::class, 'myattendance',])->name('myattendance');

     /* Route::get('/reports', [ReportController::class, 'reports'])->name('reports'); */
     Route::resource('reports', ReportController::class);



     Route::get('infecteds/pdf', [InfectedController::class, 'pdf'])->name('infecteds.pdf');
     Route::resource('infecteds', InfectedController::class);

     Route::resource('infecteds.userinfecteds', UserInfectedController::class)->except(['index', 'show']);


     /* Route::get('/mail', function () {
          $correo = new ConfirmEventMailable;
          Mail::to('yimydavidhc@gmail.com')->send($correo);
          return 'enviado';
      }); */

     Route::get('wizard', [FormController::class, 'formWizard'])->name('form-wizard');
     //Roles
});
