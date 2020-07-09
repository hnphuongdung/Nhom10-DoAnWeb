<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\coupon;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CouponController extends Controller
{
    public function insert_coupon(){
    	return view('admin.coupon.insert_coupon');
    }

    public function list_coupon(){
        $coupon = coupon::orderby('coupon_id','DESC')->get();
        return view('admin.coupon.list_coupon')->with(compact('coupon'));
    }

    public function delete_coupon($coupon_id){
        $coupon = coupon::find($coupon_id);
        $coupon ->delete();
        Session::put('message','Xóa mã thành công');
            return Redirect::to('list-coupon');
    }
    public function insert_coupon_code(Request $request){
    	$data = $request->all();

    	$coupon = new coupon;

    	$coupon->coupon_name = $data['coupon_name'];
    	$coupon->coupon_code = $data['coupon_code'];
    	$coupon->coupon_times = $data['coupon_times'];
    	$coupon->coupon_condition = $data['coupon_condition'];
    	$coupon->coupon_numbers = $data['coupon_numbers'];
    	$coupon->save();

    	Session::put('message','Thêm mã  giảm giá thành công');
    		return Redirect::to('insert-coupon');
    }

    public function unset_coupon(){
        $coupon = Session::get('coupon');
        if($coupon==true){
            Session::forget('coupon');
            return Redirect()->back()->with('message','Xóa mã khuyến mãi thành công');
        }
    }
}
