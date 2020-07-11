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

    //giới thiệu
    public function about(Request $Request) {
        // return view('pages.about');
        // --SEO
		$meta_desc="Canteen UIT - Ăn mà ngại thì chỉ có hại cho bao tử mà thôi!" ;
		$meta_keywords="CanteenUIT, đồ ăn UIT, thức ăn UIT";
		$meta_title="Chào mừng bạn đến với canteen UIT";
		$url_canonical = $Request->url();
		// --End SEO
    	$cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id','desc')->get();

    	$all_product = DB::table('tbl_product')->where('product_status', '1')->orderby('product_id','desc')->limit(4)->get();
    	return view('pages.about')->with('category', $cate_product)->with('all_product', $all_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
	}
	
	//blog
	public function blog(Request $Request) {
        // return view('pages.blog');
        // --SEO
		$meta_desc="Canteen UIT - Ăn mà ngại thì chỉ có hại cho bao tử mà thôi!" ;
		$meta_keywords="CanteenUIT, đồ ăn UIT, thức ăn UIT";
		$meta_title="Chào mừng bạn đến với canteen UIT";
		$url_canonical = $Request->url();
		// --End SEO
    	$cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id','desc')->get();

    	$all_product = DB::table('tbl_product')->where('product_status', '1')->orderby('product_id','desc')->limit(4)->get();
    	return view('pages.blog')->with('category', $cate_product)->with('all_product', $all_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
	}

	//contact
	public function ket_noi(Request $Request) {
        // return view('pages.contact');
        // --SEO
		$meta_desc="Canteen UIT - Ăn mà ngại thì chỉ có hại cho bao tử mà thôi!" ;
		$meta_keywords="CanteenUIT, đồ ăn UIT, thức ăn UIT";
		$meta_title="Chào mừng bạn đến với canteen UIT";
		$url_canonical = $Request->url();
		// --End SEO
    	$cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id','desc')->get();

    	$all_product = DB::table('tbl_product')->where('product_status', '1')->orderby('product_id','desc')->limit(4)->get();
    	return view('pages.contact')->with('category', $cate_product)->with('all_product', $all_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);

	}

	public function save_contact(Request $Request)
	{
		$meta_desc="Canteen UIT - Ăn mà ngại thì chỉ có hại cho bao tử mà thôi!" ;
		$meta_keywords="CanteenUIT, đồ ăn UIT, thức ăn UIT";
		$meta_title="Chào mừng bạn đến với canteen UIT";
		$url_canonical = $Request->url();
		// --End SEO
    	 //$this -> AuthLogin();
    	$data = array();
    	$data['name']=$Request->name;
        $data['email']=$Request->email;
    	$data['subject']=$Request->subject;
    	$data['mess']=$Request->mess;

    	DB::table('tbl_fedback')->insert($data);
    	Session::put('message','Gửi tin nhắn thành công, chúng tôi sẽ sớm phản hồi tới bạn');
    	return Redirect::to('ket-noi');
	}

	//điều khoản và điều kiện
	public function dieu_khoan(Request $Request) {
        // return view('pages.dieukhoan');
        // --SEO
		$meta_desc="Canteen UIT - Ăn mà ngại thì chỉ có hại cho bao tử mà thôi!" ;
		$meta_keywords="CanteenUIT, đồ ăn UIT, thức ăn UIT";
		$meta_title="Chào mừng bạn đến với canteen UIT";
		$url_canonical = $Request->url();
		// --End SEO
    	$cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id','desc')->get();

    	$all_product = DB::table('tbl_product')->where('product_status', '1')->orderby('product_id','desc')->limit(4)->get();
    	return view('pages.dieukhoan')->with('category', $cate_product)->with('all_product', $all_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
	}

	//quyền riêng tư
	public function quyen_rieng_tu(Request $Request) {
        // return view('pages.quyenriengtu');
        // --SEO
		$meta_desc="Canteen UIT - Ăn mà ngại thì chỉ có hại cho bao tử mà thôi!" ;
		$meta_keywords="CanteenUIT, đồ ăn UIT, thức ăn UIT";
		$meta_title="Chào mừng bạn đến với canteen UIT";
		$url_canonical = $Request->url();
		// --End SEO
    	$cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id','desc')->get();

    	$all_product = DB::table('tbl_product')->where('product_status', '1')->orderby('product_id','desc')->limit(4)->get();
    	return view('pages.quyenriengtu')->with('category', $cate_product)->with('all_product', $all_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);
	}
}
