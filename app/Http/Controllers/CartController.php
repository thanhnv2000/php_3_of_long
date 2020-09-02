<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;


class CartController extends Controller
{
    
  public function addToCart($id){
    $products = Product::find($id);
    $cart = session()->get('cart');
    if (isset($cart[$id])){
       $cart[$id]['quantity'] =   $cart[$id]['quantity'] + 1;
    } else {
     $cart[$id] = [
        'name' => $products->name,
        'price' => $products->price,
        'image' => $products->image,
        'quantity' => 1
     ];
    }
    session()->put('cart', $cart); 
    return response()->json([
    'code' => 200,
    'message' => 'success'
    ], 200);
   
  }
  

  public function shopingCart(){
      $cart = session()->get('cart');
      
      $categories = Category::all();
      return view('client.shoping-cart', [
          'categories' => $categories,
          'carts' => $cart
      ]);
  }

  public function updateCart(Request $request){
      if($request->quantity === 0){
        return response()->json([
            
            ]);
      }
     
    if($request->id && $request->quantity){
        $carts = session()->get('cart');
        $carts[$request->id]['quantity'] = $request->quantity;
        session()->put('cart', $carts);
        $carts = session()->get('cart');
        
        $cart_components = view('client.components.cart-components', compact('carts'))->render();
        return response()->json([
            'cart_components' => $cart_components,
            'code' => 200
        ],200);
    }
  }

  public function deleteCart(Request $request){
    if($request->id ){
        $carts = session()->get('cart');
        unset($carts[$request->id ]);
        session()->put('cart', $carts);
        $carts = session()->get('cart');
        $cart_components = view('client.components.cart-components', compact('carts'))->render();
        return response()->json([
            'cart_components' => $cart_components,
            'code' => 200
        ],200);
    }
  }

  public function checkOut(){
    $cart = session()->get('cart');
    $msg = isset($_GET['msg']) ? $_GET['msg'] : null;
    $categories = Category::all();
      return view('client.checkout', [
        'carts' => $cart,
        'categories' => $categories,
        'msg' => $msg
      ]);
  }

  public function saveOrder(Request $request){
    $cart = session()->get('cart');
    //dd($request->all());
    $total = 0;
    foreach ($cart as $key => $value){
      $total += $value['price']* $value['quantity'];
    }
    $model = new Order();
    $model->fill($request->all());
    $model->total_price = $total;
    $model->save(); 
    $objNoiDung = [
      'fullname' => $request->customer_name,
      'email' => $request->customer_email,
      'total' => $total
    ];

    // Mail::send([], [], 

    //   function($message) use ($objNoiDung){
    //     $message->to($objNoiDung['email'],$objNoiDung['fullname'])
    //     ->from('longhb0512@gmail.com', 'Hoàng Tuấn Long')
    //     ->setBody('Xin Chào Bạn : '. $objNoiDung['fullname']. '<br><b> Bạn Vừa Đặt Đơn Hàng Trị Giá là '. $objNoiDung['total']. '</b>'. 'text/html' )
    //     ->setSubject('Đặt Hàng Thành Công');

    //   });
    
    return redirect()->route('check.out');
  }
}
