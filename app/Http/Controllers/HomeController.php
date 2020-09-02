<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function homePage(){
        $products = Product::all();
        $products2 = Product::orderBy('id','desc')->get();
        $categories = Category::all();
        
       // dd($products3);
        return view('client.home-page', [
            'products' => $products,
            'products2' => $products2,
            'categories' => $categories
        ]);
    }

   

    public function shopList(){
        $products = Product::orderBy('id','desc')->paginate(9);
        $categories = Category::all();
        //dd($categories);
        return view('client.product-page', [
            'categories' => $categories,
            'products' => $products
        ]);
        return view('client.product-page');
    }

    public function detailProduct($id){
        //dd($id);
        $categories = Category::all();
        $detailPro = Product::find($id);
        $products = Product::where('cate_id', '=', $detailPro->cate_id)->get();
       
        return view('client.detail-product', compact('detailPro', 'categories', 'products'));
    }
    public function dashboard(){
        $users = User::count();
        $product = Product::count();
        $categories = Category::count();
        return view('layouts.index',[
            'product' => $product,
            'categories' => $categories,
            'users' => $users
        ]);
    }
    

    public function listCate($id){
        $categories = Category::all();
        $products = Product::where('cate_id', '=', $id)->get();
        $cate_name = Category::find($id);
        return view('client.list-cate-home', [
            'products' => $products,
            'categories' => $categories,
            'cate_name' => $cate_name
            
        ]);

    }
    
}
