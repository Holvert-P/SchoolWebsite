<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\userController;

route::get('',[HomeController::class,'index'])->name('admin-home');

Route::resource('users',userController::class)->names('admin.users');