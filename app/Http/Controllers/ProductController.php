<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Brand;
use Session;
use Illuminate\Support\Facades\Redirect;
use Cart;
session_start();

class ProductController extends Controller
{
    public function add_product(){
    	 $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        // $this -> AuthLogin();
         // $cate_product= Brand::all();
    	return view('admin.add_product')->with('cate_product',$cate_product);
    }
    public function all_product(){
    	$all_product = DB::table('tbl_product')->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')->orderby('tbl_product.product_id')->paginate(10);
        //$this -> AuthLogin();
        //$all_product = Brand::all()->paginate(10); 
    	$manager_product = view('admin.all_product')->with('all_product',$all_product);
    	return view('admin_layout')->with('admin.all_product',$manager_product);

    }
    public function save_product(Request $request){
    	$data = array();
    	$data['product_name']=$request->product_name;
    	$data['product_desc']=$request->product_desc;
    	$data['product_status']=$request->product_status;
    	$data['product_price']=$request->product_price;
    	$data['product_promotion_price']=$request->product_promotion_price;
    	$data['category_id']=$request->product_cate;
    	$data['product_image']=$request->product_image;

    	$get_image = $request->file('product_image');

    	if($get_image){
    		$get_name_image = $get_image->getClientOriginalName();
    		$name_image = current(explode('.',$get_name_image));
    		$new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
    		$get_image->move('public/upload/product',$new_image);
    		$data['product_image'] = $new_image;
    		DB::table('tbl_product')->insert($data);
    		Session::put('message','Thêm sản phẩm thành công');
    		return Redirect::to('all-product');

    	}

    	DB::table('tbl_product')->insert($data);
    	Session::put('message','Thêm sản phẩm thành công');
    	return Redirect::to('add-product');
    }
    public function active_product($product_id){
    	DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>1]);
    	Session::put('message','Kích hoạt danh mục sản phẩm thành công');
    	return Redirect::to('all-product');
    }
    public function unactive_product($product_id){
    	DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>0]);
    	Session::put('message','Hủy kích hoạt danh mục sản phẩm thành công');
    	return Redirect::to('all-product');
    }
    public function edit_product($product_id){
    	$cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
    	$edit_product = DB::table('tbl_product')->where('product_id',$product_id)->get();
    	$manager_product = view('admin.edit_product')->with('edit_product',$edit_product)->with('cate_product',$cate_product);
    	return view('admin_layout')->with('admin.edit_product',$manager_product);
    }
    public function update_product(Request $request,$product_id){
    	$data = array();
    	$data['product_name']=$request->product_name;
    	$data['product_price']=$request->product_price;
    	$data['product_promotion_price']=$request->product_promotion_price;
    	$data['product_desc']=$request->product_desc;
    	$data['product_status']=$request->product_status;
    	$data['category_id']=$request->product_cate;
    	$get_image = $request->file('product_image');
    	if($get_image){
    		$get_name_image = $get_image->getClientOriginalName();
    		$name_image = current(explode('.',$get_name_image));
    		$new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
    		$get_image->move('public/upload/product',$new_image);
    		$data['product_image'] = $new_image;
    		DB::table('tbl_product')->where('product_id',$product_id)->update($data);
    		Session::put('message','Cập nhật sản phẩm thành công');
    		return Redirect::to('all-product');

    	}

    	DB::table('tbl_product')->where('product_id',$product_id)->update($data);
    	Session::put('message','Cập nhật sản phẩm thành công');
    	return Redirect::to('all-product');

    }
    public function delete_product($product_id){
    	DB::table('tbl_product')->where('product_id',$product_id)->delete();
    	Session::put('message','Xóa sản phẩm thành công');
    	return Redirect::to('all-product');
    }
    // END ADMIN PAGE
    public function details_product($product_id){
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id','desc')->get();

       $details_product = DB::table('tbl_product')->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')->where('tbl_product.product_id', $product_id)->get();

       foreach($details_product as $key => $value){
           $category_id = $value->category_id;
       }

       $related_product = DB::table('tbl_product')->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')->where('tbl_category_product.category_id', $category_id)->whereNotIn('tbl_product.product_id', [$product_id])->limit(4)->get();

        return view('pages.sanpham.show_details')->with('category', $cate_product)->with('product_details', $details_product)->with('related', $related_product);
    }
}
