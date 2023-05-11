<?php

use App\Http\Controllers\admin\AboutUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Admincontroller;
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\admin\ParentCategoryController;
use App\Http\Controllers\admin\ChildCategoryController;
use App\Http\Controllers\admin\SubChildCategoryController;
use App\Http\Controllers\admin\SubadminController;
use App\Http\Controllers\admin\CityListController;
use App\Http\Controllers\admin\TravelController;
use App\Http\Controllers\admin\AirLinesController;
// use App\Http\Controllers\admin\GoogleController;

use App\Http\Controllers\admin\PagesController;
use App\Http\Controllers\admin\BlogsController;

//use App\Http\Middleware\Adminlogincheck;
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
    return view('admin/auth/login');
});


Route::view('admin/signup','admin/signup')->name('signup');
//Route::view('admin/dashboard','admin/dashboard');

Route::post('admin/user_login', [Admincontroller::class,'user_login_func'] );
Route::post('admin/register', [Admincontroller::class,'user_registration_func'] );
Route::get('signout', [Admincontroller::class, 'signOut'])->name('signout');


//Logged-in user
Route::group(['middleware' => ['auth']],function(){
	
	Route::view('/admin','admin/dashboard')->name('dashboard');

	Route::get('admin/all-user',[AdminUserController::class,'get_users_list'])->name('all_users');
	Route::get('admin/user-add',[AdminUserController::class,'user_add'])->name('user.add');
	Route::post('admin/user-destroy', [AdminUserController::class, 'user_destroy'])->name('user.destroy');

	Route::post('admin/insert-users', [AdminUserController::class,'insert_users']);
	Route::get('admin/view-user/{id}', [AdminUserController::class,'view_user'])->name('view.user');
	Route::post('admin/update-user', [AdminUserController::class,'update_user'])->name('update.user');
	// Route::get('admin/delete-user/{id}',[AdminUserController::class,'delete_user'])->name('delete.user');
	Route::get('admin/view-travel-list-byuser/{id}',[AdminUserController::class,'view_travel_list_byuser'])->name('view.travel.list.byuser');
	Route::post('admin/check-email-existance', [AdminUserController::class,'check_email_existance']);

	Route::get('admin/subadmins', [SubadminController::class, 'get_subadmins_list'])->name('get_subadmins');
	Route::post('admin/insert-subadmin', [SubadminController::class,'insert_subadmin']);
	Route::post('admin/check-user-existance',[SubadminController::class,'check_user_existance']);
	Route::post('admin/edit-subadmin',[SubadminController::class,'edit_subadmin']);
	
	Route::get('admin/vendors',[VendorController::class,'get_vendors_list'])->name('get_vendors');

	
    Route::view('admin/all-pages','admin/pages/index')->name('allpageslist');
    Route::get('admin/edit-page/{pagename}',[PagesController::class,'editpages'])->name('editpages');


    Route::get('admin/all-airlines', [AirLinesController::class, 'all_airlines'])->name('all.airlines');
    Route::get('admin/add-airlines-view', [AirLinesController::class, 'add_airlines_view'])->name('add.airlines.view');
    Route::post('admin/add-airlines', [AirLinesController::class, 'add_airlines'])->name('add.airlines');
	Route::get('admin/edit-airlines/{id}', [AirLinesController::class,'edit_airlines'])->name('edit.airlines');
	Route::post('admin/update-airlines', [AirLinesController::class,'update_airlines'])->name('update.airlines');
	Route::post('admin/airlines-status', [AirLinesController::class, 'airlines_status'])->name('airlines.status');

	Route::post('admin/airlines-destroy', [AirLinesController::class, 'airlines_destroy'])->name('airlines.destroy');

	// Route::get('admin/delete-airlines/{id}', [AirLinesController::class,'delete_airlines']);

    Route::get('admin/all-city', [CityListController::class, 'all_city'])->name('all.city');
    Route::get('admin/add-city-view', [CityListController::class, 'add_city_view'])->name('add.city.view');
	Route::post('admin/city-status', [CityListController::class, 'city_status'])->name('city.status');

	Route::post('admin/destroy', [CityListController::class, 'destroy'])->name('destroy');
    Route::get('admin/edit-city/{id}', [CityListController::class,'edit_city'])->name('edit.city');
	Route::post('admin/update-city', [CityListController::class,'update_city'])->name('update.city');
    Route::post('admin/add-city', [CityListController::class, 'add_city'])->name('add.city');

    Route::get('admin/all-travel', [TravelController::class, 'all_travel'])->name('all.travel');
    Route::get('admin/add-travel-view/{id}', [TravelController::class, 'add_travel_view'])->name('add.travel.view');
    Route::post('admin/add-travel', [TravelController::class, 'add_travel'])->name('add.travel');
    // Route::get('admin/delete/{id}', [TravelController::class, 'delete_travel'])->name('delete.travel');
	Route::post('admin/trevel-destroy', [TravelController::class, 'trevel_destroy'])->name('trevel.destroy');
    Route::post('admin/show-travellor', [TravelController::class, 'show_travellor'])->name('show.travellor');


	// ---------------admin-about-us-page---------------------------------------------------
	Route::get('admin/show-about-us', [AboutUsController::class,'all_about_us'])->name('show.about_us');
	Route::get('admin/edit-about-us/{id}', [AboutUsController::class,'edit_about_us'])->name('edit.about_us');
	Route::post('admin/update-about-us', [AboutUsController::class,'update_about_us'])->name('update.about_us');


	Route::get('admin/policy-index', [AboutUsController::class,'policy_index'])->name('policy.index');
	Route::get('admin/saathi-privacy-policy', [AboutUsController::class,'saathi_privacy_policy'])->name('saathi.privacy.policy');
	Route::get('admin/saathi-privacy-policy-edit/{id}', [AboutUsController::class,'saathi_privacy_policy_edit'])->name('saathi.privacy.policy.edit');
	Route::post('admin/saathi-privacy-policy-update', [AboutUsController::class,'saathi_privacy_policy_update'])->name('saathi.privacy.policy.update');
});
//Non-logged-in user
Route::group(['middleware' => ['guest']],function(){
	Route::view('admin/login','admin/auth/login')->name('login');
	Route::view('admin/forgot-password','admin/auth/forgot-password')->name('password.request');
});

Route::post('admin/recover-password', [Admincontroller::class,'recover_password_func'] );
Route::post('admin/reset-password', [Admincontroller::class,'reset_password_func'] );
Route::get('/reset-password/{token}', function ($token) {
    return view('admin.auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

//Route::view('admin/profile','admin/profile');
Route::get('admin/profile', [Admincontroller::class,'get_admin_generalinfo']);
Route::post('admin/admin_general_info', [Admincontroller::class,'update_admin_generalinfo'] );
Route::post('upload-images', [ Admincontroller::class, 'storeImage' ])->name('uploadimage');