<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/restaurant', [App\Http\Controllers\HomeController::class, 'restaurant'])->name('restaurant');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::group(['prefix'=>'hotels'],function(){
        //hotels
        Route::get('/rooms/{id}', [App\Http\Controllers\Hotels\HotelsController::class, 'rooms'])->name('hotel.rooms');
        Route::get('/rooms-details/{id}', [App\Http\Controllers\Hotels\HotelsController::class, 'roomDetails'])->name('hotel.rooms.details');
        Route::post('/rooms-booking/{id}', [App\Http\Controllers\Hotels\HotelsController::class, 'roomBooking'])->name('hotel.rooms.booking');
        //payments
        Route::get('/pay', [App\Http\Controllers\Hotels\HotelsController::class, 'payWithPaypal'])->name('hotel.pay')->middleware('check.for.price');
        Route::get('/success', [App\Http\Controllers\Hotels\HotelsController::class, 'success'])->name('hotel.success')->middleware('check.for.price');

});

//users
Route::get('users/my-booking', [App\Http\Controllers\Users\UsersController::class, 'myBookings'])->name('users.bookings')->middleware('auth:web');

//admin-workings

Route::get('admin/login', [App\Http\Controllers\Admins\AdminsController::class, 'viewLogin'])->name('view.login')->middleware('check.for.login');
Route::post('admin/login', [App\Http\Controllers\Admins\AdminsController::class, 'checkLogin'])->name('check.login');

// Route::get('admin/index', [App\Http\Controllers\Admins\AdminsController::class, 'index'])->name('admins.dashboard');

Route::group(['prefix'=>'admin', 'middleware' => 'auth:admin'],function(){

        Route::get('/index', [App\Http\Controllers\Admins\AdminsController::class, 'index'])->name('admins.dashboard');
        Route::get('/all-admins', [App\Http\Controllers\Admins\AdminsController::class, 'allAdmins'])->name('admins.all');
        Route::get('/create-admins', [App\Http\Controllers\Admins\AdminsController::class, 'createAdmins'])->name('admins.create');
        Route::post('/create-admins', [App\Http\Controllers\Admins\AdminsController::class, 'storeAdmins'])->name('admins.store');

        //rooms
        Route::get('/all-hotels', [App\Http\Controllers\Admins\AdminsController::class, 'allHotels'])->name('hotels.all');
        Route::get('/all-rooms', [App\Http\Controllers\Admins\AdminsController::class, 'allRooms'])->name('rooms.all');
        Route::get('/create-rooms', [App\Http\Controllers\Admins\AdminsController::class, 'createRooms'])->name('rooms.create');
        Route::post('/create-rooms', [App\Http\Controllers\Admins\AdminsController::class, 'storeRooms'])->name('rooms.store');

        Route::post('/delete-rooms/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'deleteRooms'])->name('rooms.delete');


        //bookings

        Route::get('/all-bookings', [App\Http\Controllers\Admins\AdminsController::class, 'allBookings'])->name('bookings.all');
        Route::get('/edit-status/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'editStatus'])->name('bookings.edit.status');
        Route::post('/update-status/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'updateStatus'])->name('bookings.update.status');

        Route::get('/delete-bookings/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'deleteBookings'])->name('bookings.delete');

        


});