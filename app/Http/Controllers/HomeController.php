<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Cart;
session_start();

class HomeController extends Controller
{
    public function index(Request $Request){

    	// --SEO
		$meta_desc="Canteen UIT - Ăn mà ngại thì chỉ có hại cho bao tử mà thôi!" ;
		$meta_keywords="CanteenUIT, đồ ăn UIT, thức ăn UIT";
		$meta_title="Chào mừng bạn đến với canteen UIT";
		$url_canonical = $Request->url();
		// --End SEO
    	$cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id','desc')->get();

    	$all_product = DB::table('tbl_product')->where('product_status', '1')->orderby('product_id','desc')->limit(4)->get();
    	return view('pages.home')->with('category', $cate_product)->with('all_product', $all_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
    }
}
