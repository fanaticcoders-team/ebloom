<?php

use App\Mail\OrderShipped;
use App\HTTP\Controllers\ProductsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
        "php": "^7.1.3",
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/google', function () {
    return view('google_translate');
});
Route::get('/ar', function () {
    return view('testAR');
});




if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    # code...
    $url = "https://";
}else {
    $url = "http://";
}
if (isset($_SERVER['HTTP_HOST'])) {
    # code...
    $url.= $_SERVER['HTTP_HOST'];

    // Append the requested resource location to the URL
    $url.= $_SERVER['REQUEST_URI'];
}
    // dd($_SERVER['REQUEST_URI']);



if (substr($_SERVER['REQUEST_URI'],0,8) == '/success' ) {
    // dd($url);
    // dd('here');
    Route::get('/success','IndexController@success')->name('success');

} else {



Route::redirect('/welcome','/');
Route::redirect('/admin','/gr/admin');
Route::redirect('/florist','/gr/florist');
// Route::redirect('/success','/gr/success');
Route::redirect('/payment-failed','/gr/payment-failed');


Route::redirect('/','/gr');

Route::group(['prefix'=>'{language}'],function(){
    // Route::get('/', function () {
    //     return view('under-working');
    // });
    // Route::get('/welcome','IndexController@eBloom');
    Route::get('/',[
        'uses' => 'IndexController@eBloom',
        'as'=>'index'
    ]);
    Route::get('/welcome',[
        'uses' => 'IndexController@eBloom',
        'as'=>'welcome'
    ]);

    Route::get('/store/{slug}',[
        'uses' => 'IndexController@store',
        'as'=>'store'
    ]);

    Route::get('/match_store',[
        'uses' => 'IndexController@matchStore',
        'as'=>'matchStore'
    ]);
    Route::get('/match_store2',[
        'uses' => 'IndexController@matchStore2',
        'as'=>'matchStore2'
    ]);


    // Route::get('/match_store','IndexController@matchStore');

    Route::post('/add-address','IndexController@addAddress');

    // Route::get('/checkout/{slug}','IndexController@checkout');

    Route::get('/checkout/{slug}',[
        'uses' => 'IndexController@checkout',
        'as'=>'checkout'
    ]);



    // Route::get('/store/{slug}','IndexController@store');


Route::get('auth/google', 'Auth\LoginController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');

Route::get('/redirect', 'Auth\LoginController@redirect');
Route::get('/callback', 'Auth\LoginController@callback');

Route::match(['get','post'],'/distance','IndexController@calculateDistance');


Route::match(['get','post'],'/email','IndexController@emailTemplate');


Route::get('/map', function () {
    return view('map');
});
Route::get('/slider', function () {
    return view('slider2');
});

Route::get('/homepage', function () {
    return view('homepage2');
});
Route::get('/pages/faqs', function () {
    return view('faqs');
})->name('faqs');
Route::get('/pages/policy', function () {
    return view('policy');
})->name('policy');
Route::get('/pages/terms', function () {
    return view('terms');
})->name('terms');
Route::get('/pages/about', function () {
    return view('aboutUs');
})->name('amoutUs');
// Route::get('/pages/blog', function () {
//     return view('blog');
// });
Route::get('/pages/reward', function () {
    return view('reward');
})->name('reward');
Route::get('/pages/evaluation', function () {
    return view('evaluation');
})->name('evaluation');
Route::get('/pages/cookies', function () {
    return view('cookies');
})->name('cookies');

// Route::get('/pages/contact', function () {
//     return view('contact');
// });
Route::match(['get','post'],'/user/subscribe','IndexController@subscribe');

Route::match(['get','post'],'/pages/contact','IndexController@Contact')->name('contact');
Route::match(['get','post'],'/pages/shop','IndexController@Shop')->name('shop');
Route::match(['get','post'],'/pages/blog','IndexController@Blogs')->name('blogs');
Route::match(['get','post'],'/blog/{slug}','IndexController@blogDetails')->name('blogDetails');


Route::get('/thank-you', function () {
    return view('thankyou');
})->name('thankYou');

Route::get('/order-details', function () {
    // dd(Session::get('shipping_fee'));
    return view('orderDetails');
})->name('orderDetails');
Route::get('/orderMail', function () {
    Mail::to('raisaeedanwar1187@gmail.com')->send(new OrderShipped('5'));
});

// Route::get('/viva', function () {
//     return view('viva');
// });


Route::get('/payment-failed', function () {
    // dd(Session::get('shipping_fee'));
    return view('payment-failed');
})->name('paymentFailed');

Route::get('/transfer','IndexController@Transfer')->name('transfer');


Route::get('/viva','IndexController@vivaWallet');
Route::get('/generate-number/{id}','IndexController@generateSerialNumber')->name('serialnumber');

Route::match(['get','post'],'/rating/{florist}','IndexController@rating')->name('rating');

// Route::get('/match_store', function () {
//     return view('search_store');
// });
// Route::get('/match_store','IndexController@matchStore');
Route::match(['get','post'],'/place-order','ProductsController@placeOrder0');
// Route::post('userController',[userController::class,'loadView']);
Route::match(['get','post'],'/enterdetails','ProductsController@loadView');
Route::match(['get','post'],'savePaymentDetails','ProductsController@savePaymentDetails');
// Route::get('/thankyou/{name}', function($name){
//     return view('thankyou',['name'=>$name]);
// });
// Route::view('thankyou','thankyou');
Route::match(['get','post'],'thankyou','ProductsController@thanks');

Route::get('/getDistance','IndexController@getDistance');

Route::post('/addToCart','IndexController@addToCart');
// Route::post('/addToCart','IndexController@addToCart');
Route::match(['get','post'],'/card-details/{name}','IndexController@changeCardDetails')->name('cardDetails');
// Route::get('/card-details/{name}',[
//     'uses' => 'IndexController@changeCardDetails',
//     'as'=>'cardDetails'
// ]);

Route::post('/checkout-address','IndexController@checkoutAddress');
Route::view('everypayform','everypayform');

Route::post('/change-date','IndexController@changeDate');
Route::post('/update-address','IndexController@updateAddress');
Route::post('/send-notification','IndexController@sendNotification');
Route::post('/mark-as-read','IndexController@markAsRead');
Route::post('/check-new-order','ProductsController@checkNewOrder');



Route::post('/save-distance','IndexController@saveDistance');

// cart/remove-product
Route::get('/cart/remove-product/{name}','IndexController@removeFromCart');


Route::get('/auto', function () {
    return view('autoComplete');
});

// Route::get('/', function () {
//     return view('under-working');
// });

Route::post('/get-cities','IndexController@getCities');
// Route::get('/welcome','IndexController@eBloom');
// Route::get('/store/{slug}','IndexController@store');


// Route::match(['get','post'],'/','IndexController@eBloom');
Route::match(['get','post'],'/home2','IndexController@eBloom2');

Route::match(['get','post'],'/results','IndexController@results');


Route::get('/products/{slug}','ProductsController@products')->name('products');
Route::get('/occasions/{slug}','IndexController@categories')->name('categories');
Route::get('/types/{slug}','IndexController@types')->name('types');

Route::get('/get-product-price','ProductsController@getprice')->name('getPrice');
//Route for login-register
Route::get('/login-register','UsersController@userLoginRegister');
//Route for login-User
Route::post('/user-login','UsersController@login')->name('user_login');

Route::post('/forget-password','UsersController@forgetPassword');
// Route::post('/florist-forget-password','FloristController@forgetPassword');
Route::match(['get','post'],'/florist-forget-password','FloristController@forgetPassword');



//Route for add users registration
Route::post('/user-register','UsersController@register');
//Route for add users registration
Route::get('/user_logout','UsersController@logout');
// Route for add to cart
Route::match(['get','post'],'add-cart','ProductsController@addtoCart');
// Route for cart
//Route For Delete Cart Product
Route::get('/cart/delete-product/{id}','ProductsController@deleteCartProduct');
Route::get('/cart/delete-order/{id}','ProductsController@deleteProduct');
//checkout


//Route For update Quantity
Route::post('/cart/increase-quantity','IndexController@increaseQuantity');
Route::post('/cart/decrease-quantity','IndexController@decreaseQuantity');


Route::get('/cart/update-quantity/{id}/{quantity}','ProductsController@updateCartQuantity');
//Apply Coupon Code
Route::post('/cart/apply-coupon','ProductsController@applyCoupon');
Route::get('/cart/cancel-coupon','ProductsController@cancelCoupon');
Route::post('/cart/redeem-points','ProductsController@redeemPoints');
Route::get('/cart/cancel-redeem','ProductsController@cancelRedeemPoints');

Route::match(['get','post'],'/admin','AdminController@login')->name('admin');
Route::match(['get','post'],'/florist','FloristController@login')->name('florist');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::match(['get','post'],'/cart','ProductsController@cart');
//Route for middleware after front login
Route::group(['middleware' => ['frontlogin']],function(){
//Route for users account

Route::get('/user_account', function () {
    return view('user_account');
})->name('user_account');

// Route::get('user/orders', function () {
//     return view('order');
// });
// Route::get('user/favorite_store', function () {
//     return view('favorite_store');
// });


Route::match(['get','post'],'/account','UsersController@account')->name('account');
Route::match(['get','post'],'/add-to-wish-list/{slug}','UsersController@addToWishList');
Route::match(['get','post'],'/delete-wish-list/{slug}','UsersController@deleteWishList');

Route::match(['get','post'],'/user/favorite_store','UsersController@wishList')->name('user_favorites');

Route::match(['get','post'],'/order/{id}','ProductsController@userOrderDetails')->name('front_end_orderDetails');

Route::match(['get','post'],'/change-password','UsersController@changePassword');
Route::match(['get','post'],'/change-address','UsersController@changeAddress');
// Route::match(['get','post'],'/checkout','ProductsController@checkout');
Route::match(['get','post'],'/order_review','ProductsController@orderReview');
Route::match(['get','post'],'/thanks','ProductsController@thanks');
Route::match(['get','post'],'/user/orders','ProductsController@userOrders')->name('user_orders');

// Route::match(['get','post'],'/order/{id}','ProductsController@userOrderDetails')->name('user_orderDetails');
});

Route::group(['middleware' =>['AdminLogin']],function(){
Route::match(['get','post'],'/admin/dashboard','AdminController@dashboard')->name('admin_dashboard');
Route::match(['get','post'],'/admin/admin-profile','AdminController@adminProfile')->name('admin_profile');

Route::match(['get','post'],'/admin/add-range','AdminController@addRanges')->name('add_range');
Route::match(['get','post'],'/admin/edit-range','AdminController@editRanges')->name('edit_range');
Route::match(['get','post'],'/admin/delete-range/{id}','AdminController@deleteRange');

Route::match(['get','post'],'/admin/florist-dashboard/{slug}','AdminController@floristDashboard')->name('florist_dashboard');
Route::match(['get','post'],'/admin/view-florist/{slug}','AdminController@viewFlorist')->name('view_florists');

Route::match(['get','post'],'/admin/view-users','AdminController@viewUsers')->name('view_users');
Route::match(['get','post'],'/admin/delete-user/{id}','AdminController@deleteUser');


//blog Route
Route::match(['get','post'],'/admin/add-blog','AdminController@addBlog')->name('add_blog');
Route::match(['get','post'],'/admin/view-blogs','AdminController@viewBlogs')->name('view_blog');
Route::post('/admin/update-blog-status','AdminController@updateStatus')->name('update_status');
Route::match(['get','post'],'/admin/delete-blog/{id}','AdminController@deleteBlog');
Route::match(['get','post'],'/admin/edit-blog/{id}','AdminController@editBlog')->name('edit_blog');

Route::match(['get','post'],'/admin/add-blog-details/{id}','AdminController@addBlogDetails')->name('add_blog_details');
Route::match(['get','post'],'/admin/delete-blog-details/{id}','AdminController@deleteBlogDetails');
Route::match(['get','post'],'/admin/update-blog-details/{id}','AdminController@updateBlogDetails');


//florist Route


Route::match(['get','post'],'/florist/dashboard','AdminController@dashboard')->name('florist_florist_dashboard');
Route::match(['get','post'],'/admin/add-florist','FloristController@addFlorist0')->name('florist_add_florist');
Route::match(['get','post'],'/admin/view-florists','FloristController@viewFlorists')->name('florist_view_florist');
Route::match(['get','post'],'/admin/add-manager','FloristController@addManager')->name('florist_add_manager');

Route::match(['get','post'],'/admin/view-managers','FloristController@viewManagers')->name('florist_view_manager');

Route::match(['get','post'],'/admin/florist-profile','FloristController@floristProfile')->name('florist_profile');
Route::match(['get','post'],'/admin/change-password','FloristController@changePassword');
Route::match(['get','post'],'/admin/delete-florist/{id}','FloristController@deleteFlorist');
Route::match(['get','post'],'/admin/view-florist-flowers/{id}','FloristController@viewFloristFlowers')->name('view_florist_flowers');
Route::match(['get','post'],'/florist/add-charges/{id}','FloristController@addCharges')->name('florist_add_charges');
Route::match(['get','post'],'/florist/delete-charges/{id}','FloristController@deleteCharges');
Route::match(['get','post'],'/florist/edit-charges/{id}','FloristController@editCharges')->name('florist_edit_charges');

Route::match(['get','post'],'/florist/timetable','FloristController@timetable')->name('florist_timeTable');
Route::match(['get','post'],'/florist/working-hours','FloristController@WorkingHours')->name('florist_working_hours');

Route::match(['get','post'],'/florist/edit-timetable/{id}','FloristController@editTimetable')->name('florist_edit_timeTable');
Route::match(['get','post'],'/florist/edit-working-hour/{id}','FloristController@editWorkingHour')->name('florist_edit_working_hours');

Route::match(['get','post'],'/florist/delete-timetable/{id}','FloristController@deleteTime');
Route::match(['get','post'],'/florist/delete-working-hour/{id}','FloristController@deleteWorkingHour');

Route::post('/florist/update-time-status','FloristController@updateTimeStatus');
Route::post('/florist/update-day-status','FloristController@updateDayStatus');

Route::post('/admin/update-florist-status','FloristController@updateStatus');

//City Route
Route::match(['get','post'],'/admin/add-city','CitiesController@addCity');
Route::match(['get','post'],'/admin/view-cities','CitiesController@viewCities');
Route::match(['get','post'],'/admin/edit-city/{id}','CitiesController@editCity');
Route::match(['get','post'],'/admin/delete-city/{id}','CitiesController@deleteCity');


//Category Route
Route::match(['get','post'],'/admin/add-category','CategoryController@addCategory');
Route::match(['get','post'],'/admin/add-parent-category','CategoryController@addParentCategory');
Route::match(['get','post'],'/admin/view-categories','CategoryController@viewCategories');
Route::match(['get','post'],'/admin/edit-category/{id}','CategoryController@editCategory');
Route::match(['get','post'],'/admin/edit-parent-category/{id}','CategoryController@editParentCategory');
Route::match(['get','post'],'/admin/delete-category/{id}','CategoryController@deleteCategory');
Route::post('/admin/update-category-status','CategoryController@updateStatus');
//Occasions Route
Route::match(['get','post'],'/admin/add-occasion','OccasionsController@addOccasion')->name('admin_add_occasion');
Route::match(['get','post'],'/admin/view-occasions','OccasionsController@viewOccasions')->name('admin_view_occasions');
Route::match(['get','post'],'/admin/edit-occasion/{slug}','OccasionsController@editOccasion')->name('admin_edit_occasion');
Route::match(['get','post'],'/admin/delete-occasion/{id}','OccasionsController@deleteOccasion');
Route::post('/admin/update-occasion-status','OccasionsController@updateStatus');
//Flower type Route
Route::match(['get','post'],'/admin/add-type','TypesController@addType');
Route::match(['get','post'],'/admin/view-types','TypesController@viewTypes');
Route::match(['get','post'],'/admin/edit-type/{slug}','TypesController@editType');
Route::match(['get','post'],'/admin/delete-type/{id}','TypesController@deleteType');
Route::post('/admin/update-type-status','TypesController@updateStatus');

//Product Route
Route::match(['get','post'],'/admin/add-product','ProductsController@addProduct')->name('florist_add_product');
Route::match(['get','post'],'/admin/view-products','ProductsController@viewProducts')->name('florist_view_products');
Route::match(['get','post'],'/admin/edit-product/{id}','ProductsController@editProduct')->name('florist_edit_products');
Route::match(['get','post'],'/admin/delete-product/{id}','ProductsController@DeleteProduct');
Route::post('/admin/update-product-status','ProductsController@updateStatus');
Route::post('/admin/update-featured-florist-status','FloristController@updateFeatured');
//discount routes
Route::match(['get','post'],'/admin/add-discount/{id}','ProductsController@addDiscount')->name('florist_add_discount');
Route::get('/admin/delete-discount/{id}','ProductsController@deleteDiscount');
Route::post('/admin/update-discount-status','ProductsController@updateDiscountStatus');

//Products Attributes
Route::match(['get','post'],'/admin/add-attributes/{id}','ProductsController@addAttributes');
Route::get('/admin/delete-attribute/{id}', 'ProductsController@deleteAttribute');
Route::match(['get','post'],'/admin/edit-attributes/{id}','ProductsController@editAttributes');
Route::match(['get','post'],'/admin/add-images/{id}','ProductsController@addImages');
Route::get('/admin/delete-alt-image/{id}','ProductsController@deleteAltImage');

//Banners Route
Route::match(['get','post'],'/admin/banners','BannersController@banners');
Route::match(['get','post'],'/admin/add-banner','BannersController@addBanner');
Route::match(['get','post'],'/admin/edit-banner/{id}','BannersController@editBanner');
Route::match(['get','post'],'/admin/delete-banner/{id}','BannersController@deleteBanner');
Route::post('/admin/update-banner-status','BannersController@updateStatus');

//Coupons Route
Route::match(['get','post'],'/admin/add-coupon','CouponsController@addCoupon')->name('florist_add_coupon');
Route::match(['get','post'],'/admin/view-coupons','CouponsController@viewCoupons')->name('florist_view_coupons');
Route::match(['get','post'],'/admin/edit-coupon/{id}','CouponsController@editCoupon')->name('florist_edit_coupon');

Route::match(['get','post'],'/admin/admin-add-coupon','CouponsController@addCoupon')->name('admin_add_coupon');
Route::match(['get','post'],'/admin/admin-view-coupons','CouponsController@viewCoupons')->name('admin_view_coupons');
Route::match(['get','post'],'/admin/admin-edit-coupon/{id}','CouponsController@editCoupon')->name('admin_edit_coupon');

Route::get('/admin/delete-coupon/{id}','CouponsController@deleteCoupon');
Route::post('/admin/update-coupon-status','CouponsController@updateStatus');
// Events Route
Route::match(['get','post'],'/admin/add-event','EventsController@addEvent');
Route::match(['get','post'],'/admin/view-events','EventsController@viewEvents');
Route::match(['get','post'],'/admin/edit-event/{id}','EventsController@editEvent');
Route::get('/admin/delete-event/{id}','EventsController@deleteEvent');
Route::post('/admin/update-event-status','EventsController@updateStatus');


//Orders Route
Route::get('/admin/orders','ProductsController@viewOrders')->name('admin_view_orders');
Route::get('/admin/canceled-orders','ProductsController@viewCanceledOrders')->name('admin_view_cancel_orders');
Route::get('/admin/not-processed-orders','ProductsController@notProcessedOrders')->name('admin_not_processed_orders');
Route::get('/admin/change-show-order-status/{id}','ProductsController@changeShowOrderStatus')->name('admin_change_show_order_status');
Route::get('/admin/orders-for-delete','ProductsController@ordersForDelete')->name('admin_orders_for_delete');


Route::get('/admin/order/{id}','ProductsController@viewOrderDetails')->name('admin_view_orderDetails');

Route::get('/admin/delete-order/{id}','ProductsController@deleteOrder')->name('admin_delete_order');

Route::get('/admin/order-invoice/{id}','ProductsController@orderInvoice')->name('admin_order_invoice');

Route::get('/florist/orders','ProductsController@floristViewOrders')->name('florist_view_orders');

Route::get('/florist/order/{id}','ProductsController@floristViewOrderDetails')->name('florist_order_details');


Route::post('/admin/update-order-status','ProductsController@updateOrderStatus');


});
Route::get('/logout','UsersController@logout');
Route::get('/admin-logout','AdminController@logout');

Route::get('/florist-logout','FloristController@florist_logout');

});
}
