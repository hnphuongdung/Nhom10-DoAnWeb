<?php

use Illuminate\Support\Facades\Route;
 
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
//Frontend
Route::get('/','HomeController@index');
Route::get('/trang-chu','HomeController@index');
Route::get('/gioi-thieu','HomeController@about');
Route::get('/blog','HomeController@blog');
Route::get('/ket-noi','HomeController@ket_noi');
Route::get('/dieu-khoan','HomeController@dieu_khoan');
Route::get('/quyen-rieng-tu','HomeController@quyen_rieng_tu');

// Danh mục sản phẩm - trang chủ
Route::get('/danh-muc-san-pham/{category_id}','CategoryProduct@show_category_home');
Route::get('/chi-tiet-san-pham/{product_id}','ProductController@details_product');

//Backend
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout','AdminController@logout');
Route::post('/admin-dashboard','AdminController@dashboard');

//Category
Route::get('/add-category-product','CategoryProduct@add_category_product');
Route::get('/edit-category-product/{category_product_id}','CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}','CategoryProduct@delete_category_product');

Route::get('/all-category-product','CategoryProduct@all_category_product');
Route::get('/active-category-product/{category_product_id}','CategoryProduct@active_category_product');
Route::get('/unactive-category-product/{category_product_id}','CategoryProduct@unactive_category_product');
Route::post('/save-category-product','CategoryProduct@save_category_product');
Route::post('/search-category','CategoryProduct@search_category');

Route::post('/update-category-product/{category_product_id}','CategoryProduct@update_category_product');

//Product
Route::get('/add-product','ProductController@add_product');
Route::get('/edit-product/{category_product_id}','ProductController@edit_product');
Route::get('/delete-product/{category_product_id}','ProductController@delete_product');

Route::get('/all-product','ProductController@all_product');
Route::get('/active-product/{product_id}','ProductController@active_product');
Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::post('/save-product','ProductController@save_product');
Route::post('/update-product/{product_id}','ProductController@update_product');
Route::post('/search-product','ProductController@search_product');

//coupon
Route::post('/check-coupon','CartController@check_coupon');
Route::get('/unset-coupon','CouponController@unset_coupon');


Route::get('/insert-coupon','CouponController@insert_coupon');
Route::get('/list-coupon','CouponController@list_coupon');
Route::get('/delete-coupon/{coupon_id}','CouponController@delete_coupon');
Route::post('/insert-coupon-code','CouponController@insert_coupon_code');
//Cart
Route::post('/save-cart','CartController@save_cart');
Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart');
Route::post('/update-cart-quantity','CartController@update_cart_quantity');

//Checkout
Route::get('/login-checkout','CheckoutController@login_checkout');
//Route::get('/del-fee','CheckoutController@del_fee');
Route::post('/order-place','CheckoutController@order_place');
Route::get('/logout-checkout','CheckoutController@logout_checkout');
Route::get('/register-checkout','CheckoutController@register_checkout');
Route::post('/add-customer','CheckoutController@add_customer');
Route::get('/order-place','CheckoutController@order_place');
Route::post('/login-customer','CheckoutController@login_customer');
Route::get('/checkout','CheckoutController@checkout');

//Route::post('/calculate-fee','CheckoutController@calculate_fee');
//Route::post('/select-delivery-home','CheckoutController@select_delivery_home');
//Route::post('/confirm-order','CheckoutController@confirm_order');

//order
// Route::get('/manage-order','CheckoutController@manage_order');
// Route::get('/view-order/{order_Id}','CheckoutController@view_order');
Route::get('/manage-order/', 'OrderController@manage_order');
Route::get('/view-order/{order_code}/','OrderController@view_order');