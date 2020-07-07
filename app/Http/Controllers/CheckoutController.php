<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class CheckoutController extends Controller
{
    public function login_checkout() {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id','desc')->get();
        $all_product = DB::table('tbl_product')->where('product_status', '1')->orderby('product_id','desc')->limit(4)->get();
        return view('pages.checkout.login_checkout')->with('category', $cate_product)->with('all_product', $all_product);
    }

    public function register_checkout() {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id','desc')->get();
        $all_product = DB::table('tbl_product')->where('product_status', '1')->orderby('product_id','desc')->limit(4)->get();
        return view('pages.checkout.register_checkout')->with('category', $cate_product)->with('all_product', $all_product);
    }
}
