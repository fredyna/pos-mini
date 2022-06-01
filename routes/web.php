<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AmplopDigitalController;
use App\Http\Controllers\Api\SendWAController;
use App\Http\Controllers\Api\TamuController;
use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\Guest\HomeController as GuestHomeController;
use App\Http\Controllers\InvitationPacketController;
use App\Http\Controllers\InvitationPacketFeatureController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectEventController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\RsvpController;
use App\Http\Controllers\TemplateUndanganController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
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

Route::get('/', [GuestHomeController::class, 'index'])->name('guest.home');
Route::post('/rsvp', [RsvpController::class, 'store'])->name('guest.rsvp');
Route::get('/v/{keyword}/{qrcode?}', [GuestHomeController::class, 'show'])->name('guest.show');

Route::prefix('admin')->group(function () {
    Route::get('/starter', function () {
        return view('starter');
    });

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/user', UserController::class);
    Route::resource('/invitation-templates', TemplateUndanganController::class);
    Route::patch('/project/{id}', [ProjectController::class, 'updateAcara'])->name('project.update-acara');
    Route::resource('/project', ProjectController::class);
    Route::resource('/informasi-acara', ProjectEventController::class);
    Route::resource('/kado-digital', AmplopDigitalController::class);
    Route::resource('/buku-tamu', BukuTamuController::class);
    Route::get('/user-profile', [UserProfileController::class, 'index'])->name('user-profile');
    Route::post('/user-profile', [UserProfileController::class, 'update']);

    Route::group(['prefix' => 'master'], function () {
        Route::resource('/role', RoleController::class);
        Route::resource('/permission', PermissionController::class);
        Route::resource('/role-permission', RolePermissionController::class);
        Route::resource('/invitation-packet', InvitationPacketController::class);
        Route::resource('/invitation-packet-feature', InvitationPacketFeatureController::class);
    });
});

Route::post('/send-wa', [SendWAController::class, 'send'])->name('api.send-wa');
Route::get('/tamu', [TamuController::class, 'show'])->name('api.tamu.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
