<?php

use App\Http\Controllers\admin\CityListController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserRegisterController;
use App\Http\Controllers\Api\CityListControllerApi;
use App\Http\Controllers\Api\HomeControllerApi;
use App\Http\Controllers\Api\ViewTravellerControllerApi;
use App\Http\Controllers\Api\SearchControllerApi;
use App\Http\Controllers\Api\AirlinesControllerApi;
use App\Http\Controllers\Api\ChatControllerApi;
use App\Http\Controllers\Api\ContentController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('apiAuth:sanctum')->group(function () {
    
});

//-----------user management----------------//
    route::post('user-profile-update',[UserRegisterController::class,'user_profile_update']);

//------------------cities---------------//
    Route::post('departure-cities',[CityListControllerApi::class,'all_cities']);
//------password change-------//
route::post('change-password',[UserRegisterController::class,'password_change']);
// -----user signup ------------//
Route::post('user-register',[UserRegisterController::class,'user_register']);
Route::post('user-logout',[UserRegisterController::class,'logout']);

Route::post('user-delete',[UserRegisterController::class,'user_delete']);

 // -------------profile detalis ------------------------//
    Route::post('profile-detalis',[UserRegisterController::class,'profile_detalis']);

// -----user signin ------------//
Route::post('user-signin',[UserRegisterController::class,'user_signin']);

//---------home page------//
Route::post('home',[HomeControllerApi::class,'user_home_page']);
//---------traveller Add page------//
Route::post('traveller-add',[HomeControllerApi::class,'traveller_add_page']);
Route::post('view-traveller',[ViewTravellerControllerApi::class,'view_traveller']);
Route::post('update-traveller',[ViewTravellerControllerApi::class,'update_traveller']);
Route::post('update-details-traveller',[ViewTravellerControllerApi::class,'update_details_traveller']);
Route::post('add-more-traveller',[ViewTravellerControllerApi::class,'add_more_traveller']);


//---------Search traveller------//
Route::post('search-travel',[SearchControllerApi::class,'search_travel']);

//---------show airlines------//
Route::post('show-airlines',[AirlinesControllerApi::class,'show_airlines']);

//---------Chatting ---------------------//
Route::post('user-chat',[ChatControllerApi::class,'user_chat']);
Route::post('user-list',[ChatControllerApi::class,'user_list']);
Route::post('one-one-chat',[ChatControllerApi::class,'one_one_chat']);


Route::post('user-block',[ChatControllerApi::class,'user_block']);
Route::post('user-unblock',[ChatControllerApi::class,'user_unblock']);

Route::post('user-report',[ChatControllerApi::class,'user_report']);

Route::get('message-delete',[ChatControllerApi::class,'message_delete']);

//---------about us ---------------------//

Route::post('about-us',[ContentController::class,'about_us']);
Route::get('get-about-us',[ContentController::class,'get_about_us']);

Route::get('get-privacy-policy',[ContentController::class,'get_privacy_policy']);





