<?php

use App\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::post('login','loginController@postLogin');
// Route::get('profile','UserController@profile');

// Route::get('food', function () {
//     return 'Hello Poly';

// })->name('demo');

// // chuyển hướng trang 
// Route::redirect('/here', '/login');

// Route::view('login', 'auth.login');

// // tạo biểu thức quy tắc cho Route
// // Route::get('poly/{classname}/{classid}', function($name, $id){
// //     return "<a href='".route('demo')."'>link demo</a>";
// // })->where('id', '[0-9]+');

// // Route::get('user/{name?}', function($name = null){
// //       return " class Name:  $name";
// // });

// // đều có tiền tố giống nhau
// Route::group(['prefix' => 'web'], function(){
//     Route::get('hb', function(){
//         return 'hello';
//     });
//     Route::get('hb123', function(){
//         return 'hello world';
//     });
// });

// // biệt danh có 1 số truyền vào
// Route::get('user/{name}', function($name){
//     return " class Name:  $name";
// })->name('member');

// // biệt danh có nhiều số truyền vào
// Route::get('user/{name}/class/{classId}', function($name,$classId){
//     return " class Name:  $name - Lớp $classId";
// })->name('member.show');


Route::get('products', 'ProductController@index')->name('index');
//Route::post('search-product', 'ProductController@search')->name('search-product');
Route::get('product/{id}/remove', 'ProductController@delete')->middleware('auth')->name('remove-product');

Route::get('add/product', 'ProductController@addPro')->middleware('auth')->name('add.product');
Route::post('add/product', 'ProductController@savePro')->middleware('auth');

Route::get('edit/product/{id}', 'ProductController@edit')->middleware('auth')->name('edit.product');
Route::post('edit/product/{id}', 'ProductController@saveEdit')->middleware('auth');




// categories
Route::get('categories', 'CategoryController@index')->name('categories');
Route::get('add-categories', 'CategoryController@addCate')->middleware('auth')->name('add.category');
Route::post('save-categories', 'CategoryController@saveAdd')->middleware('auth')->name('save-add-category');
Route::get('categories/edit/{id}', 'CategoryController@edit')->middleware('auth')->name('edit.category');
Route::post('categories/edit/{id}', 'CategoryController@saveEdit')->middleware('auth');

Route::get('categories/{id}/remove', 'CategoryController@delete')->middleware('auth')->name('cate.remove');

Route::get('/search-cate', 'CategoryController@search')->name('search-cate');

// trang chủ
Route::get('/', function(){
    return redirect()->route('home.page');
});
Route::get('home', 'HomeController@homePage')->name('home.page');
Route::get('shop/list', 'HomeController@shopList')->name('shop.list');
Route::get('detail/product/{id}', 'HomeController@detailProduct')->name('detail.product');

Route::get('add/cart/{id}', 'CartController@addToCart')->name('add.cart');

Route::get('update/cart', 'CartController@updateCart')->name('update.cart');

Route::get('delete/cart', 'CartController@deleteCart')->name('cart.delete');

Route::get('checkout', 'CartController@checkOut')->name('check.out');

Route::get('shoing-cart', 'CartController@shopingCart')->name('shoping.cart');

Route::post('save/order', 'CartController@saveOrder')->name('save.order');

Route::get('list-cate/{id}', 'HomeController@listCate')->name('list.cate');


// Users

Route::get('users', 'UserController@getAll')->name('users');
Route::get('login', function () {
    return view('auth.login');
})->name('login');
Route::post('login','loginController@postLogin');

Route::any('logout', function () {
    Auth::logout();
    return redirect()->route('dashboard');
})->name('logout');




Route::get('main', function () {
    return view('layouts.main');
});

Route::get('main-page', function () {
    return view('layouts.main-page');
});

Route::get('main-shop', function () {
    return view('layouts.main-shop-list');
});


Route::get('get', function (){
    return session()->get('tess');
});


Route::get('dashboard', 'HomeController@dashboard')->name('dashboard');


