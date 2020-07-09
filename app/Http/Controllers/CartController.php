<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Cart;
use App\coupon;
session_start();

class CartController extends Controller
{
    public function save_cart(Request $request){
    	$productId = $request->productid_hidden;
    	$quantity = $request->quantity;

    	$product_info = DB::table('tbl_product')->where('product_id', $productId)->first();

    	// Cart::add('293ad', 'Product 1', 1, 9.99, 550); 
    	// Cart::destroy();
    	$data['id'] = $product_info->product_id;
    	$data['qty'] = $quantity;
    	$data['name'] = $product_info->product_name;
    	$data['price'] = $product_info->product_price;
    	$data['weight'] = $product_info->product_price;
    	$data['options']['image'] =$product_info->product_image;
    	Cart::Add($data);
    	return Redirect::to('/show-cart');
    }
    public function show_cart(){
    	$cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id','desc')->get();
    	return view('pages.cart.show_cart')->with('category', $cate_product);
    }
    public function delete_to_cart($rowId){
    	Cart::update($rowId, 0);
    	return Redirect::to('/show-cart');
    }
    public function update_cart_quantity(Request $request){
    	$rowId = $request->rowId_cart;
    	$qty = $request->cart_quantity;
    	Cart::update($rowId, $qty);
    	return Redirect::to('/show-cart');
    }


    //coupon
    public function check_coupon(Request $request){
        $data = $request->all();
        $coupon = coupon::where('coupon_code',$data['coupon'])->first();
        if($coupon){
            $count_coupon = $coupon->count();
            if($count_coupon>0){
                $coupon_session= Session::get('coupon');
                if($coupon_session==true){
                    $is_avaiable=0;
                    if($is_avaiable==0){
                        $cou[]= array(
                            'coupon_code'=>$coupon->coupon_code,
                            'coupon_condition'=>$coupon->coupon_condition,
                            'coupon_numbers'=>$coupon->coupon_numbers

                        );
                        Session::put('coupon',$cou);

                    }
                } else {
                    $cou[]= array(
                            'coupon_code'=>$coupon->coupon_code,
                            'coupon_condition'=>$coupon->coupon_condition,
                            'coupon_numbers'=>$coupon->coupon_numbers

                        );
                    Session::put('coupon',$cou);
                }
                Session::save();
                return Redirect()->back()->with('message','Thêm mã giảm giá thành công');

            }
        
        }else {
            return Redirect()->back()->with('message','Mã giảm giá không đúng');

        }

    }
}
