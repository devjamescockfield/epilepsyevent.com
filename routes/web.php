<?php

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

Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('index');
});




Auth::routes();

Route::name('contact.')->group(function () {

    Route::resource('contact-forms', 'ContactController');

});

Route::name('admin.')->group( function(){

    Route::resource('contact', 'Admin\ContactFormsController')->middleware(['auth']);
    Route::resource('staff', 'Admin\StaffController')->middleware(['auth']);

    Route::resource('permissions', 'Admin\PermissionController')->middleware(['auth']);

    Route::resource('roles', 'Admin\RoleController')->middleware(['auth']);

    Route::resource('users', 'Admin\UsersController')->middleware(['auth']);
});
