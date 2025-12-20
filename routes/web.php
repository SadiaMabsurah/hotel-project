<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

route::get('/',[AdminController::class,'home']);

route::get('/home',[AdminController::class,'index'])->name('home');

route::get('/create_room',[AdminController::class,'create_room']);

route::post('/add_room',[AdminController::class,'add_room']);

route::get('/view_room',[AdminController::class,'view_room']);

route::delete('/delete_room/{id}',[AdminController::class,'delete_room']);

Route::get('/update_room/{id}', [AdminController::class, 'update_room']);

Route::post('/edit_room/{id}', [AdminController::class, 'edit_room']);

Route::get('/room_details/{id}', [HomeController::class, 'room_details']);

Route::post('/book_room/{id}', [HomeController::class, 'book_room']);

Route::get('/bookings', [AdminController::class, 'bookings'])->middleware('auth', 'admin');

Route::post('/delete_booking/{id}', [AdminController::class, 'delete_booking']);

Route::get('/approve_booking/{id}', [AdminController::class, 'approve_booking']);

Route::get('/reject_booking/{id}', [AdminController::class, 'reject_booking']);

Route::get('/view_gallary', [AdminController::class, 'view_gallary']);

Route::post('/upload_gallary', [AdminController::class, 'upload_gallary']);

Route::get('/delete_gallary/{id}', [AdminController::class, 'delete_gallary']);

Route::post('/contact', [HomeController::class, 'contact']);

Route::get('/all_messages', [AdminController::class, 'all_messages']);

Route::get('/send_email/{id}', [AdminController::class, 'send_email']);

Route::post('/send_user_email/{id}', [AdminController::class, 'send_user_email']);




