<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test;
use App\Http\Controllers\InputNameController;
use App\Http\Controllers\yearfinal;
use App\Http\Controllers\LoginValidationController;
use App\Http\Controllers\DebtorsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;

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

Route::get('/IYOY', function () {
    return 'Hello World';
});
Route::get('/gallery',function () {
    return view('gallery');
});


Route::get('gallery',[test::class,"test"]);
//Route::get('discuss',[App\Http\Middleware\YearVerificationController::class, 'yearcheck'])->middleware('discuss');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('inputName',[InputNameController::class,'ShowName']);
Route::post('inputName',[InputNameController::class,'ShowName']);



Route::get('trylogin', [App\Http\Controllers\yearfinal::class, 'yearFinal'])->middleware('check-year');



Route::get('/loginform',[LoginValidationController::class,"verification1"])->name("loginform");
Route::post('/loginform',[LoginValidationController::class,"verification2"])->middleware('check-user');

Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');

Route::resource('Debtors',DebtorsController::class);


Route::resource('employees',EmployeeController::class);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[HomeController::class,'index']);

Route::get('/dashboard', function () {
    return view('employees.index');
})->name('dashboard');