<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/schedule', function(){
    return view('vstSchedule/index');
})->name('schedule');

Route::get('/class-notes', [App\Http\controllers\notesController:: class,'index'])->name('class-notes');
Route::get('/create-notes', [App\Http\controllers\notesController:: class,'info'])->name('create-notes');


//guardar notas
Route::post('/notes/create', [App\Http\controllers\notesController:: class,'store'])->name('notes.store');
Route::get('/class-notes/class/notes/create/{id}', [App\Http\controllers\notesController:: class,'create'])->name('notes.create');
//mostrar clases
Route::get('/class-notes/class', [App\Http\controllers\notesController:: class,'class'])->name('class');




Auth::routes();