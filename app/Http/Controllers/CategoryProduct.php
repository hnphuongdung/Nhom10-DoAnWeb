<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Brand;
use App\Product;
use Session;
use Illuminate\Support\Facades\Redirect;
use Cart;
session_start();
class CategoryProduct extends Controller
{
    public function add_category_product(){
    	return view('admin.add_category_product');
    }
    public function all_category_product(){
    	$all_category_product = DB::table('tbl_category_product')->get();
    	$manager_category_product = view('admin.all_category_product')->with('all_category_product',$all_category_product);
    	return view('admin_layout')->with('admin.all_category_product',$manager_category_product);

    }
    public function save_category_product(Request $request){
    	$data = array();
    	$data['category_name']=$request->category_name;
        $data['meta_keywords']=$request->category_product_keyword;
    	$data['category_desc']=$request->category_desc;
    	$data['category_status']=$request->category_status;

    	DB::table('tbl_category_product')->insert($data);
    	Session::put('message','Thêm danh mục thành công');
    	return Redirect::to('add-category-product');    
    }
    public function active_category_product($category_product_id){
    	DB::table('tbl_category_product')->where('category_id',$category_product_id)->update(['category_status'=>1]);
    	Session::put('message','Kích hoạt danh mục sản phẩm thành công');
    	return Redirect::to('all-category-product');
    }
    public function unactive_category_product($category_product_id){
    	DB::table('tbl_category_product')->where('category_id',$category_product_id)->update(['category_status'=>0]);
    	Session::put('message','Hủy kích hoạt danh mục sản phẩm thành công');
    	return Redirect::to('all-category-product');
    }
    public function edit_category_product($category_product_id){
    	$edit_category_product = DB::table('tbl_category_product')->where('category_id',$category_product_id)->get();
    	$manager_category_product = view('admin.edit_category_product')->with('edit_category_product',$edit_category_product);
    	return view('admin_layout')->with('admin.edit_category_product',$manager_category_product);
    }
    public function update_category_product(Request $request,$category_product_id){
    	$data = array();
    	$data['category_name']=$request->category_name;
        $data['meta_keywords']=$request->category_product_keyword;
    	$data['category_desc']=$request->category_desc;
    	DB::table('tbl_category_product')->where('category_id',$category_product_id)->update($data);
    	Session::put('message','Cập nhật danh mục sản phẩm thành công');
    	return Redirect::to('all-category-product');
    }
    public function delete_category_product($category_product_id){
    	DB::table('tbl_category_product')->where('category_id',$category_product_id)->delete();
    	Session::put('message','Xóa danh mục sản phẩm thành công');
    	return Redirect::to('all-category-product');
    }

    public function search_category(request  $request){
        $keyword = $request->keyword;
        $search_category = DB::table('tbl_category_product')->where('category_name' , 'like' , '%'. $keyword.'%') ->get();

        return view('admin.search_category')->with('search_category',$search_category);

    }


    // END Function Admin Page

    public function show_category_home( Request $request ,  $category_id){


       

        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id','desc')->get();

        $category_by_id = DB::table('tbl_product')->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')->where('tbl_product.category_id', $category_id)->paginate(12);
        foreach ($category_by_id as $key => $val ) {
            // --SEO
            $meta_desc = $val->category_desc;
            $meta_keywords = $val->meta_keywords;
            $meta_title = $val->category_name;
            $url_canonical = $request->url();
        // --End SEO
        }

       return view('pages.category.show_category')->with('category', $cate_product)->with('category_by_id', $category_by_id);
}
}
