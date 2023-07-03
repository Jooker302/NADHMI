<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::controller(AdminController::class)->group(function () {

    Route::get('/shedules_Data','shedules_Data');
    Route::get('/logout','logout');
    Route::get('/add_shedule','add_shedule');
    Route::post('/add_shedule','store_shedule');
    Route::get('/search', 'search')->name('search');


    //add techer

    Route::get('/add_teacher','add_teacher');
    Route::post('/store_data','store_teacher');


    Route::get('/teachers_Data','teachers_Data');
    Route::post('/get_teacher_sure_name', 'getTeacherSureName');

    Route::post('getTeacherDetails','getTeacherDetails');

    Route::get('update-sch/{id}','update_sch');
    Route::get('delete-sch/{id}','delete_sch');

    Route::post('edit-sch','edit_sch');


    Route::get('update-te/{id}','update_te');
    Route::get('delete-te/{id}','delete_te');

    Route::post('edit_te','edit_te');


});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
