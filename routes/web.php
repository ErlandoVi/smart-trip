<?php

use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ShowController::class,'show']);
Route::get('paket', [ShowController::class,'paket']);
Route::get('detailbooking', [ShowController::class,'booking']);
Route::get('calendar', [ShowController::class,'calendar']);
Route::get('calendardetail', [ShowController::class,'calendardetail']);
Route::post('booking',[ShowController::class,'simpanBooking']);
Route::get('mitra', [ShowController::class,'mitra']);
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'isAdmin','prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class);
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    Route::resource('bookings', \App\Http\Controllers\Admin\BookingController::class);
    Route::resource('packages', \App\Http\Controllers\Admin\PackageController::class);
    Route::resource('packageTypes', \App\Http\Controllers\Admin\PackageTypeController::class);
    Route::resource('packageContents', \App\Http\Controllers\Admin\PackageContentController::class);
    Route::resource('pics', \App\Http\Controllers\Admin\PicController::class);
    Route::resource('partnerships', \App\Http\Controllers\Admin\PartnershipController::class);
    Route::resource('events', \App\Http\Controllers\Admin\EventController::class);
    Route::resource('governments', \App\Http\Controllers\Admin\GovernmentController::class);
    Route::resource('schedules', \App\Http\Controllers\Admin\ScheduleController::class);
    Route::resource('statuses', \App\Http\Controllers\Admin\StatusController::class);
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
