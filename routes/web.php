<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




Route::group(['middleware' => 'prevent-back-history'],function(){  //Preventing back history

    Route::get('/', function () {
        return view('auth.login');
    });


Route::get('/dashboard', [App\Http\Controllers\AdminController::class,'dashboard'])->name('dashboard');
//authenticate
Route::post('/login2', [App\Http\Controllers\LoginController::class,'authenticate'])->name('login2');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Category
Route::get('/Register_category', [App\Http\Controllers\CategoryController::class, 'create'])->name('Register_category');
Route::post('/store_category', [App\Http\Controllers\CategoryController::class, 'store'])->name('store_category');
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
Route::get('/edit_category/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('edit_category');
Route::post('/update_category', [App\Http\Controllers\CategoryController::class, 'update'])->name('update_category');
Route::get('/delete_category/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('delete_category');
//end  Category routes


//customer
Route::get('/Register_customer', [App\Http\Controllers\CustomerController::class, 'create'])->name('Register_customer');
Route::post('/Store_customer', [App\Http\Controllers\CustomerController::class, 'store'])->name('Store_customer');
Route::get('customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer');
Route::get('edit_customer/{id}', [App\Http\Controllers\CustomerController::class, 'edit'])->name('edit_customer');
Route::post('update_customer', [App\Http\Controllers\CustomerController::class, 'update'])->name('update_customer');
Route::get('Registered_customer', [App\Http\Controllers\CustomerController::class, 'all_customers'])->name('Registered_customer');
Route::get('delete_customer', [App\Http\Controllers\CustomerController::class, 'delete'])->name('delete_customer');
Route::get('destroy_customer/{id}', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('destroy_customer');
// end customer

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//email
Route::get('/sendemail', [App\Http\Controllers\MailController::class, 'sendEmail'])->name('sendemail');


//customLogin
Route::post('/login', [App\Http\Controllers\LoginController::class, 'customLogin'])->name('login');

// customer logout
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');


//users
Route::get('/user_profile', [App\Http\Controllers\UsersController::class, 'show'])->name('user_profile');

//Role Controller
Route::get('/Register_role', [App\Http\Controllers\RoleController::class, 'create'])->name('Register_role');
Route::post('/store_role', [App\Http\Controllers\RoleController::class, 'store'])->name('store_role');
Route::get('/manage_role', [App\Http\Controllers\RoleController::class, 'edit'])->name('manage_role');
//end Role Controller

//Role Controller
Route::get('/Register_permission', [App\Http\Controllers\PermissionController::class, 'create'])->name('Register_permission');
Route::post('/store_permission', [App\Http\Controllers\PermissionController::class, 'store'])->name('store_permission');
Route::get('/manage_permission', [App\Http\Controllers\PermissionController::class, 'show'])->name('manage_permission');


// role and permission role_permission    store_role_permission
Route::get('/assignPerToRole', [App\Http\Controllers\RoleController::class, 'role_permission'])->name('assignPerToRole');
Route::post('/store_PermToRole', [App\Http\Controllers\RoleController::class, 'store_role_permission'])->name('store_PermToRole');



//users controllers
Route::get('/Register_user', [App\Http\Controllers\UsersController::class, 'create'])->name('Register_user');
Route::post('/store_user', [App\Http\Controllers\UsersController::class, 'store'])->name('store_user');
Route::get('/manage_users', [App\Http\Controllers\UsersController::class, 'print'])->name('manage_users');
Route::get('/resert_password/{id}', [App\Http\Controllers\UsersController::class, 'resert_password'])->name('resert_password');


//end users controllers

//image upload
Route::get('image.upload', [App\Http\Controllers\Imagecontroller::class, 'imageUpload' ])->name('image.upload');
Route::post('image.store', [App\Http\Controllers\Imagecontroller::class, 'imageUploadPost' ])->name('image.store');





});   // preventing back browsing
