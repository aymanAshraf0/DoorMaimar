<?php

use App\Http\Controllers\AboutUsPageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\RealEstateController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\RealEstate2Controller;
use App\Http\Controllers\ServicesPageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('users.index');
// });


Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');

// في ملف routes/web.php
Route::get('/login2', function () {
    return view('auth.login2');
})->name('login2');




Route::group(['middleware' => ['auth','admin']], function() {

Route::get('/dashboard', [AdminController::class, 'index']);


Route::get('/city', [CityController::class,'index']);
Route::post('/add_city', [CityController::class,'add_city']);
Route::get('/editCity/{id}', [CityController::class,'editCity']);
Route::post('/updateCity', [CityController::class,'updateCity']);
Route::get('/deleteCity/{id}', [CityController::class,'deleteCity']);



Route::get('/real_estate', [RealEstateController::class,'index']);
Route::post('/add_real_estate', [RealEstateController::class,'add_real_estate']);
Route::get('/edit_real_estate_name/{id}', [RealEstateController::class,'edit_real_estate_name']);
Route::post('/update_real_estate_name', [RealEstateController::class,'update_real_estate_name']);
Route::get('/delete_real_estate_name/{id}', [RealEstateController::class,'delete_real_estate_name']);



Route::get('/setting', [SettingController::class,'index']);
Route::get('/setting2', [SettingController::class,'index2']);
Route::post('/add_setting', [SettingController::class,'add_setting']);
Route::post('/update_setting/{id}', [SettingController::class,'update_setting']);



Route::get('/slider', [SliderController::class,'index']);
Route::post('/add_slider_imge', [SliderController::class,'add_slider_imge']);
Route::get('/editimage/{id}', [SliderController::class,'editimage']);
Route::post('/updateImage/{id}', [SliderController::class,'updateImage']);
Route::get('/deleteImage/{id}', [SliderController::class,'deleteImage']);



Route::get('/RealEstate', [RealEstate2Controller::class,'index']);
Route::get('/add_RealEstate2', [RealEstate2Controller::class,'add_RealEstate2Page']);
Route::post('/add_RealEstate2Add', [RealEstate2Controller::class,'add_RealEstate2Add']);
Route::get('/deleteRealEstate/{id}', [RealEstate2Controller::class,'deleteRealEstate']);
Route::get('/editRealEstate/{id}', [RealEstate2Controller::class,'editRealEstate']);
Route::post('/updateRealEstate', [RealEstate2Controller::class,'updateRealEstate']);
Route::get('/unShareRealEstate2', [RealEstate2Controller::class,'unShareRealEstate2']);



    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    
});










Route::get('/index', [AdminController::class,'index']);

Route::get('/home', [HomeController::class,'index']);
Route::get('/showDetails/{id}', [HomeController::class,'showDetails']);

Route::get('/services', [ServicesPageController::class,'index']);

Route::get('/aboutUs', [AboutUsPageController::class,'index']);

Route::get('/contact', [ContactPageController::class,'index']);

Route::post('/send-email', [ContactPageController::class, 'sendEmail']);


