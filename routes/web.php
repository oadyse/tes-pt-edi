<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

// LOGIN
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('post-login', [LoginController::class, 'login'])->name('login.post');
Route::get('logout', [LoginController::class, 'logout'])->name('logout-dashboard');

//REGISTER
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register/action', [RegisterController::class, 'create'])->name('register.post');

Auth::routes();

/*All Admin Routes List*/
Route::middleware(['user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

    Route::get('/list', [ListController::class, 'index'])->name('index-data');
    Route::get('/list/edit-form/{id}', [ListController::class, 'edit'])->name('edit-data');
    Route::get('/list/detail/{id}', [ListController::class, 'detail'])->name('detail-data');
    Route::post('/list/update/{id}', [ListController::class, 'processUpdate'])->name('editpost-data');
    Route::get('/list/delete/{id}', [ListController::class, 'delete'])->name('delete-data');
});

/*All User Routes List*/
Route::middleware(['user-access:user,user'])->group(function () {

    Route::get('/user/home', [HomeController::class, 'userHome'])->name('user.home');

    Route::get('/biodata', [BiodataController::class, 'index'])->name('index-biodata');
    Route::get('/biodata/add_form', [BiodataController::class, 'createForm'])->name('form-biodata');
    Route::post('/biodata/create', [BiodataController::class, 'addNew'])->name('add-biodata');
    Route::get('/biodata/edit-form/{id}', [BiodataController::class, 'edit'])->name('edit-biodata');
    Route::post('/biodata/update/{id}', [BiodataController::class, 'processUpdate'])->name('editpost-biodata');
});
