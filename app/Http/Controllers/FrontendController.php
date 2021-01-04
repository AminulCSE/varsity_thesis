<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('website');
    }


    public function product_details($id){
    	$product_details = DB::table('products')->where('id', $id)->first();
    	return view('website.product_details', compact('product_details'));
    }

    // products show by categories id
    public function show_product_by_cat($id){
        $products_by_cat_id = DB::table('products')->where('category_id', $id)->paginate(1);
         return view('website.show_product_by_cat', ['all_productss' => $products_by_cat_id], compact('products_by_cat_id'));
    }


    public function show_product_by_cat_subcat($id, $subcatid){
        $products_by_cat_id = DB::table('products')->where('category_id', $id)->paginate(1);
         return view('website.show_product_by_cat', ['all_productss' => $products_by_cat_id], compact('products_by_cat_id'));
    }





    // Frontend blog Controller
    public function blog_details($id){
        $blogshow_id = DB::table('blogs')->where('id', $id)->first();
         return view('website.blog.blog_details', compact('blogshow_id'));
    }






    

    // public function userHome()
    // {
    //     return view('home');
    // }
}
