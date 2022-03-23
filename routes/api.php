<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('auth/login','AuthController@login');
Route::post('auth/register','AuthController@register');
Route::get('auth/user/{email}','ApiController@userDetails');

Route::post('auth/change-password','ApiController@changePassword');
Route::post('auth/update-profile','ApiController@changeProfile');
Route::get('view/user-orders/{id}','ApiController@userOrders');
Route::get('view/user-order-details/{id}','ApiController@userOrderDetails');
Route::get('view/favorite-stores/{id}','ApiController@wishList');

Route::get('view/all-florists','ApiController@apiViewFlorists');
Route::get('view/florist/{id}','ApiController@ViewFlorist');
Route::get('view/all-categories','ApiController@apiViewCategories');
Route::get('view/category/{id}','ApiController@ViewCategory');
Route::get('view/all-products','ApiController@ViewAllProducts');
Route::get('view/product/{id}','ApiController@ViewProduct');
Route::get('view/florist-products/{id}','ApiController@FloristProducts');

Route::get('homepage','ApiController@homepage');


Route::get('view/store/{id}','ApiController@store');
Route::post('view/match-store','ApiController@matchStore');
Route::post('place-order','ApiController@placeOrder');
Route::post('checkout','ApiController@checkout');
Route::post('timeTable','ApiController@timeTable');

Route::post('testArray','ApiController@testArray');



// Route::group([
//     'prefix' => 'auth'
// ], function(){
    
// });

